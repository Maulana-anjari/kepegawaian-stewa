<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Input_model extends CI_Model
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
					FROM `user_sub_menu` JOIN `user_menu`
					ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
		";
		return $this->db->query($query)->result_array();
	}
	public function get()
	{
		return $this->db->get_where('', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('', $data);
	}
	public function edit($id)
	{
		$this->db->where('id', $id);
		return $this->db->update('', $data);
	}
}
