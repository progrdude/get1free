<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array('url'));
        $this->load->library('user_agent');
        $this->load->model('admin/Company_model', 'CModel');
    }
    public function index()
    {
        echo '123';

    }

}
