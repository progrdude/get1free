<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Cabinet extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('user_agent');
		$this->load->model('cabinet/Company_model', 'CModel');
		//запрещаем доступ к любому методу, если чел не авторизован!
		if (!isset($_SESSION['ses_company_data'])) {
			redirect(base_url(), 'location', 301);
		}


	}


	public function index()
	{
		$company_data = $this->CModel->get_info_user($_SESSION['ses_company_data']['user_id']);
		$user_order = $this->CModel->get_order($_SESSION['ses_company_data']['user_id']);
		$data = [
			'title' => 'Cabinet',
			'config_site' => $this->CModel->get_info_site(),
			'user_order' => $user_order,
			'company_data' => $company_data,

		];
		$this->load->view('cabinet/header_hidden', $data);
        if ($company_data['firstname'] == '') {
			$this->load->view('cabinet/update_user', $data);
		} elseif (isset($user_order['status'])) {
			$this->load->view('cabinet/step', $data);
		}
		$this->load->view('cabinet/footer', $data);


	}
	public function update_user()
	{
		$id = $_SESSION['ses_company_data']['user_id'];
		$firstname = $this->input->post('firstName');
		$lastname = $this->input->post('lastName');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$user_data = [
			'firstname' => $firstname,
			'lastname' => $lastname,
			'phone' => $phone,
			'address' => $address,
			'city' => $city,
			'state' => $state,
			'zip' => $zip,

		];
		$this->CModel->update_profile($user_data, $id);
		redirect('/cabinet', 'location', 301);
	}
    public function update_step(){
        $step = $this->input->post('step');
        $order_id = $this->input->post('order_id');

        $result = $this->CModel->update_steps($step,$order_id);

        if ($result) {

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => 'success',
                    'text_message' => 'Go to the next step!',
                ]));

            return true;
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'status' => 'fail',
                'text_message' => 'Error',
            ]));
    }
	public function happy_update()
	{
		$id = $this->input->post('order_id');
		$happy = $this->input->post('happy');

		switch ($happy){
			case 0:
				$user_data = $this->CModel->get_info_user($_SESSION['ses_company_data']['user_id']);
				$order_data =$this->CModel->get_order($id);
				$api_data = [
					'host' => mb_strtolower($_SERVER['HTTP_HOST']),
					'refer' => 'revicarelbl.com',
					'num' => $order_data['order_id'],
					'status' => 'new',
					'users' => 'new',
					'sendings' => 'not-need',
					'sku' => $order_data['sku'],
					'off-status' => 'on',
					'stars' => 'not-need',
					'gift-card' => 'new-revi',
					'email' => $user_data['email'],
					'scheme' => 'gift',
				];
				$api = $this->CModel->api('put-purple-shipped-data', $api_data);
                $api_return = json_decode($api, true);
                if ($api_return['status'] == 'success'){
                    $update_data = [
                        'happy' => $happy,
                        'step' => 1,
                        'status' => 1
                    ];

                    $result = $this->CModel->update_step($update_data, $id);
                    if ($result) {

                        $this->output
                            ->set_content_type('application/json')
                            ->set_output(json_encode([
                                'status' => 'success',
                                'text_message' => 'Go to the next step!',
                            ]));

                        return true;
                    }else{
                        $this->output
                            ->set_content_type('application/json')
                            ->set_output(json_encode([
                                'status' => 'fail',
                                'text_message' => 'So sorry! An error occurred! We are doing our best to fix the problem! Please write us to chat bot below and we`ll help you!',
                            ]));
                    }
                }else{
                    $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode([
                            'status' => 'fail',
                            'text_message' => 'So sorry! An error occurred! We are doing our best to fix the problem! Please write us to chat bot below and we`ll help you!',
                        ]));
                }

				break;
			case 1:
                $update_data = [
                    'happy' => $happy,
                    'step' => 1,
                ];
				$this->CModel->update_step($update_data, $id);
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode([
						'status' => 'success',
						'text_message' => 'Go to the next step!',
					]));

				return true;
				break;
		}
	}
	public function star_update()
	{
		$id = $this->input->post('order_id');
		$star = $this->input->post('star');

		$update_data = [
			'star' => $star,
			'step' => 2,
		];
		switch ($star){
			case 1:
			case 2:
			case 3:
			case 4:
            $update_data += [
                'status' => 1
            ];
			$result = $this->CModel->update_review($id, $update_data);
				$user_data = $this->CModel->get_info_user($_SESSION['ses_company_data']['user_id']);
				$order_data =$this->CModel->get_order($id);
				$api_data = [
					'host' => mb_strtolower($_SERVER['HTTP_HOST']),
					'refer' => $user_data['ref_url'],
					'num' => $order_data['order_id'],
					'status' => 'new',
					'users' => 'new',
					'sendings' => in_array(intval($order_data['star']), [4, 5]) ? 'new':'not-need',
					'sku' => $order_data['sku'],
					'off-status' => 'off',
					'stars' => $order_data['star'],
					'email' => $user_data['email'],
					'ship-address-1' => $user_data['address'],
					'ship-city' => $user_data['city'],
					'ship-postal-code' => $user_data['zip'],
					'ship-state' => $user_data['state'],
					'screen' => $order_data['screen'],
					'scheme' => 'get1free',

				];
                $api =  $this->CModel->api('put-purple-shipped-data', $api_data);
                $api_return = json_decode($api, true);
                if ($api_return['status'] == 'success'){
                    $this->CModel->send_email_star($_SESSION['ses_company_data']['user_id'], $order_data['star']);
                }


			if ($result) {
				redirect('/cabinet', 'refresh');

				return true;
			}
			redirect('/cabinet', 'refresh');
				break;

			case 5:
				$this->CModel->update_step($update_data, $id);
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode([
						'status' => 'success',
						'text_message' => 'Successful registration! Now you will be redirected to your personal account!',
					]));

				return true;
				break;
		}

	}
	public function update_image(){
		if (!empty($_FILES)) {

			//если файл прикреплен, подготавливаем конфиг и грузим файл
			$config['upload_path'] = './assets/image/';//куда грузим
			$config['allowed_types'] = 'gif|jpg|jpeg|png';//допустимые форматы
			$config['max_size'] = 12048;//указываем в KB
			$config['file_ext_tolower'] = true;//расширение файла в нижнем регистре
			$config['remove_spaces'] = true;//меняем пробелы в имени на нижнее подчеркивание
			$config['encrypt_name'] = true;//хешируем имя файлы, чтоб не переписать чужой логотип

			$this->load->library('upload', $config);
			$order_id = $this->input->post('order_id');
			$data = [
				'id' => $order_id,
				'step' => 3,
			];
			//Если успешно загружен файл, пишем данные в БД
			if ($this->upload->do_upload("review")) {

				$data += [
					'screen' => $this->upload->data('file_name'),
					'status' => 1,
				];

				$result = $this->CModel->update_review($order_id, $data);
				$user_data = $this->CModel->get_info_user($_SESSION['ses_company_data']['user_id']);
				$order_data =$this->CModel->get_order($order_id);
				$api_data = [
					'host' => mb_strtolower($_SERVER['HTTP_HOST']),
					'refer' => $user_data['ref_url'],
					'num' => $order_data['order_id'],
					'status' => 'new',
					'users' => 'new',
					'sendings' => in_array(intval($order_data['star']), [4, 5]) ? 'new':'not-need',
					'sku' => $order_data['sku'],
					'off-status' => 'off',
					'stars' => $order_data['star'],
					'email' => $user_data['email'],
					'ship-address-1' => $user_data['address'],
					'ship-city' => $user_data['city'],
					'ship-postal-code' => $user_data['zip'],
					'ship-state' => $user_data['state'],
					'screen' => $order_data['screen'],
					'scheme' => 'get1free',

				];
				$this->CModel->api('put-purple-shipped-data', $api_data);
				$this->CModel->send_email_star($_SESSION['ses_company_data']['user_id'], $order_data['star']);
				if ($result) {
					redirect('/cabinet', 'refresh');

					return;
				}
				redirect('/cabinet', 'refresh');

			}

		}

	}


	public function verifyEmailID($key)
	{

		$data = array('status' => 2);
		$this->db->where('hash', $key);
		$this->db->update('user', $data);
		redirect(base_url(), 'location', 301);

	}
	public function sand_email()
	{
		$this->load->library("email");
		$subject = 'Verify Your Email Address';
		$message = $this->load->view('email/star_1_template.php', '' , TRUE);
		$configEmail = $this->CModel->get_email_config();

		//Load config
		$this->email->initialize($configEmail);
		$this->email->from($configEmail['smtp_user']);
		$this->email->to('progrdude@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
	public function logout()
	{
		if (isset($_COOKIE[session_name()]))//проверяем - есть ли кука относящаяся к этой сессии в браузере
		{
			setcookie(session_name(), '', time() - 42000, '/'); //удаляем куку с именем сессии
		}
		// рвем сессию
		$this->session->sess_destroy();

		redirect(base_url(), 'location', 301);//делаем редирект
	}

}
