<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hapusdandownloadpokok extends CI_Controller
{
	////////// METHOD DELETE //////////
	########## METHOD DELETE FORM IJAZAH ##########
	public function hapusijsd()
	{
		$data = [
			'ij_sd' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ij_sd;
		if ($old_file) {
			unlink('assets/upload/dataijazah/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formijazah');
	}
	public function hapusijsltp()
	{
		$data = [
			'ij_sltp' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ij_sltp;
		if ($old_file) {
			unlink('assets/upload/dataijazah/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formijazah');
	}
	public function hapusijslta()
	{
		$data = [
			'ij_slta' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ij_slta;
		if ($old_file) {
			unlink('assets/upload/dataijazah/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formijazah');
	}
	public function hapusijs1()
	{
		$data = [
			'ij_s1' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ij_s1;
		if ($old_file) {
			unlink('assets/upload/dataijazah/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formijazah');
	}
	public function hapusijs2()
	{
		$data = [
			'ij_s2' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ij_s2;
		if ($old_file) {
			unlink('assets/upload/dataijazah/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formijazah');
	}
	########## METHOD DELETE FORM KELUARGA ##########
	public function hapusktpdiri()
	{
		$data = [
			'ktp_diri' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ktp_diri;
		if ($old_file) {
			unlink('assets/upload/datakeluarga/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formkeluarga');
	}
	public function hapusktppas()
	{
		$data = [
			'ktp_pas' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->ktp_pas;
		if ($old_file) {
			unlink('assets/upload/datakeluarga/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formkeluarga');
	}
	public function hapuskk()
	{
		$data = [
			'kk' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->kk;
		if ($old_file) {
			unlink('assets/upload/datakeluarga/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formkeluarga');
	}
	public function hapussnikah()
	{
		$data = [
			's_nikah' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->s_nikah;
		if ($old_file) {
			unlink('assets/upload/datakeluarga/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formkeluarga');
	}
	public function hapusakta()
	{
		$data = [
			'akta_pribadi' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->akta_pribadi;
		if ($old_file) {
			unlink('assets/upload/datakeluarga/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formkeluarga');
	}
	public function hapusaktapas()
	{
		$data = [
			'akta_pas' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->akta_pas;
		if ($old_file) {
			unlink('assets/upload/datakeluarga/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formkeluarga');
	}

	########## METHOD DELETE FORM SK ##########
	public function hapuscpns()
	{
		$data = [
			'cpns' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->cpns;
		if ($old_file) {
			unlink('assets/upload/datask/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formsk');
	}
	public function hapuspns()
	{
		$data = [
			'pns' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->pns;
		if ($old_file) {
			unlink('assets/upload/datask/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formsk');
	}
	public function hapusnaikpangkat()
	{
		$data = [
			'naik_pangkat' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->naik_pangkat;
		if ($old_file) {
			unlink('assets/upload/datask/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formsk');
	}
	public function hapusmutasi()
	{
		$data = [
			'mutasi' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->mutasi;
		if ($old_file) {
			unlink('assets/upload/datask/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formsk');
	}
	public function hapuskgb()
	{
		$data = [
			'kgb' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->kgb;
		if ($old_file) {
			unlink('assets/upload/datask/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formsk');
	}
	public function hapusimpasing()
	{
		$data = [
			'impasing' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->impasing;
		if ($old_file) {
			unlink('assets/upload/datask/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formsk');
	}

	########## METHOD DELETE FORM LAINNYA ##########
	public function hapusnipbaru()
	{
		$data = [
			'nip_baru' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->nip_baru;
		if ($old_file) {
			unlink('assets/upload/datalain/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formlain');
	}
	public function hapustaspen()
	{
		$data = [
			'taspen' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->taspen;
		if ($old_file) {
			unlink('assets/upload/datalain/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formlain');
	}
	public function hapusnpwp()
	{
		$data = [
			'npwp' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->npwp;
		if ($old_file) {
			unlink('assets/upload/datalain/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formlain');
	}
	public function hapuskarisu()
	{
		$data = [
			'karisu' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->karisu;
		if ($old_file) {
			unlink('assets/upload/datalain/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formlain');
	}
	public function hapusaskes()
	{
		$data = [
			'askes' => NULL
		];
		//get file on database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		$old_file = $data_pokok->askes;
		if ($old_file) {
			unlink('assets/upload/datalain/' . $old_file);
		}
		//update database setelah file di delete
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('data_pokok', $data);
		redirect('user/formlain');
	}



	////////// METHOD DOWNLOAD //////////
	########## METHOD DOWNLOAD FORM IJAZAH ##########
	public function downloadijsd()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_sd;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijsltp()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_sltp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijslta()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_slta;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijs1()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ij_s1;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/dataijazah/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadijs2()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
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
	public function downloadktpdiri()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ktp_diri;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadktppas()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->ktp_pas;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadkk()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->kk;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadsnikah()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->s_nikah;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadakta()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->akta_pribadi;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datakeluarga/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadaktapas()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
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
	public function downloadcpns()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->cpns;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadpns()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->pns;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadnaikpangkat()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->naik_pangkat;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadmutasi()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->mutasi;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadkgb()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->kgb;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datask/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadimpasing()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
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
	public function downloadnipbaru()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->nip_baru;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadtaspen()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->taspen;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadnpwp()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->npwp;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadkarisu()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->karisu;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
	public function downloadaskes()
	{
		//load download helper
		$this->load->helper('download');
		//get file into form database
		$data_pokok = $this->db->get_where('data_pokok', array('email' => $this->session->userdata('email')))->row();
		//menunjukkan nama tabel
		$file = $data_pokok->askes;
		//alamat file
		$data = file_get_contents(base_url() . 'assets/upload/datalain/' . $file);
		//nama file saat di download
		$name = "$file";
		//download file
		force_download($name, $data);
	}
}
