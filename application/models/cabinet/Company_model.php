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
	public function get_info_user($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		}

		return false;
	}
	public function update_profile($user_data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $user_data);

	}
	public function update_step($update_data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('order_list', $update_data);
	}
    public function update_steps($step, $id)
    {
        $this->db->set('step', $step);
        $this->db->where('id', $id);
        return $this->db->update('order_list');
    }
	public function update_review($id, $update_data)
	{
		$this->db->where('id', $id);
		$this->db->update('order_list', $update_data);

	}
	public function get_order($id)
	{
		$this->db->select('*');
		$this->db->from('order_list');
		$this->db->where('user_id', $id);
		$this->db->where('status', '0');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		}
		return false;
	}
	public function all_site_product($id)
	{
		$result = $this->db->select('*')
			->from('products')
			->where('brand_id', $id)
			->get();

		return $result->result_array();
	}
	public function get_email_config()
	{
		$data = $this->get_info_site();
		return $config = array(
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


	}
	public function send_email_star($user_id, $star)
	{
		$this->load->library("email");
		$configEmail = $this->get_email_config();
		$message = $this->load->view('email/star_' . $star . '_template.php', '', TRUE);
		$data = $this->get_info_site();
		$user_data = $this->get_info_user($user_id);
		$this->email->initialize($configEmail);
		$this->email->from($data['email'], $data['brand']);
		$this->email->to($user_data['email']);
		$this->email->subject($data['brand']);
		$this->email->message($message);
		$this->email->send();
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
}
