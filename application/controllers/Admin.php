<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
	public function detailguru($email)
	{
		$data['judul'] = 'Detail Guru';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['users'] = $this->db->get_where('user', ['email' => $email])->row_array();
		$data['dapok'] = $this->db->get_where('data_pokok', ['email' => $email])->row_array();
		$data['dahun1'] = $this->db->get_where('data_tahunan_2018', ['email' => $email])->row_array();
		$data['dahun2'] = $this->db->get_where('data_tahunan_2019', ['email' => $email])->row_array();
		$data['dahun3'] = $this->db->get_where('data_tahunan_2020', ['email' => $email])->row_array();
		$data['dahun4'] = $this->db->get_where('data_tahunan_2021', ['email' => $email])->row_array();
		$data['datam'] = $this->db->get_where('data_tambahan', ['email' => $email])->row_array();
		$data['sertifikat'] = $this->db->get_where('sertifikat', ['email' => $email])->result_array();
		$data['sktambahan'] = $this->db->get_where('sk_tambahan', ['email' => $email])->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detailguru', $data);
		$this->load->view('templates/footer');
	}

	public function dataguru()
	{
		$data['judul'] = 'Data Guru';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Daftar_guru_model', 'guru');
		//PAGINATION//
		//LOAD
		$this->load->library('pagination');
		//Ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}
		//CONFIG
		$this->db->like('name', $data['keyword']);
		$this->db->or_like('email', $data['keyword']);
		$this->db->from('user');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;
		//INITIALIZE
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['dataguru'] = $this->guru->getGuru($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/dataguru', $data);
		$this->load->view('templates/footer');
	}
	public function delete_user($email)
	{
		$this->load->model('Daftar_guru_model');
		$delete = $this->Daftar_guru_model->deleteuser($email);
		if ($delete) {
			redirect(base_url('admin/dataguru'));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User deleted</div>');
			redirect('admin/dataguru');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Can not delete user</div>');
			redirect('admin/dataguru');
		}
	}
}
