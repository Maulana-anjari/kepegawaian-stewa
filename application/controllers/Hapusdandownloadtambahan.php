<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hapusdandownloadtambahan extends CI_Controller
{
	public function hapustugasmengajar()
	{
		$data = [
			'sk_tugas_mengajar' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_tugas_mengajar;
		if ($old_file) {
			unlink('assets/datatambahan/data/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/datatambahan');
	}
	public function downloadtugasmengajar()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_tugas_mengajar;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/data/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapustugastambahan()
	{
		$data = [
			'sk_tugas_tambahan' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_tugas_tambahan;
		if ($old_file) {
			unlink('assets/datatambahan/data/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/datatambahan');
	}
	public function downloadtugastambahan()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_tugas_tambahan;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/data/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}

	public function hapussertifikat1()
	{
		$data = [
			'sertifikat1' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat1;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat1()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat1;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat2()
	{
		$data = [
			'sertifikat2' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat2;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat2()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat2;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat3()
	{
		$data = [
			'sertifikat3' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat3;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat3()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat3;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat4()
	{
		$data = [
			'sertifikat4' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat4;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat4()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat4;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat5()
	{
		$data = [
			'sertifikat5' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat5;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat5()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat5;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat6()
	{
		$data = [
			'sertifikat6' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat6;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat6()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat6;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat7()
	{
		$data = [
			'sertifikat7' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat7;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat7()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat7;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat8()
	{
		$data = [
			'sertifikat8' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat8;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat8()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat8;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat9()
	{
		$data = [
			'sertifikat9' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat9;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat9()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat9;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussertifikat10()
	{
		$data = [
			'sertifikat10' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sertifikat10;
		if ($old_file) {
			unlink('assets/datatambahan/sertifikat/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsertifikat');
	}
	public function downloadsertifikat10()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat10;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussk_lainnya1()
	{
		$data = [
			'sk_lainnya1' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_lainnya1;
		if ($old_file) {
			unlink('assets/datatambahan/sktambahan/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsklainnya');
	}
	public function downloadsk_lainnya1()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya1;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussk_lainnya2()
	{
		$data = [
			'sk_lainnya2' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_lainnya2;
		if ($old_file) {
			unlink('assets/datatambahan/sktambahan/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsklainnya');
	}
	public function downloadsk_lainnya2()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya2;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussk_lainnya3()
	{
		$data = [
			'sk_lainnya3' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_lainnya3;
		if ($old_file) {
			unlink('assets/datatambahan/sktambahan/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsklainnya');
	}
	public function downloadsk_lainnya3()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya3;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussk_lainnya4()
	{
		$data = [
			'sk_lainnya4' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_lainnya4;
		if ($old_file) {
			unlink('assets/datatambahan/sktambahan/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsklainnya');
	}
	public function downloadsk_lainnya4()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya4;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function hapussk_lainnya5()
	{
		$data = [
			'sk_lainnya5' => NULL
		];
		//get file on database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_tambahan->sk_lainnya5;
		if ($old_file) {
			unlink('assets/datatambahan/sktambahan/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_tambahan', $data);
		redirect('user/tambahsklainnya');
	}
	public function downloadsk_lainnya5()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya5;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
}
