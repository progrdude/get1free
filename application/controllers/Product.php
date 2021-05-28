<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
        if (! isset($_GET['product_id']) || $_GET['product_id'] == '') {
            redirect(base_url() . 'admin/cabinet', 'location', 301);
        }

        $product_id = (int) $_GET['product_id'];
        $product_detail = $this->CModel->get_info_product($product_id);
        //если чел пытается что-то нам сунуть непонятное, обрываем все и перекидываем на главную стр.кабинета
        if (!$product_id) {
            redirect(base_url('admin/cabinet'), 'location', 301);
        }

        $data = [
            'title' => $product_detail['name'],
            'product_detail' => $product_detail,
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product_detail', $data);
        $this->load->view('admin/footer', $data);

    }
    public function update_product()
    {
        $product_id = $this->input->post('product_id');
        $data = array(
            'amazon_url' => $this->input->post('amazon_url'),
            'name' => $this->input->post('name'),
            'about' => $this->input->post('about'),
            'manual' => $this->input->post('manual'),

        );

        $res = $this->CModel->update_product($product_id, $data);
        if ($res) {
            redirect(base_url() . 'product?product_id=' . $product_id, 'refresh');
            return;
        }
        redirect(base_url() . 'product?product_id=' . $product_id, 'refresh');
    }


    public function update_product_img()
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
            $product_id = $this->input->post('product_id');

            if ($this->upload->do_upload("image")) {
                $data = [
                    'image' => $this->upload->data('file_name'),
                ];

                $result = $this->CModel->update_product_img($product_id, $data);

                if ($result) {
                    redirect(base_url() . 'product?product_id=' . $product_id, 'refresh');
                    return;
                }
                redirect(base_url() . 'product?product_id=' . $product_id, 'refresh');
            }

        }
    }


}
