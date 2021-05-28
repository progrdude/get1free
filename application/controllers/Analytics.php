<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Analytics extends CI_Controller
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

        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer', $data);

    }
    public function order()
    {
        $data = [
            'title' => 'Get1free',

        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/analytics_order', $data);
        $this->load->view('admin/footer', $data);

    }
    public function get_info_total_date()
    {
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        $site = $this->input->post('site');

        $totalView = $this->CModel->get_total_view($date_from, $date_to, $site);
        $totalUser = $this->CModel->get_total_user($date_from, $date_to, $site);
        $total_final = $this->CModel->get_total_final($date_from, $date_to, $site);
        $total_final_happy = $this->CModel->get_total_final_happy($date_from, $date_to, $site);
        $total_final_not_happy = $this->CModel->get_total_final_not_happy($date_from, $date_to, $site);
        $get_total_con_chart = $this->CModel->get_total_con_chart($date_from, $date_to, $site);
        $data = [
            'totalView' => $totalView,
            'totalUser' => $totalUser,
            'totalFinal' => $total_final,
            'totalFinalHappy' => $total_final_happy,
            'totalFinalNotHappy' => $total_final_not_happy,
            'get_total_con_chart' => $get_total_con_chart,
        ];
        print_r(json_encode($data));

    }
    public function get_site_con_month()
    {

        $site = $this->input->post('site');


        $get_total_con_chart_month = $this->CModel->get_total_con_chart_month($site);
        $totalView = $this->CModel->get_total_con_view_month($site);

        $data = [
            'get_total_con_chart_month' => $get_total_con_chart_month,
            'totalView' => $totalView
        ];
        $new_data = [];
        foreach ($get_total_con_chart_month as $con){
            foreach ($totalView as $view){
                array_push($new_data, number_format((float)($con['result']/$view['result']) * 100, 2, '.', ''));
            }
        }
        print_r(json_encode($new_data));

    }



}
