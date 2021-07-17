<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function menu_management()
	{
		$data['judul'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/menu_management', $data);
			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added</div>');
			redirect('menu');
		}
	}
	public function submenu()
	{
		$data['judul'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('Menu_model', 'menu');
		$data['subMenu'] = $this->menu->getSubMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added</div>');
			redirect('menu/submenu');
		}
	}
	public function delete_submenu($id)
	{
		$this->load->model('Menu_model');
		$delete = $this->Menu_model->delete($id);
		if ($delete) {
			redirect(base_url('menu/submenu'));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu deleted</div>');
			redirect('menu/submenu');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Can not delete submenu</div>');
			redirect('menu/submenu');
		}
	}
	public function edit_submenu($id)
	{
		$this->load->model('Menu_model');
		$data['user_sub_menu'] = $this->Menu_model->get_where($id)->rpw();
	}
	public function role()
	{
		$data['judul'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/role', $data);
			$this->load->view('templates/footer');
		} else {
			$data = ['role' => $this->input->post('role')];
			$this->db->insert('user_role', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role added</div>');
			redirect('menu/role');
		}
	}
	public function delete_role($id)
	{
		$this->load->model('Admin_model');
		$delete = $this->Admin_model->delete($id);
		if ($delete) {
			redirect(base_url('menu/role'));
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role deleted</div>');
			redirect('menu/role');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Can not delete role</div>');
			redirect('menu/role');
		}
	}
	public function roleaccess($role_id)
	{
		$data['judul'] = 'Role Access';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/role-access', $data);
		$this->load->view('templates/footer');
	}
	public function ChangeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');
		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];
		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed</div>');
	}
}
