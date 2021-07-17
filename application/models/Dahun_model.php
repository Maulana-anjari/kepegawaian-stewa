<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dahun_model extends CI_Model
{
	public function getNamaData()
	{
		

	}
	public function get()			
	{
		return $this->db->get_where('user_dahun', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('user_dahun');
	}
	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('user_dahun', $data);
	}
}