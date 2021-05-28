<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{


	public function __construct()
	{

		parent::__construct();
		if (!isset($_SESSION['ses_admin_data'])) {
			redirect(base_url(), 'location', 301);
		}
		$this->load->helper(array('url'));
		$this->load->library('user_agent');
		$this->load->model('admin/Company_model', 'CModel');

		

	}
	public function index()
	{
		$data = [
			'title' => 'Get1free',
            'get_all_site' => $this->CModel->get_all_site(),

		];
		$this->load->view('admin/header', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer', $data);

	}
	public function update_site()
	{
		$site_id = $this->input->post('site_id');
		$data = array();
		if(!empty($this->input->post('anal'))){
			$data += [
				'anal' => $this->input->post('anal'),
			];
		}
		if(!empty($this->input->post('tag_head'))){
			$data += [
				'tag_head' => $this->input->post('tag_head'),
			];
		}
		if(!empty($this->input->post('tag_body'))){
			$data += [
				'tag_body' => $this->input->post('tag_body'),
			];
		}
		if(!empty($this->input->post('color'))){
			$data += [
				'color' => $this->input->post('color'),
			];
		}
        if(!empty($this->input->post('color_second'))){
            $data += [
                'color_second' => $this->input->post('color_second'),
            ];
        }
		if(!empty($this->input->post('text_two'))){
			$data += [
				'text_two' => $this->input->post('text_two'),
			];
		}
		if(!empty($this->input->post('text_three'))){
			$data += [
				'text_three' => $this->input->post('text_three'),
			];
		}
		if(!empty($this->input->post('review_id'))){
			$data += [
				'review_id' => $this->input->post('review_id'),
			];
		}
		$res = $this->CModel->update_site($site_id, $data);
		if ($res) {
			redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
			return;
		}
		redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
	}


	public function update_site_img()
	{

		if (!empty($_FILES)) {

			//если файл прикреплен, подготавливаем конфиг и грузим файл
			$config['upload_path'] = './assets/image/';//куда грузим
			$config['allowed_types'] = 'gif|jpg|jpeg|png';//допустимые форматы
			$config['max_size'] = 12048;//указываем в KB
			$config['file_ext_tolower'] = true;//расширение файла в нижнем регистре
			$config['remove_spaces'] = true;//меняем пробелы в имени на нижнее подчеркивание
			$config['encrypt_name'] = true;//хешируем имя файлы, чтоб не переписать чужой логотип

			$this->load->library('upload', $config);
			$site_id = $this->input->post('site_id');

			//Если успешно загружен файл, пишем данные в БД
			if ($this->upload->do_upload("background")) {




				$data = [
					'background' => $this->upload->data('file_name'),
				];

				$result = $this->CModel->update_site_img($site_id, $data);

				if ($result) {
					redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
					return;
				}
				redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
			}
			if ($this->upload->do_upload("img_three")) {
				$data = [
					'img_three' => $this->upload->data('file_name'),
				];

				$result = $this->CModel->update_site_img($site_id, $data);

				if ($result) {
					redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
					return;
				}
				redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
			}
			if ($this->upload->do_upload("image")) {
				$data = [
					'image' => $this->upload->data('file_name'),
				];

				$result = $this->CModel->update_site_img($site_id, $data);

				if ($result) {
					redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
					return;
				}
				redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
			}
			if ($this->upload->do_upload("logo")) {
				$data = [
					'logo' => $this->upload->data('file_name'),
				];

				$result = $this->CModel->update_site_img($site_id, $data);

				if ($result) {
					redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
					return;
				}
				redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
			}
		}
	}

	public function add_site_product()
	{

		if (!empty($_FILES)) {

			//если файл прикреплен, подготавливаем конфиг и грузим файл
			$config['upload_path'] = './assets/image/';//куда грузим
			$config['allowed_types'] = 'gif|jpg|jpeg|png';//допустимые форматы
			$config['max_size'] = 12048;//указываем в KB
			$config['file_ext_tolower'] = true;//расширение файла в нижнем регистре
			$config['remove_spaces'] = true;//меняем пробелы в имени на нижнее подчеркивание
			$config['encrypt_name'] = true;//хешируем имя файлы, чтоб не переписать чужой логотип

			$this->load->library('upload', $config);
			$site_id = $this->input->post('site_id');
			$data = [
				'amazon_url' => $this->input->post('amazon_url'),
				'brand_id' => $site_id,
				'about' => $this->input->post('about'),
				'manual' => $this->input->post('manual'),
				'name' => $this->input->post('name'),
			];
			//Если успешно загружен файл, пишем данные в БД
			if ($this->upload->do_upload("image_product")) {

				$data += [
					'image' => $this->upload->data('file_name'),
				];

				$result = $this->CModel->add_site_product($data);

				if ($result) {
					redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
					return;
				}
				redirect(base_url() . 'site/site_detail?site_id=' . $site_id, 'refresh');
			}

		}
	}

}
