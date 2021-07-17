<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['judul'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function edit()
	{
		$data['judul'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');


		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$nip = $this->input->post('nip');
			$nuptk = $this->input->post('nuptk');
			$nrg = $this->input->post('nrg');
			$tempatlahir = $this->input->post('tempatlahir');
			$tgllahir = $this->input->post('tgllahir');
			$alamat = $this->input->post('alamat');

			//cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size']		 = '2048';
				$config['upload_path']	 = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}


			$this->db->set('name', $name);
			$this->db->set('nip', $nip);
			$this->db->set('nuptk', $nuptk);
			$this->db->set('nrg', $nrg);
			$this->db->set('tempatlahir', $tempatlahir);
			$this->db->set('tgllahir', $tgllahir);
			$this->db->set('alamat', $alamat);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
			redirect('user/edit');
		}
	}
	public function datapokok()
	{
		$data['judul'] = 'Data Pokok';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dapok'] = $this->db->get_where('data_pokok', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/datapokok', $data);
		$this->load->view('templates/footer');
	}
	public function formijazah()
	{
		$data['judul'] = 'Data Ijazah';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dapok'] = $this->db->get_where('data_pokok', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formijazah', $data);
		$this->load->view('templates/footer');
	}
	public function inputijazah()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/upload/dataijazah/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['ij_sd']['name'])) {
				$this->upload->do_upload('ij_sd');
				$data1 = $this->upload->data();
				$ij_sd = $data1['file_name'];
			} else {
				$ij_sd = $this->input->post('id_sd');
			}
			//file ijazah sltp
			if (!empty($_FILES['ij_sltp']['name'])) {
				$this->upload->do_upload('ij_sltp');
				$data2 = $this->upload->data();
				$ij_sltp = $data2['file_name'];
			} else {
				$ij_sltp = $this->input->post('id_sltp');
			}
			//file ijazah slta
			if (!empty($_FILES['ij_slta']['name'])) {
				$this->upload->do_upload('ij_slta');
				$data3 = $this->upload->data();
				$ij_slta = $data3['file_name'];
			} else {
				$ij_slta = $this->input->post('id_slta');
			}
			//file ijazah s1
			if (!empty($_FILES['ij_s1']['name'])) {
				$this->upload->do_upload('ij_s1');
				$data4 = $this->upload->data();
				$ij_s1 = $data4['file_name'];
			} else {
				$ij_s1 = $this->input->post('id_s1');
			}
			//file ijazah s2
			if (!empty($_FILES['ij_s2']['name'])) {
				$this->upload->do_upload('ij_s2');
				$data5 = $this->upload->data();
				$ij_s2 = $data5['file_name'];
			} else {
				$ij_s2 = $this->input->post('id_s2');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('ij_sd', $ij_sd);
				$this->db->set('ij_sltp', $ij_sltp);
				$this->db->set('ij_slta', $ij_slta);
				$this->db->set('ij_s1', $ij_s1);
				$this->db->set('ij_s2', $ij_s2);
				$this->db->where('email', $email);
				$this->db->update('data_pokok');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formijazah');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formijazah');
		}
	}
	public function formkeluarga()
	{
		$data['judul'] = 'Data Keluarga';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dapok'] = $this->db->get_where('data_pokok', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formkeluarga', $data);
		$this->load->view('templates/footer');
	}
	public function inputkeluarga()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/upload/datakeluarga/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ktp pribadi
			if (!empty($_FILES['ktp_diri']['name'])) {
				$this->upload->do_upload('ktp_diri');
				$data1 = $this->upload->data();
				$ktp_diri = $data1['file_name'];
			} else {
				$ktp_diri = $this->input->post('id_ktp_diri');
			}
			//file ktp pasangan
			if (!empty($_FILES['ktp_pas']['name'])) {
				$this->upload->do_upload('ktp_pas');
				$data2 = $this->upload->data();
				$ktp_pas = $data2['file_name'];
			} else {
				$ktp_pas = $this->input->post('id_ktp_pas');
			}
			//file kk
			if (!empty($_FILES['kk']['name'])) {
				$this->upload->do_upload('kk');
				$data3 = $this->upload->data();
				$kk = $data3['file_name'];
			} else {
				$kk = $this->input->post('id_kk');
			}
			//file surat nikah
			if (!empty($_FILES['s_nikah']['name'])) {
				$this->upload->do_upload('s_nikah');
				$data4 = $this->upload->data();
				$s_nikah = $data4['file_name'];
			} else {
				$s_nikah = $this->input->post('id_s_nikah');
			}
			//file akta pribadi
			if (!empty($_FILES['akta_pribadi']['name'])) {
				$this->upload->do_upload('akta_pribadi');
				$data5 = $this->upload->data();
				$akta_pribadi = $data5['file_name'];
			} else {
				$akta_pribadi = $this->input->post('id_akta_pribadi');
			}
			//file akta pasangan
			if (!empty($_FILES['akta_pas']['name'])) {
				$this->upload->do_upload('akta_pas');
				$data6 = $this->upload->data();
				$akta_pas = $data6['file_name'];
			} else {
				$akta_pas = $this->input->post('id_akta_pas');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('ktp_diri', $ktp_diri);
				$this->db->set('ktp_pas', $ktp_pas);
				$this->db->set('kk', $kk);
				$this->db->set('s_nikah', $s_nikah);
				$this->db->set('akta_pribadi', $akta_pribadi);
				$this->db->set('akta_pas', $akta_pas);
				$this->db->where('email', $email);
				$this->db->update('data_pokok');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formkeluarga');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formkeluarga');
		}
	}
	public function formsk()
	{
		$data['judul'] = 'Data Surat Keputusan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dapok'] = $this->db->get_where('data_pokok', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formsk', $data);
		$this->load->view('templates/footer');
	}
	public function inputsk()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/upload/datask/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file cpns
			if (!empty($_FILES['cpns']['name'])) {
				$this->upload->do_upload('cpns');
				$data1 = $this->upload->data();
				$cpns = $data1['file_name'];
			} else {
				$cpns = $this->input->post('id_cpns');
			}
			//file pns
			if (!empty($_FILES['pns']['name'])) {
				$this->upload->do_upload('pns');
				$data2 = $this->upload->data();
				$pns = $data2['file_name'];
			} else {
				$pns = $this->input->post('id_pns');
			}
			//file naik pangkat
			if (!empty($_FILES['naik_pangkat']['name'])) {
				$this->upload->do_upload('naik_pangkat');
				$data3 = $this->upload->data();
				$naik_pangkat = $data3['file_name'];
			} else {
				$naik_pangkat = $this->input->post('id_naik_pangkat');
			}
			//file mutasi
			if (!empty($_FILES['mutasi']['name'])) {
				$this->upload->do_upload('mutasi');
				$data4 = $this->upload->data();
				$mutasi = $data4['file_name'];
			} else {
				$mutasi = $this->input->post('id_mutasi');
			}
			//file kenaikan gaji berkala
			if (!empty($_FILES['kgb']['name'])) {
				$this->upload->do_upload('kgb');
				$data5 = $this->upload->data();
				$kgb = $data5['file_name'];
			} else {
				$kgb = $this->input->post('id_kgb');
			}
			//file impasing
			if (!empty($_FILES['impasing']['name'])) {
				$this->upload->do_upload('impasing');
				$data6 = $this->upload->data();
				$impasing = $data6['file_name'];
			} else {
				$impasing = $this->input->post('id_impasing');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('cpns', $cpns);
				$this->db->set('pns', $pns);
				$this->db->set('naik_pangkat', $naik_pangkat);
				$this->db->set('mutasi', $mutasi);
				$this->db->set('kgb', $kgb);
				$this->db->set('impasing', $impasing);
				$this->db->where('email', $email);
				$this->db->update('data_pokok');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formsk');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formsk');
		}
	}
	public function formlain()
	{
		$data['judul'] = 'Data Data Lain';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dapok'] = $this->db->get_where('data_pokok', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formlain', $data);
		$this->load->view('templates/footer');
	}
	public function inputlainnya()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/upload/datalain/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file nip baru
			if (!empty($_FILES['nip_baru']['name'])) {
				$this->upload->do_upload('nip_baru');
				$data1 = $this->upload->data();
				$nip_baru = $data1['file_name'];
			} else {
				$nip_baru = $this->input->post('id_nip_baru');
			}
			//file taspen
			if (!empty($_FILES['taspen']['name'])) {
				$this->upload->do_upload('taspen');
				$data2 = $this->upload->data();
				$taspen = $data2['file_name'];
			} else {
				$taspen = $this->input->post('id_taspen');
			}
			//file npwp
			if (!empty($_FILES['npwp']['name'])) {
				$this->upload->do_upload('npwp');
				$data3 = $this->upload->data();
				$npwp = $data3['file_name'];
			} else {
				$npwp = $this->input->post('id_npwp');
			}
			//file karis/karsu
			if (!empty($_FILES['karisu']['name'])) {
				$this->upload->do_upload('karisu');
				$data4 = $this->upload->data();
				$karisu = $data4['file_name'];
			} else {
				$karisu = $this->input->post('id_karisu');
			}
			//file askes
			if (!empty($_FILES['askes']['name'])) {
				$this->upload->do_upload('askes');
				$data5 = $this->upload->data();
				$askes = $data5['file_name'];
			} else {
				$askes = $this->input->post('id_askes');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('nip_baru', $nip_baru);
				$this->db->set('taspen', $taspen);
				$this->db->set('npwp', $npwp);
				$this->db->set('karisu', $karisu);
				$this->db->set('askes', $askes);
				$this->db->where('email', $email);
				$this->db->update('data_pokok');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formlain');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formlain');
		}
	}
	public function changePassword()
	{
		$data['judul'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/changepassword', $data);
			$this->load->view('templates/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
				redirect('user/changepassword');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
					redirect('user/changepassword');
				} else {
					//password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed</div>');
					redirect('user/changepassword');
				}
			}
		}
	}
	//#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/#/
	public function datatahunan()
	{
		$data['judul'] = 'Data Tahunan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/datatahunan', $data);
		$this->load->view('templates/footer');
	}
	public function formtahun2018()
	{
		$data['judul'] = 'Data Tahunan Tahun 2018';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dahun'] = $this->db->get_where('data_tahunan_2018', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formtahun2018', $data);
		$this->load->view('templates/footer');
	}
	public function formtahun2019()
	{
		$data['judul'] = 'Data Tahunan Tahun 2019';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dahun'] = $this->db->get_where('data_tahunan_2019', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formtahun2019', $data);
		$this->load->view('templates/footer');
	}
	public function formtahun2020()
	{
		$data['judul'] = 'Data Tahunan Tahun 2020';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dahun'] = $this->db->get_where('data_tahunan_2020', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formtahun2020', $data);
		$this->load->view('templates/footer');
	}
	public function formtahun2021()
	{
		$data['judul'] = 'Data Tahunan Tahun 2021';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dahun'] = $this->db->get_where('data_tahunan_2021', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/formtahun2021', $data);
		$this->load->view('templates/footer');
	}
	public function inputtahun2018()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatahunan/2018';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['skp']['name'])) {
				$this->upload->do_upload('skp');
				$data1 = $this->upload->data();
				$skp = $data1['file_name'];
			} else {
				$skp = $this->input->post('id_skp');
			}
			//file ijazah sltp
			if (!empty($_FILES['pak']['name'])) {
				$this->upload->do_upload('pak');
				$data2 = $this->upload->data();
				$pak = $data2['file_name'];
			} else {
				$pak = $this->input->post('id_pak');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$nilai_skp = $this->input->post('nilai_skp');
				$nilai_pak = $this->input->post('nilai_pak');

				$this->db->set('email', $email);
				$this->db->set('skp', $skp);
				$this->db->set('nilai_skp', $nilai_skp);
				$this->db->set('pak', $pak);
				$this->db->set('nilai_pak', $nilai_pak);
				$this->db->where('email', $email);
				$this->db->update('data_tahunan_2018');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formtahun2018');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formtahun2018');
		}
	}
	public function inputtahun2019()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatahunan/2019';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['skp']['name'])) {
				$this->upload->do_upload('skp');
				$data1 = $this->upload->data();
				$skp = $data1['file_name'];
			} else {
				$skp = $this->input->post('id_skp');
			}
			//file ijazah sltp
			if (!empty($_FILES['pak']['name'])) {
				$this->upload->do_upload('pak');
				$data2 = $this->upload->data();
				$pak = $data2['file_name'];
			} else {
				$pak = $this->input->post('id_pak');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$nilai_skp = $this->input->post('nilai_skp');
				$nilai_pak = $this->input->post('nilai_pak');

				$this->db->set('email', $email);
				$this->db->set('skp', $skp);
				$this->db->set('nilai_skp', $nilai_skp);
				$this->db->set('pak', $pak);
				$this->db->set('nilai_pak', $nilai_pak);
				$this->db->where('email', $email);
				$this->db->update('data_tahunan_2019');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formtahun2019');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formtahun2019');
		}
	}
	public function inputtahun2020()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatahunan/2020';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['skp']['name'])) {
				$this->upload->do_upload('skp');
				$data1 = $this->upload->data();
				$skp = $data1['file_name'];
			} else {
				$skp = $this->input->post('id_skp');
			}
			//file ijazah sltp
			if (!empty($_FILES['pak']['name'])) {
				$this->upload->do_upload('pak');
				$data2 = $this->upload->data();
				$pak = $data2['file_name'];
			} else {
				$pak = $this->input->post('id_pak');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$nilai_skp = $this->input->post('nilai_skp');
				$nilai_pak = $this->input->post('nilai_pak');

				$this->db->set('email', $email);
				$this->db->set('skp', $skp);
				$this->db->set('nilai_skp', $nilai_skp);
				$this->db->set('pak', $pak);
				$this->db->set('nilai_pak', $nilai_pak);
				$this->db->where('email', $email);
				$this->db->update('data_tahunan_2020');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formtahun2020');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formtahun2020');
		}
	}
	public function inputtahun2021()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatahunan/2021';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['skp']['name'])) {
				$this->upload->do_upload('skp');
				$data1 = $this->upload->data();
				$skp = $data1['file_name'];
			} else {
				$skp = $this->input->post('id_skp');
			}
			//file ijazah sltp

			if (!empty($_FILES['pak']['name'])) {
				$this->upload->do_upload('pak');
				$data2 = $this->upload->data();
				$pak = $data2['file_name'];
			} else {
				$pak = $this->input->post('id_pak');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$nilai_skp = $this->input->post('nilai_skp');
				$nilai_pak = $this->input->post('nilai_pak');

				$this->db->set('email', $email);
				$this->db->set('skp', $skp);
				$this->db->set('nilai_skp', $nilai_skp);
				$this->db->set('pak', $pak);
				$this->db->set('nilai_pak', $nilai_pak);
				$this->db->where('email', $email);
				$this->db->update('data_tahunan_2021');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/formtahun2021');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/formtahun2021');
		}
	}

	#################################################DATA TAMBAHAN########################################################
	public function datatambahan()
	{
		$data['judul'] = 'Data Tambahan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['datam'] = $this->db->get_where('data_tambahan', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/datatambahan', $data);
		$this->load->view('templates/footer');
	}
	public function tambahsertifikat()
	{
		$data['judul'] = 'Data Sertifikat';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['datam'] = $this->db->get_where('data_tambahan', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/tambahsertifikat', $data);
		$this->load->view('templates/footer');
	}
	public function tambahsklainnya()
	{
		$data['judul'] = 'Data SK Tambahan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['datam'] = $this->db->get_where('data_tambahan', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/tambahsklainnya', $data);
		$this->load->view('templates/footer');
	}
	public function inputdatatambahan()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatambahan/data';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			if (!empty($_FILES['sk_tugas_mengajar']['name'])) {
				$this->upload->do_upload('sk_tugas_mengajar');
				$data1 = $this->upload->data();
				$sk_tugas_mengajar = $data1['file_name'];
			} else {
				$sk_tugas_mengajar = $this->input->post('id_sk_tugas_mengajar');
			}

			if (!empty($_FILES['sk_tugas_tambahan']['name'])) {
				$this->upload->do_upload('sk_tugas_tambahan');
				$data2 = $this->upload->data();
				$sk_tugas_tambahan = $data2['file_name'];
			} else {
				$sk_tugas_tambahan = $this->input->post('id_sk_tugas_tambahan');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('sk_tugas_mengajar', $sk_tugas_mengajar);
				$this->db->set('sk_tugas_tambahan', $sk_tugas_tambahan);
				$this->db->where('email', $email);
				$this->db->update('data_tambahan');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/datatambahan');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/datatambahan');
		}
	}
	public function inputsertifikat()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatambahan/sertifikat';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['sertifikat1']['name'])) {
				$this->upload->do_upload('sertifikat1');
				$data1 = $this->upload->data();
				$sertifikat1 = $data1['file_name'];
			} else {
				$sertifikat1 = $this->input->post('id_sertifikat1');
			}
			//file ijazah sltp
			if (!empty($_FILES['sertifikat2']['name'])) {
				$this->upload->do_upload('sertifikat2');
				$data2 = $this->upload->data();
				$sertifikat2 = $data2['file_name'];
			} else {
				$sertifikat2 = $this->input->post('id_sertifikat2');
			}
			//file ijazah slta
			if (!empty($_FILES['sertifikat3']['name'])) {
				$this->upload->do_upload('sertifikat3');
				$data3 = $this->upload->data();
				$sertifikat3 = $data3['file_name'];
			} else {
				$sertifikat3 = $this->input->post('id_sertifikat3');
			}
			//file ijazah s1
			if (!empty($_FILES['sertifikat4']['name'])) {
				$this->upload->do_upload('sertifikat4');
				$data4 = $this->upload->data();
				$sertifikat4 = $data4['file_name'];
			} else {
				$sertifikat4 = $this->input->post('id_sertifikat4');
			}
			//file ijazah s2
			if (!empty($_FILES['sertifikat5']['name'])) {
				$this->upload->do_upload('sertifikat5');
				$data5 = $this->upload->data();
				$sertifikat5 = $data5['file_name'];
			} else {
				$sertifikat5 = $this->input->post('id_sertifikat5');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('sertifikat1', $sertifikat1);
				$this->db->set('sertifikat2', $sertifikat2);
				$this->db->set('sertifikat3', $sertifikat3);
				$this->db->set('sertifikat4', $sertifikat4);
				$this->db->set('sertifikat5', $sertifikat5);
				$this->db->where('email', $email);
				$this->db->update('data_tambahan');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/tambahsertifikat');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/tambahsertifikat');
		}
	}
	public function inputsklainnya()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');

			$config['upload_path']	 = './assets/datatambahan/sktambahan';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			//file ijazah sd
			if (!empty($_FILES['sk_lainnya1']['name'])) {
				$this->upload->do_upload('sk_lainnya1');
				$data1 = $this->upload->data();
				$sk_lainnya1 = $data1['file_name'];
			} else {
				$sk_lainnya1 = $this->input->post('id_sk_lainnya1');
			}
			//file ijazah sltp
			if (!empty($_FILES['sk_lainnya2']['name'])) {
				$this->upload->do_upload('sk_lainnya2');
				$data2 = $this->upload->data();
				$sk_lainnya2 = $data2['file_name'];
			} else {
				$sk_lainnya2 = $this->input->post('id_sk_lainnya2');
			}
			//file ijazah slta
			if (!empty($_FILES['sk_lainnya3']['name'])) {
				$this->upload->do_upload('sk_lainnya3');
				$data3 = $this->upload->data();
				$sk_lainnya3 = $data3['file_name'];
			} else {
				$sk_lainnya3 = $this->input->post('id_sk_lainnya3');
			}
			//file ijazah s1
			if (!empty($_FILES['sk_lainnya4']['name'])) {
				$this->upload->do_upload('sk_lainnya4');
				$data4 = $this->upload->data();
				$sk_lainnya4 = $data4['file_name'];
			} else {
				$sk_lainnya4 = $this->input->post('id_sk_lainnya4');
			}
			//file ijazah s2
			if (!empty($_FILES['sk_lainnya5']['name'])) {
				$this->upload->do_upload('sk_lainnya5');
				$data5 = $this->upload->data();
				$sk_lainnya5 = $data5['file_name'];
			} else {
				$sk_lainnya5 = $this->input->post('id_sk_lainnya5');
			}

			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->db->set('email', $email);
				$this->db->set('sk_lainnya1', $sk_lainnya1);
				$this->db->set('sk_lainnya2', $sk_lainnya2);
				$this->db->set('sk_lainnya3', $sk_lainnya3);
				$this->db->set('sk_lainnya4', $sk_lainnya4);
				$this->db->set('sk_lainnya5', $sk_lainnya5);
				$this->db->where('email', $email);
				$this->db->update('data_tambahan');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
				redirect('user/tambahsklainnya');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pastikan Data Anda berbentuk pdf!</div>');
			redirect('user/tambahsklainnya');
		}
	}
	public function tambahsertifikatlain()
	{
		$data['judul'] = 'Data Sertifikat';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['daser'] = $this->db->get_where('sertifikat', ['email' => $this->session->userdata('email')])->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/tambahsertifikatlain', $data);
		$this->load->view('templates/footer');
	}
	public function inputtambahsertifikat()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');
			// $this->form_validation->set_rules('nama_sertifikat', 'Nama Sertifikat', 'required|trim');
			// $this->form_validation->set_rules('file_sertifikat', 'File Sertifikat', 'required|trim');

			$config['upload_path']	 = './assets/sertifikat/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			if (!empty($_FILES['file_sertifikat']['name'])) {
				$this->upload->do_upload('file_sertifikat');
				$data1 = $this->upload->data();
				$file_sertifikat = $data1['file_name'];
			}
			if ($this->form_validation->run()) {
				$data = [
					'email' => $this->input->post('email'),
					'nama_sertifikat' => $this->input->post('nama_sertifikat'),
					'file_sertifikat' => $file_sertifikat
				];
				$insert = $this->db->insert('sertifikat', $data);
				if ($insert) {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
					redirect('user/tambahsertifikatlain');
				}
			} else {
				echo $this->upload->display_errors();
				redirect('user/tambahsertifikatlain');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pastikan data Anda berbentuk pdf!</div>');
			redirect('user/tambahsertifikatlain');
		}
	}
	public function download_sertifikat($id)
	{
		$this->load->helper('download');
		//get file into form database
		$sertifikat = $this->db->get_where('sertifikat', array('id' => $id))->row();
		//menunjukkan nama tabel
		$file = $sertifikat->file_sertifikat;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/sertifikat/' . $file);
		//nama file saat di download
		$name = $file;
		//download file
		force_download($name, $data);
	}
	public function delete_sertifikat($id)
	{
		//get file on database
		$sertifikat = $this->db->get_where('sertifikat', array('id' => $id))->row();
		$old_file = $sertifikat->file_sertifikat;
		if ($old_file) {
			unlink('assets/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('id', $id);
		$this->db->delete('sertifikat');
		redirect('user/tambahsertifikatlain');
	}
	public function sk_tambahan()
	{
		$data['judul'] = 'Data Sertifikat';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dasktam'] = $this->db->get_where('sk_tambahan', ['email' => $this->session->userdata('email')])->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/sk_tambahan', $data);
		$this->load->view('templates/footer');
	}
	public function inputsktambahan()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('email', 'Email', 'required');
			// $this->form_validation->set_rules('nama_sertifikat', 'Nama Sertifikat', 'required|trim');
			// $this->form_validation->set_rules('file_sertifikat', 'File Sertifikat', 'required|trim');

			$config['upload_path']	 = './assets/sk_tambahan/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
			$config['max_size']		 = '2048';
			$this->load->library('upload', $config);

			if (!empty($_FILES['file_sk_tambahan']['name'])) {
				$this->upload->do_upload('file_sk_tambahan');
				$data1 = $this->upload->data();
				$file_sk_tambahan = $data1['file_name'];
			}
			if ($this->form_validation->run()) {
				$data = [
					'email' => $this->input->post('email'),
					'nama_sk_tambahan' => $this->input->post('nama_sk_tambahan'),
					'file_sk_tambahan' => $file_sk_tambahan
				];
				$insert = $this->db->insert('sk_tambahan', $data);
				if ($insert) {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data saved</div>');
					redirect('user/sk_tambahan');
				}
			} else {
				echo $this->upload->display_errors();
				redirect('user/sk_tambahan');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pastikan data Anda berbentuk pdf!</div>');
			redirect('user/sk_tambahan');
		}
	}
	public function download_sktambahan($id)
	{
		$this->load->helper('download');
		//get file into form database
		$sk_tambahan = $this->db->get_where('sk_tambahan', array('id' => $id))->row();
		//menunjukkan nama tabel
		$file = $sk_tambahan->file_sk_tambahan;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/sk_tambahan/' . $file);
		//nama file saat di download
		$name = $file;
		//download file
		force_download($name, $data);
	}
	public function delete_sktambahan($id)
	{
		//get file on database
		$sk_tambahan = $this->db->get_where('sk_tambahan', array('id' => $id))->row();
		$old_file = $sk_tambahan->file_sk_tambahan;
		if ($old_file) {
			unlink('assets/sk_tambahan/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('id', $id);
		$this->db->delete('sk_tambahan');
		redirect('user/sk_tambahan');
	}
	public function inputtambahsertifikatkoreksi()
	{
		$this->load->library('form_validation');
		$this->load->helper('file');

		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('email', 'Email', 'required');
			// $this->form_validation->set_rules('nama_sertifikat', 'Nama Sertifikat', 'callback_type_check');
			$this->form_validation->set_rules('file_sertifikat', '', 'callback_file_check');

			if ($this->form_validation->run() == true) {
				$config['upload_path']	 = './assets/sertifikat/';
				$config['allowed_types'] = 'pdf|jpg|jpeg|png|docx|doc|xls|xlsx';
				$config['max_size']		 = '2048';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('file_sertifikat')) {
					$data1 = $this->upload->data();
					$file_sertifikat = $data1['file_name'];

					$data = [
						'email' => $this->input->post('email'),
						'nama_sertifikat' => $this->input->post('nama_sertifikat'),
						'file_sertifikat' => $file_sertifikat
					];
					$insert = $this->db->insert('sertifikat', $data);
					if ($insert) {
						$data['success_msg'] = 'File has been uploaded succesfully';
						redirect('user/tambahsertifikatlainkoreksi');
					}
				} else {
					$data['error_msg'] =  $this->upload->display_errors();
					redirect('user/tambahsertifikatlain');
				}
			}
		}
		// public function file_check($str)
		// {
		// 	$allowed_mime_type_arr = array('application/pdf', 'image/jpg', 'image/jpeg', 'image/png', 'document/doc', 'document/docx', 'excel/xls', 'excel/xlsx');
		// 	$mime = get_mime_by_extension($_FILES['sertifikat1']['name']);
		// 	if (isset($_FILES['sertifikat1']['name']) && $_FILES['sertifikat1']['name'] != ''){
		// 		if(in_array($mime, $allowed_mime_type_arr)){
		// 			return true;
		// 		}else{
		// 			$this->form_validation->set_message('file_check', 'Please select only pdf/jpg/jpeg/png/doc/docx/xls/xlsx file');
		// 			return false;
		// 		}
		// 	}else{
		// 		$this->form_validation->set_message('file_check', 'Please choose file to upload');
		// 		return false;
		// 	}
		// }
	}
}
