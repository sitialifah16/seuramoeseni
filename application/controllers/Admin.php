<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct (){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Web_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$this->load->view('admin/dashboardadmin');
	}

	public function dashboard(){
		$this->load->view('dashboardadmin');
	}

	public function dataAnggota(){
		$this->data['tampilanggota'] = $this->Web_model->getDataAnggota('dataanggota');
		$this->load->view('dataAnggota', $this->data);
	}

	function tambahanggota(){
		$this->load->view('tambahanggota');
	}
	function proses_tambahanggota(){
		$npm= $this->input->post('npm');
		$nama= $this->input->post('nama');
		$jurusan= $this->input->post('jurusan');
		$bakat= $this->input->post('bakat');
		$tahun= $this->input->post('tahun');

		$data=array(
			'NPM'=>$npm,
			'Nama'=>$nama,
			'Jurusan'=>$jurusan,
			'Bakat'=>$bakat,
			'Tahun_Masuk'=>$tahun
		);
		$this->Web_model->input_data($data,'dataanggota');
		redirect('admin/dataAnggota');
		
	}

	function editanggota($id){ //nampung id anggota
		$where=array('id_anggota'=>$id);

		$data['anggota']= $this->Web_model->ambil_where($where,'dataanggota')->result();
		$data['id_anggota'] = $id;

		// var_dump($data);
		// die();
		
		$this->load->view('editanggota',$data);
	}
	function proses_editanggota(){
		$id=$this->input->post('id');
		$npm=$this->input->post('npm');
		$nama=$this->input->post('nama');
		$jurusan=$this->input->post('jurusan');
		$bakat=$this->input->post('bakat');
		$tahunmasuk=$this->input->post('tahun');

		$data=array(
			'NPM' =>$npm,
			'Nama' =>$nama,
			"Jurusan" =>$jurusan,
			"Bakat" =>$bakat,
			"Tahun_Masuk" =>$tahunmasuk
		);

		$where=array('id_anggota'=>$id);
		$this->Web_model->updateAnggota($where,$data,'dataanggota');
		redirect('admin/dataAnggota');
	}

	function hapusAnggota($id){
		$where=array('id_anggota'=>$id);
		$this->Web_model->hapusAnggota($where,'dataanggota');
		redirect('admin/dataAnggota');
	}


	public function dataPrestasi(){
		$this->data['tampilprestasi'] = $this->Web_model->getDataPrestasi('data_prestasi');
		$this->load->view('dataPrestasi', $this->data);
	}
	function tambahprestasi(){
		$this->load->view('tambahprestasi');
	}
	function proses_tambahprestasi(){
		$prestasi= $this->input->post('prestasi');
		$kategori= $this->input->post('kategori');
		$tahun= $this->input->post('tahun');

		$data=array(
			'prestasi'=>$prestasi,
			'kategori'=>$kategori,
			'tahun'=>$tahun
		);
		$this->Web_model->input_data_prestasi($data,'data_prestasi');
		redirect('admin/dataPrestasi');
	}

	function editprestasi($id){ //nampung id anggota
		$where=array('id_prestasi'=>$id);

		$data['prestasi']= $this->Web_model->ambil_where_prestasi($where,'data_prestasi')->result();
		$data['id_prestasi'] = $id;

		// var_dump($data);
		// die();
		
		$this->load->view('editprestasi',$data);
	}

	function proses_editprestasi(){
		$id=$this->input->post('id');
		$prestasi=$this->input->post('prestasi');
		$kategori=$this->input->post('kategori');
		$tahun=$this->input->post('tahun');

		$data=array(
			'prestasi' =>$prestasi,
			'kategori' =>$kategori,
			"tahun" =>$tahun,
		);

		$where=array('id_prestasi'=>$id);
		$this->Web_model->updatePrestasi($where,$data,'data_prestasi');
		redirect('admin/dataPrestasi');
	}

	function hapusPrestasi($id){
		$where=array('id_prestasi'=>$id);
		$this->Web_model->hapusPrestasi($where,'data_prestasi');
		redirect('admin/dataPrestasi');
	}




	
	public function dataKegiatan(){
		$this->load->view('dataKegiatan');
	}

	public function pendaftarBaru(){
		$this->data['tampilpendaftar'] = $this->Web_model->getDataPendaftar('user');
		$this->load->view('pendaftarBaru', $this->data);
	}

	public function hargaSewa(){
		$this->data['tampilansewa'] = $this->Web_model->getDataBarang('sewa_alat');
		$this->load->view('hargaSewa', $this->data);
	}

	function tambahbarang(){
		$this->load->view('tambahbarang');
	}

	function proses_tambahbarang(){
		$nama_alat= $this->input->post('nama_alat');
		$jumlah= $this->input->post('jumlah');
		$harga_sewa= $this->input->post('harga');
		
		$data=array(
			'nama_alat'=>$nama_alat,
			'Jumlah'=>$jumlah,
			'harga_sewa'=>$harga_sewa
		);
		$id = $this->Web_model->input_databarang($data,'sewa_alat');

		$filename= $_FILES["gambar"]["name"];
		$gambar_ext = pathinfo($filename,PATHINFO_EXTENSION);
		$gambar = $id.'.'.$gambar_ext;

		$config = array(
			'file_name' => $gambar,
			'upload_path' => "./uploads/barang/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		);

		$this->upload->initialize($config);

		if($this->upload->do_upload('gambar'))
		{
			$gambar_ext = $this->upload->data('file_ext');
		}
		else
		{
			echo $error = array('error' => $this->upload->display_errors());
		}

		$this->Web_model->updateImageBarang($gambar, $id);

		redirect('admin/hargaSewa');
		
	}



	function editalat($id){ //nampung id anggota
		$where=array('id_alat'=>$id);

		$data['sewa']= $this->Web_model->ambil_where_alat($where,'sewa_alat')->result();
		$data['id_alat'] = $id;

		// var_dump($data);
		// die();
		
		$this->load->view('editalat',$data);
	}
	function proses_editbarang(){
		$id=$this->input->post('id');
		$nama_alat=$this->input->post('nama_alat');
		$jumlah=$this->input->post('jumlah');
		$harga_sewa=$this->input->post('harga_sewa');
	

		$data=array(
			'nama_alat'=>$nama_alat,
			'Jumlah'=>$jumlah,
			'harga_sewa'=>$harga_sewa,
		);

		$where=array('id_alat'=>$id);
		$this->Web_model->updateAlat($where,$data,'sewa_alat');

		if(!empty($_FILES['gambar']['name'])){
			$filename= $_FILES["gambar"]["name"];
			$gambar_ext = pathinfo($filename,PATHINFO_EXTENSION);
			$gambar = $id.'.'.$gambar_ext;

			$config = array(
				'file_name' => $gambar,
				'upload_path' => "./uploads/barang/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);

			$this->upload->initialize($config);

			if($this->upload->do_upload('gambar'))
			{
				$gambar_ext = $this->upload->data('file_ext');
			}
			else
			{
				echo $error = array('error' => $this->upload->display_errors());
			}
		}

		redirect('admin/hargaSewa');
	}

	function hapussewa($id){
		$where=array('id_alat'=>$id);

		$data['sewa']= $this->Web_model->ambil_where_alat($where,'sewa_alat')->result();

		unlink('./uploads/barang/' . $data['sewa'][0]->gambar);

		$where=array('id_alat'=>$id);
		$this->Web_model->hapussewa($where,'sewa_alat');
		redirect('admin/hargaSewa');
	}

	




	public function loginadmin(){
		$this->load->view('loginadmin');
	}
	public function login_post(){
		$username = $this->input->post('username');
		$password = hash ('md5', $this->input->post('password'));

		$this->load->model('Web_model');
		

		$data = array(
			"username =" => $username,
			"password =" => $password,
		);
		$admin_login = $this-> Web_model->check_login_admin($data);
		if ($admin_login){
			$this->session->set_userdata('username', $username);
			redirect('admin/dashboard');
		}
		else {
			echo "password yang anda masukkan salah";
			
		}
	}
}
