<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hapusdandownloadtahunan extends CI_Controller
{
	////////////////////DELETE//////////////////////////
	####################################################
	##################TAHUN 2018########################
	####################################################
	public function hapusskp2018()
	{
		$data = [
			'skp' => NULL
		];
		//get file on database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2018->skp;
		if ($old_file) {
			unlink('assets/datatahunan/2018/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2018', $data);
		redirect('user/formtahun2018');
	}
	public function hapusnilai_skp2018()
	{
		$data = [
			'nilai_skp' => NULL
		];
		//get file on database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2018->nilai_skp;
		if ($old_file) {
			unlink('assets/datatahunan/2018/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2018', $data);
		redirect('user/formtahun2018');
	}
	public function hapuspak2018()
	{
		$data = [
			'pak' => NULL
		];
		//get file on database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2018->pak;
		if ($old_file) {
			unlink('assets/datatahunan/2018/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2018', $data);
		redirect('user/formtahun2018');
	}
	public function hapusnilai_pak2018()
	{
		$data = [
			'nilai_pak' => NULL
		];
		//get file on database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2018->nilai_pak;
		if ($old_file) {
			unlink('assets/datatahunan/2018/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2018', $data);
		redirect('user/formtahun2018');
	}
	####################################################
	##################TAHUN 2019########################
	####################################################
	public function hapusskp2019()
	{
		$data = [
			'skp' => NULL
		];
		//get file on database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2019->skp;
		if ($old_file) {
			unlink('assets/datatahunan/2019/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2019', $data);
		redirect('user/formtahun2019');
	}
	public function hapusnilai_skp2019()
	{
		$data = [
			'nilai_skp' => NULL
		];
		//get file on database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2019->nilai_skp;
		if ($old_file) {
			unlink('assets/datatahunan/2019/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2019', $data);
		redirect('user/formtahun2019');
	}
	public function hapuspak2019()
	{
		$data = [
			'pak' => NULL
		];
		//get file on database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2019->pak;
		if ($old_file) {
			unlink('assets/datatahunan/2019/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2019', $data);
		redirect('user/formtahun2019');
	}
	public function hapusnilai_pak2019()
	{
		$data = [
			'nilai_pak' => NULL
		];
		//get file on database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2019->nilai_pak;
		if ($old_file) {
			unlink('assets/datatahunan/2019/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2019', $data);
		redirect('user/formtahun2019');
	}
	####################################################
	##################TAHUN 2020########################
	####################################################
	public function hapusskp2020()
	{
		$data = [
			'skp' => NULL
		];
		//get file on database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2020->skp;
		if ($old_file) {
			unlink('assets/datatahunan/2020/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2020', $data);
		redirect('user/formtahun2020');
	}
	public function hapusnilai_skp2020()
	{
		$data = [
			'nilai_skp' => NULL
		];
		//get file on database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2020->nilai_skp;
		if ($old_file) {
			unlink('assets/datatahunan/2020/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2020', $data);
		redirect('user/formtahun2020');
	}
	public function hapuspak2020()
	{
		$data = [
			'pak' => NULL
		];
		//get file on database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2020->pak;
		if ($old_file) {
			unlink('assets/datatahunan/2020/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2020', $data);
		redirect('user/formtahun2020');
	}
	public function hapusnilai_pak2020()
	{
		$data = [
			'nilai_pak' => NULL
		];
		//get file on database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2020->nilai_pak;
		if ($old_file) {
			unlink('assets/datatahunan/2020/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2020', $data);
		redirect('user/formtahun2020');
	}
	####################################################
	##################TAHUN 2021########################
	####################################################
	public function hapusskp2021()
	{
		$data = [
			'skp' => NULL
		];
		//get file on database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2021->skp;
		if ($old_file) {
			unlink('assets/datatahunan/2021/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2021', $data);
		redirect('user/formtahun2021');
	}
	public function hapusnilai_skp2021()
	{
		$data = [
			'nilai_skp' => NULL
		];
		//get file on database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2021->nilai_skp;
		if ($old_file) {
			unlink('assets/datatahunan/2021/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2021', $data);
		redirect('user/formtahun2021');
	}
	public function hapuspak2021()
	{
		$data = [
			'pak' => NULL
		];
		//get file on database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2021->pak;
		if ($old_file) {
			unlink('assets/datatahunan/2021/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2021', $data);
		redirect('user/formtahun2021');
	}
	public function hapusnilai_pak2021()
	{
		$data = [
			'nilai_pak' => NULL
		];
		//get file on database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tahunan_2021->nilai_pak;
		if ($old_file) {
			unlink('assets/datatahunan/2021/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tahunan_2021', $data);
		redirect('user/formtahun2021');
	}



	///////////////////////////DOWNLOAD///////////////////////////////
	public function downloadskp2018()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2018->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2018/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2018()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2018->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2018/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2019()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2019->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2019/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2019()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2019->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2019/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2020()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2020->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2020/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2020()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2020->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2020/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2021()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2021->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2021/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2021()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2021->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2021/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
}
