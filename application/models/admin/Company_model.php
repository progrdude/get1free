<?php

if (! defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Company_model extends CI_Model
{
	public function get_all_site()
	{
		$result = $this->db->select('*')
			->from('site')
			->get();

		return $result->result_array();
	}
	public function all_site_product($id)
	{
		$result = $this->db->select('*')
			->from('products')
			->where('brand_id', $id)
			->get();

		return $result->result_array();
	}
	public function get_all_user()
	{
		$result = $this->db->select('*')
			->from('user')
			->get();

		return $result->result_array();
	}
    public function get_all_order()
    {
        $result = $this->db->select('*')
            ->from('order_list o')
            ->join('user u', 'u.id = o.user_id', 'right')
            ->get();

        return $result->result_array();
    }
	public function get_info_site($id)
	{
		$this->db->select('*');
		$this->db->from('site');
		$this->db->where('id', $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{//если нам вернулось како-то значение, то возвращаем строку значений
			return $query->row_array();
		}

		return false;
	}
	public function get_info_product($id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id', $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{//если нам вернулось како-то значение, то возвращаем строку значений
			return $query->row_array();
		}

		return false;
	}
	public function update_site($id, $data){
		$this->db->set($data);
		$this->db->where('id', $id);
		return $this->db->update('site');
	}
	public function update_site_img($id, $data){
		$this->db->where('id', $id);
		$query = $this->db->update('site', $data);

		if ($query) {
			return true;
		}

		return false;

	}
	public function add_site_product($data){
		$query = $this->db->insert('products', $data);

		if ($query) {
			return true;
		}

		return false;

	}
    public function update_product($id, $data){
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('products');
    }
    public function update_product_img($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('products', $data);

        if ($query) {
            return true;
        }

        return false;

    }
    public function get_total_user($from = null, $to = null, $site = null){
        $this->db->select('*');
        if ($from != null && $to != null) {
            $this->db->where('reg_date >=', $from);
            $this->db->where('reg_date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->from('user');
        return $this->db->count_all_results();
    }

    public function get_total_view($from = null, $to = null, $site = null){
        $this->db->select('*');
        if ($from != null && $to != null) {
            $this->db->where('date >=', $from);
            $this->db->where('date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->from('view');
        return $this->db->count_all_results();
    }

    public function get_total_order($from = null, $to = null, $site = null){
        $this->db->select('*');
        if ($from != null && $to != null) {
            $this->db->where('update_date >=', $from);
            $this->db->where('update_date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->from('order_list');
        return $this->db->count_all_results();
    }
    public function get_total_final($from = null, $to = null, $site = null){
        $this->db->select('*');
        if ($from != null && $to != null) {
            $this->db->where('update_date >=', $from);
            $this->db->where('update_date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->where('status', 1);
        $this->db->from('order_list');
        return $this->db->count_all_results();
    }
    public function get_total_final_happy($from = null, $to = null, $site = null){
        $this->db->select('*');
        if ($from != null && $to != null) {
            $this->db->where('update_date >=', $from);
            $this->db->where('update_date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->where('status', 1);
        $this->db->where('happy', 1);
        $this->db->from('order_list');
        return $this->db->count_all_results();
    }
    public function get_total_final_not_happy($from = null, $to = null, $site = null){
        $this->db->select('*');
        if ($from != null && $to != null) {
            $this->db->where('update_date >=', $from);
            $this->db->where('update_date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->where('status', 1);
        $this->db->where('happy', 0);
        $this->db->from('order_list');
        return $this->db->count_all_results();
    }
    public function get_total_con_chart($from = null, $to = null, $site = null)
    {
        $this->db->select('step, count(step) as count');
        $this->db->from('order_list');
        if ($from != null && $to != null) {
            $this->db->where('update_date >=', $from);
            $this->db->where('update_date <', $to);
        }
        if ($site != null) {
            $this->db->where('site', $site);
        }
        $this->db->group_by('step');
        $query = $this->db->get();
        return $query->result_array();

    }
    public function get_total_con_chart_month($site = null){
        $from = (new DateTime('first day of january',
            new DateTimeZone('Europe/Moscow')))->format('Y-m-d');
        $to = (new DateTime('last day of December',
            new DateTimeZone('Europe/Moscow')))->add(new DateInterval('P1D'))->format('Y-m-d');

        $query = $this->db->select(' month(update_date) AS Month, count(status) as result')
            ->from('order_list')
            ->where('update_date >=', $from)
            ->where('update_date <', $to)
            ->where('status', 1)
            ->group_by('month(update_date)')
            ->order_by('Month ASC')
            ->get();

        return $query->result_array();
    }
    public function get_total_con_view_month($site = null){
        $from = (new DateTime('first day of january',
            new DateTimeZone('Europe/Moscow')))->format('Y-m-d');
        $to = (new DateTime('last day of December',
            new DateTimeZone('Europe/Moscow')))->add(new DateInterval('P1D'))->format('Y-m-d');

        $query = $this->db->select(' month(date) AS Month, count(date) as result')
            ->from('view')
            ->where('date >=', $from)
            ->where('date <', $to)
            ->group_by('month(date)')
            ->order_by('Month ASC')
            ->get();

        return $query->result_array();
    }
}
