<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function get()
	{
		return $this->db->get_where('user_role', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('user_role');
	}
	public function edit($id)
	{
		$this->db->where('id', $id);
		return $this->db->update('user_role', $data);
	}

	public function hapusijsd($data, $email)
	{
		$this->db->where('email', $email);
		return $this->db->update('data_pokok', $data);
	}
}
