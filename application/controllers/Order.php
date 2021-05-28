<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
            'title' => 'User',
            'get_all_order' => $this->CModel->get_all_order(),
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/order', $data);
        $this->load->view('admin/footer', $data);

    }
    public function site_detail()
    {

        if (! isset($_GET['site_id']) || $_GET['site_id'] == '') {
            redirect(base_url() . 'admin/cabinet', 'location', 301);
        }

        $site_id = (int) $_GET['site_id'];
        $site_detail = $this->CModel->get_info_site($site_id);
        //если чел пытается что-то нам сунуть непонятное, обрываем все и перекидываем на главную стр.кабинета
        if (! $site_id) {
            redirect(base_url('admin/cabinet'), 'location', 301);
        }

        $data = [
            'title' => 'Сайт ' . $site_detail['brand'],
            'site_detail' => $site_detail,
            'all_site_product' => $this->CModel->all_site_product($site_id)
        ];

        $this->load->view('admin/header', $data);
        $this->load->view('admin/site_detail', $data);
        $this->load->view('admin/footer', $data);
    }

}
