<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Daftar_guru_model extends CI_Model
{
	public function getAllGuru()
	{
		return $this->db->get('user')->result_array();
	}
	public function getGuru($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('name', $keyword);
			$this->db->or_like('email', $keyword);
		}
		return $this->db->get('user', $limit, $start)->result_array();
	}
	public function countAllGuru()
	{
		return $this->db->get('user')->num_rows();
	}
	public function deleteuser($email)
	{
		$this->db->where('email', $email);
		$this->db->delete('user');
		$this->db->where('email', $email);
		$this->db->delete('data_pokok');
		$this->db->where('email', $email);
		$this->db->delete('data_tambahan');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2018');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2019');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2020');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2021');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2022');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2023');
		$this->db->where('email', $email);
		$this->db->delete('data_tahunan_2024');
		$this->db->where('email', $email);
		return $this->db->delete('data_tahunan_2025');
	}
}
