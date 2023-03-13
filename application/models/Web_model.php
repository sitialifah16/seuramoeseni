<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model {

    // function __construct()
    // {
    //     parent::__construct();
    // }
    public function input_regis($data){
		$data = $this->db->insert('user', $data); // insert adalah fungsi pada CI untuk menginput data ke database
		
		return $data;
	}
    
    public function check_login_admin($data){
        $qr = $this->db->select("*")->get_where('admin', $data);      
        if ($qr->num_rows() > 0){
            return $qr->row(); 
        }
        else {
            return false;
        }
    }
        
    public function getDataAnggota ($table) {
        $dataanggota = $this->db->get($table);
        $this->db->order_by("Tahun_Masuk","desc");
        return $dataanggota->result_array();
    }

    function input_data($data,$table){
        $this->db->insert($table, $data);
    }

    function ambil_where($where,$table) {
        return $this->db->get_where($table,$where);
    }

    function updateAnggota($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapusAnggota($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getDataBarang ($table) {
        $sewa_alat = $this->db->get($table);
        return $sewa_alat->result_array();
    }
    function input_databarang($data,$table){
        $this->db->insert($table, $data);
        return $insert_id = $this->db->insert_id();
    }

    public function updateImageBarang($gambar, $id){
        $this->db->set('gambar', $gambar);
        $this->db->where('id_alat', $id);
        $this->db->update('sewa_alat');
    }

    function ambil_where_alat($where,$table) {
        return $this->db->get_where($table,$where);
    }

    function updateAlat($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function hapussewa($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }


    public function getDataPrestasi ($table) {
        $data_prestasi = $this->db->get($table);
        $this->db->order_by("Tahun","desc");
        return $data_prestasi->result_array();
    }

    function input_data_prestasi($data,$table){
        $this->db->insert($table, $data);
    }

    function ambil_where_prestasi($where,$table) {
        return $this->db->get_where($table,$where);
    }

    function updatePrestasi($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapusPrestasi($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getDataPendaftar ($table) {
        $datapendaftar = $this->db->get($table);
        return $datapendaftar->result_array();
    }
    
    
}
