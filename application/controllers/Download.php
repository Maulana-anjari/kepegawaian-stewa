<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller
{
	public function downloadijsd($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_sd;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijsltp($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_sltp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijslta($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_slta;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijs1($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_s1;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijs2($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_s2;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}

	########## METHOD DOWNLOAD FORM KELUARGA ##########
	public function downloadktpdiri($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ktp_diri;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadktppas($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ktp_pas;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadkk($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->kk;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsnikah($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->s_nikah;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadakta($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->akta_pribadi;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadaktapas($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->akta_pas;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}

	########## METHOD DOWNLOAD FORM SK ##########
	public function downloadcpns($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->cpns;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpns($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->pns;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadnaikpangkat($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->naik_pangkat;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadmutasi($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->mutasi;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadkgb($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->kgb;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadimpasing($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->impasing;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}

	########## METHOD DOWNLOAD FORM LAINNYA ##########
	public function downloadnipbaru($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->nip_baru;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadtaspen($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->taspen;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadnpwp($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->npwp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadkarisu($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->karisu;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadaskes($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->askes;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2018($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2018->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2018/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2018($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2018 = $this->db->get_where('data_tahunan_2018', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2018->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2018/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2019($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2019->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2019/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2019($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2019 = $this->db->get_where('data_tahunan_2019', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2019->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2019/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2020($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2020->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2020/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2020($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2020 = $this->db->get_where('data_tahunan_2020', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2020->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2020/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadskp2021($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2021->skp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2021/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpak2021($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tahunan_2021 = $this->db->get_where('data_tahunan_2021', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tahunan_2021->pak;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatahunan/2021/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadtugasmengajar($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_tugas_mengajar;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/data/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadtugastambahan($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_tugas_tambahan;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/data/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsertifikat1($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat1;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsertifikat2($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat2;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsertifikat3($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat3;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsertifikat4($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat4;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsertifikat5($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sertifikat5;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sertifikat/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsk_lainnya1($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya1;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsk_lainnya2($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya2;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsk_lainnya3($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya3;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsk_lainnya4($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
		//menunjukkan nama tabel
		$file = $data_tambahan->sk_lainnya4;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/datatambahan/sktambahan/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsk_lainnya5($email)
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_tambahan = $this->db->get_where('data_tambahan', array('email' => $email))->row();
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
