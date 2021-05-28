<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Reg_and_log extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Company_model', 'CModel');

		if (empty($_POST)) {
			redirect(base_url() . 'publics/page_not_found', 'location', 301);
		}

	}

	public function scheme_one(){
		$this->config->load('error');
		$error = $this->config->item('error_message');
		$this->load->library('myencrypt');
		$this->load->helper('string');
		$this->load->library('email');

		$order = $this->input->post('order');
		$email = $this->input->post('email');
		$find_order = $this->CModel->check_order($order);
		$find_order = json_decode($find_order);
		if (isset($find_order->answer)) {
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode([
					'status' => 'fail',
					'text_message' => $error[$find_order->answer],
				]));

		}else{
			$find_email = $this->CModel->check_user($email);
			if ($find_email) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode([
						'status' => 'fail',
						'text_message' => 'Your email is already registered',
					]));

				return true;
			}else{
				$user_password = random_string('alnum', 6);
				$user_data = [
					'firstname' => '',
					'lastname' => '',
					'email' => $email,
					'status' => 1,
					'address' => '',
					'city' => '',
					'state' => '',
					'zip' => '',
					'site' => $_SERVER['HTTP_HOST'],
					'ref_url' => isset($_COOKIE['from']) ? $_COOKIE['from'] : 'Get1Free',
					'ip' => $_SERVER['REMOTE_ADDR'],
					'phone' => '',
					'hash' => md5($email) ,
					'password' => $this->myencrypt->password_encrypt($user_password),
				];
				$result = $this->CModel->add_new_user($user_data);
				$order_data = [
					'order_id' => $order,
					'user_id' => $result,
					'sku' => $find_order->sku,
					'asin' => $find_order->asin,
					'site' => $_SERVER['HTTP_HOST'],
					'status' => 2
				];
				
				$this->CModel->add_new_order($order_data);
				if ($result) {
						$this->session->set_userdata(
							'ses_company_data', [
								'user_id' => $result,
								'email' => $user_data['email'],
								'site' => $user_data['site'],
							]
						);


						$this->output
							->set_content_type('application/json')
							->set_output(json_encode([
								'status' => 'success',
								'text_message' => 'Successful registration! Now you will be redirected to your personal account!',
							]));


						return true;


				}
			}
		}
	}
    public function new_scheme_reg(){
        $this->config->load('error');
        $error = $this->config->item('error_message');
        $this->load->helper('string');
        $this->load->library('email');

        $order = $this->input->post('order');
        $email = $this->input->post('email');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $star = $this->input->post('star');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $zip = $this->input->post('zip');



        $find_order = $this->CModel->check_order($order);
        $find_order = json_decode($find_order);
        if (isset($find_order->answer)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => 'fail',
                    'text_message' => $error[$find_order->answer],
                ]));

        }else {

                $user_data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'status' => 2,
                    'address' => $address,
                    'city' => $city,
                    'state' => $state,
                    'zip' => $zip,
                    'site' => $_SERVER['HTTP_HOST'],
                    'ref_url' => isset($_COOKIE['from']) ? $_COOKIE['from'] : 'Get1Free',
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'phone' => '',
                    'hash' => md5($email),
                    'password' => '123',
                ];
                $result = $this->CModel->add_new_user($user_data);
                $order_data = [
                    'order_id' => $order,
                    'user_id' => $result,
                    'sku' => $find_order->sku,
                    'asin' => $find_order->asin,
                    'site' => $_SERVER['HTTP_HOST'],
                    'star' => $star,
                    'status' => 1
                ];
                $api_data = [
                    'host' => 'revicare-beauty.com',
                    'refer' => 'Get1free',
                    'num' => $order,
                    'status' => 'new',
                    'users' => 'new',
                    'sendings' => in_array(intval($star), [4, 5]) ? 'new':'not-need',
                    'sku' => $order_data['sku'],
                    'off-status' => 'off',
                    'stars' => $star,
                    'email' => $user_data['email'],
                    'ship-address-1' => $user_data['address'],
                    'ship-city' => $user_data['city'],
                    'ship-postal-code' => $user_data['zip'],
                    'ship-state' => $user_data['state'],
                    'screen' => '',
                    'scheme' => 'get1free',

                ];
                $api = $this->CModel->api('put-purple-shipped-data', $api_data);
                $api_return = json_decode($api, true);
                $this->CModel->add_new_order($order_data);
                if ($api_return['status'] == 'success') {
                    $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode([
                            'status' => 'success'
                        ]));
                    return true;
                }
            }
    }
    public function login()
    {


        $login_data = [
            'company_login_email' => $this->input->post('email'),
            'company_login_password' => $this->input->post('password'),
        ];

        $company_data = $this->CModel->find_company_by_email($login_data['company_login_email']);

        if ($company_data === false) {
            //если не нашли номер телефона в БД
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => 'fail',
                    'text_message' => 'Email or password does not match!',

                ]));
        } else {
            //если номер найден, грузим библиотеку для пароля и сверяем пароль
            //Подгружаем нашу библиотеку шифрования
            $this->load->library('myencrypt');

            $check_pasw = $this->myencrypt->password_check(
                $login_data['company_login_password'],
                $company_data['password']
            );

            if ($check_pasw) {
                //если хэши совпадают, тогда логиним юзера

                $this->session->set_userdata(
                    'ses_company_data', [
                        'user_id' => $company_data['id'],
                        'email' => $company_data['email'],
                        'site' => $company_data['site'],
                    ]
                );

                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'success',
                        'text_message' => 'Successful authorization! Now you will be redirected to your personal account!',
                    ]));

            } else {
                //иначе выдаем ошибку, что что-то не то
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'fail',
                        'text_message' => 'Email or password does not match!',

                    ]));
            }
        }
    }


}
