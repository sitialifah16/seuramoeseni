<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('web/home');
	}

	public function home(){
		$this->load->view('home');
	}

	public function profil(){
		$this->load->view('profil');
	}

	public function formdaftar(){
		$this->load->view('form-pendaftaran');
	}

	public function daftar(){
		$this->load->view('pendaftaran');
	}

	public function galeri(){
		$this->load->view('galeri');
	}

	public function kegiatan(){
		$this->load->view('kegiatan');
	}

	public function businesstari(){
		$this->load->view('room-business-tari');
	}

	public function businessmusik(){
		$this->load->view('room-business-musik');
	}

	public function struktur(){
		$this->load->view('struktur');
	}

	public function berhasil(){
		$this->load->view('registrasi-berhasil');
	}

	public function daftar_post(){
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_hp = $this->input->post('no_hp');
		$jurusan = $this->input->post('jurusan');
		$angkatan = $this->input->post('angkatan');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		$alergi = $this->input->post('alergi');
		$minat_bakat_1 = $this->input->post('minat_bakat_1');
		$minat_bakat_2 = $this->input->post('minat_bakat_2');
		$alasan = $this->input->post('alasan');

		
		$this->load->model('Web_model'); // memuat kelas Web_model.php agat fungsi didalamnya bisa dipanggil di controller ini_get
		
		$data = array(
			"nama" => $nama,
			"jenis_kelamin" => $jenis_kelamin,
			"no_hp" => $no_hp,
			"jurusan" => $jurusan,
			"angkatan" => $angkatan,
			"alamat" => $alamat,
			"tempat_lahir" => $tempat_lahir,
			"tanggal_lahir" => $tanggal_lahir,
			"riwayat_penyakit" => $riwayat_penyakit,
			"alergi" => $alergi,
			"minat_bakat_1" => $minat_bakat_1,
			"minat_bakat_2" => $minat_bakat_2,
			"alasan" => $alasan,		
		);
		
		$this->Web_model->input_regis($data);
		//echo "<script>alert('Gagal login!');history.go(-1);</script>";
        redirect('web/berhasil');
	}
}
