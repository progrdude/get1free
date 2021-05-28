<?php

if (! defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Company_model extends CI_Model
{
	public function get_info_site()
	{
		$this->db->select('*');
		$this->db->from('site');
		$this->db->where('url', $_SERVER['SERVER_NAME']);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		}

		return false;
	}

	public function check_order($order){
        $config['goods'] = [];
		if($cnt = @file_get_contents('./application/json/hosts.json')) {
			$json = json_decode($cnt, true);
			foreach ($json as $key => $arr) {
				if('revicare-beauty.com' == $arr['host']) {
					$config = $arr;
					break;
				}
			}
		}

		$json = ['order' => $order, 'goods' => $config['goods']];
		return $order_info = $this->api(API_ACTION, $json);

	}
	public function check_user($email){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('site', $_SERVER['SERVER_NAME']);
		$this->db->where('email', $email);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		}

		return false;
	}
	public function add_new_user($data)
	{
		$this->db->set('reg_date', 'NOW()', false);
		$result = $this->db->insert('user', $data);

		if ($result) {
			return $this->db->insert_id();
		}

		return false;

	}
	public function add_new_order($data)
	{

		$this->db->set('update_date', 'NOW()', false);
		$result = $this->db->insert('order_list', $data);

		if ($result) {
			return $this->db->insert_id();
		}

		return false;

	}
	public function sand_email_ver($data, $email )
	{
		$this->load->library("email");
		$subject = 'Verify Your Email Address';
		$email_data = [
			'hash' => $data['hash'],
			'url' => $data['url'],
			'password' => $data['password'],
			'brand' => $data['brand'],
		];
		$message = $this->load->view('email/verify_template.php', $email_data, TRUE);
		$configEmail = array(
			'protocol'  => 'smtp',
			'smtp_host' => $data['url'],
			'smtp_port' => 465, // Usually 465
			'smtp_crypto' => 'ssl', // or tls
			'smtp_user' => $data['email'],
			'smtp_pass' => $data['epass'],
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		);

		//Load config
		$this->email->initialize($configEmail);
		$this->email->from($data['email'], $data['brand']);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();

	}
	public function all_site_product($id)
	{
		$result = $this->db->select('*')
			->from('products')
			->where('brand_id', $id)
			->get();

		return $result->result_array();
	}
	public function add_view($ip, $site)
	{
		$data= array(
			'ip' => $ip,
			'site' => $site,
		);
		$this->db->set('date', 'NOW()', false);
		$this->db->insert('view', $data);

	}
	public function api($action, $data){
		$post = [];
		$post['key'] = API_KEY;
		$post['action'] = $action;
		$post['json'] = json_encode($data);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, API_URL);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$txt = curl_exec($ch);
		$err = [curl_error($ch), curl_errno($ch)];
		return $txt;
	}
    public function find_company_by_email($email)
    {

        $this->db->where('email', $email);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return false;
    }
}
