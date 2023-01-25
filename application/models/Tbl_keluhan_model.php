<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_keluhan_model extends CI_Model
{

    public $table = 'tbl_keluhan';
    public $id = 'kode_keluhan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        //$this->datatables->select('kode_keluhan,id_keluhan,tanggal_keluhan,nama_ruangan,lokasi,unit_kerja,uraian,merk,nama_jenisinventaris,status,kode_operator');
        //$this->datatables->from('tbl_keluhan');
        
		$this->datatables->select('kode_keluhan,id_keluhan,tanggal_keluhan,nama_ruangan,lokasi,unit_kerja,uraian,merk,nama_jenisinventaris,status,kode_operator,full_name,nama_status,nama_jenispekerjaan,nama_tingkatperbaikan');
        $this->datatables->from('tbl_keluhan');
		
		//add this line for join
        $this->datatables->join('tbl_jenisinventaris', 'tbl_jenisinventaris.kode_jenisinventaris = tbl_keluhan.kode_jenisinventaris');
		$this->datatables->join('tbl_user', 'tbl_user.id_users = tbl_keluhan.kode_pelapor');
		$this->datatables->join('tbl_status', 'tbl_status.kode_status = tbl_keluhan.kode_status');
		$this->datatables->join('tbl_jenispekerjaan', 'tbl_jenispekerjaan.kode_jenispekerjaan = tbl_keluhan.kode_jenispekerjaan');
		$this->datatables->join('tbl_tingkatperbaikan', 'tbl_tingkatperbaikan.kode_tingkatperbaikan = tbl_keluhan.kode_tingkatperbaikan');
		
        //$this->datatables->join('tbl_penyebabmasalah', 'tbl_penyebabmasalah.kode_penyebabmasalah = tbl_keluhan.kode_penyebabmasalah');
		//$this->datatables->add_column('action',anchor(site_url('keluhan/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-primary btn-sm'))." 
        //        ".anchor(site_url('keluhan/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_keluhan');
				
		//$this->datatables->add_column('action',anchor(site_url('keluhan/read/$1'),'<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button>')."  ".anchor(site_url('keluhan/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-warning btn-sm'))." 
        //".anchor(site_url('keluhan/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_keluhan');
		
		$this->datatables->add_column('action',anchor(site_url('keluhan/read/$1'),'<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button>')."  
		".anchor(site_url('keluhan/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-success btn-sm'))." 
        ".anchor(site_url('keluhan/tindaklanjut/$1'),'<i class="fa fa-check-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-warning btn-sm'))." 
		".anchor(site_url('keluhan/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_keluhan');
				
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('kode_keluhan', $q);
	$this->db->or_like('tanggal_keluhan', $q);
	$this->db->or_like('id_keluhan', $q);
	$this->db->or_like('kode_pelapor', $q);
	$this->db->or_like('kode_status', $q);
	$this->db->or_like('kode_operator', $q);
	$this->db->or_like('tanggal_selesai', $q);
	$this->db->or_like('nama_ruangan', $q);
	$this->db->or_like('kode_jenisinventaris', $q);
	$this->db->or_like('lokasi', $q);
	$this->db->or_like('unit_kerja', $q);
	$this->db->or_like('merk', $q);
	$this->db->or_like('kode_jenispekerjaan', $q);
	$this->db->or_like('uraian', $q);
	$this->db->or_like('kode_kategori', $q);
	$this->db->or_like('kode_penyebabmasalah', $q);
	$this->db->or_like('kode_hasilpengecekan', $q);
	$this->db->or_like('kebutuhan_material', $q);
	$this->db->or_like('tindaklanjut', $q);
	$this->db->or_like('hasil_kesimpulan', $q);
	$this->db->or_like('kode_tingkatperbaikan', $q);
	$this->db->or_like('full_name', $q);
	$this->db->or_like('nama_status', $q);
		$this->db->join('tbl_jenisinventaris', 'tbl_jenisinventaris.kode_jenisinventaris = tbl_keluhan.kode_jenisinventaris');
		$this->db->join('tbl_user', 'tbl_user.id_users = tbl_keluhan.kode_pelapor');
		$this->db->join('tbl_status', 'tbl_status.kode_status = tbl_keluhan.kode_status');
		$this->db->join('tbl_jenispekerjaan', 'tbl_jenispekerjaan.kode_jenispekerjaan = tbl_keluhan.kode_jenispekerjaan');
		$this->db->join('tbl_tingkatperbaikan', 'tbl_tingkatperbaikan.kode_tingkatperbaikan = tbl_keluhan.kode_tingkatperbaikan');
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_keluhan', $q);
	$this->db->or_like('tanggal_keluhan', $q);
	$this->db->or_like('id_keluhan', $q);
	$this->db->or_like('kode_pelapor', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('kode_operator', $q);
	$this->db->or_like('tanggal_selesai', $q);
	$this->db->or_like('nama_ruangan', $q);
	$this->db->or_like('kode_jenisinventaris', $q);
	$this->db->or_like('lokasi', $q);
	$this->db->or_like('unit_kerja', $q);
	$this->db->or_like('merk', $q);
	$this->db->or_like('kode_jenispekerjaan', $q);
	$this->db->or_like('uraian', $q);
	$this->db->or_like('kode_kategori', $q);
	$this->db->or_like('kode_penyebabmasalah', $q);
	$this->db->or_like('kode_hasilpengecekan', $q);
	$this->db->or_like('kebutuhan_material', $q);
	$this->db->or_like('tindaklanjut', $q);
	$this->db->or_like('hasil_kesimpulan', $q);
	$this->db->or_like('kode_tingkatperbaikan', $q);
	$this->db->or_like('full_name', $q);
	$this->db->or_like('nama_status', $q);
		$this->db->join('tbl_jenisinventaris', 'tbl_jenisinventaris.kode_jenisinventaris = tbl_keluhan.kode_jenisinventaris');
		$this->db->join('tbl_user', 'tbl_user.id_users = tbl_keluhan.kode_pelapor');
		$this->db->join('tbl_status', 'tbl_status.kode_status = tbl_keluhan.kode_status');
		$this->db->join('tbl_jenispekerjaan', 'tbl_jenispekerjaan.kode_jenispekerjaan = tbl_keluhan.kode_jenispekerjaan');
		$this->db->join('tbl_tingkatperbaikan', 'tbl_tingkatperbaikan.kode_tingkatperbaikan = tbl_keluhan.kode_tingkatperbaikan');
	$this->db->limit($limit,$start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
	
	function semua_keluhan($kode=4){
        $query=$this->db->query("SELECT * FROM `tbl_keluhan` 
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhan.kode_pelapor  
		LEFT join tbl_jenisinventaris on tbl_jenisinventaris.kode_jenisinventaris=tbl_keluhan.kode_jenisinventaris 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhan.kode_tingkatperbaikan 
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhan.kode_status 
		Where tbl_keluhan.kode_status = '$kode' ORDER BY tbl_keluhan.kode_keluhan DESC");
        return $query->result();
      }
	  
	 function process_keluhan($kode=2){
        $query=$this->db->query("SELECT * FROM `tbl_keluhan` 
		LEFT join tbl_jenisinventaris on tbl_jenisinventaris.kode_jenisinventaris=tbl_keluhan.kode_jenisinventaris
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhan.kode_tingkatperbaikan
		Where tbl_keluhan.kode_status = '$kode' ORDER BY tbl_keluhan.kode_keluhan DESC");
        return $query->result();
      }
	 
	 function selesai_keluhan($kode=3){
        $query=$this->db->query("SELECT * FROM `tbl_keluhan` 
		LEFT join tbl_jenisinventaris on tbl_jenisinventaris.kode_jenisinventaris=tbl_keluhan.kode_jenisinventaris 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhan.kode_tingkatperbaikan
		Where tbl_keluhan.kode_status = '$kode' ORDER BY tbl_keluhan.kode_keluhan DESC");
        return $query->result();
      }
	  
	  function tindakan_keluhan($kode=2){
        $query=$this->db->query("SELECT * FROM `tbl_keluhan` 
		LEFT join tbl_jenisinventaris on tbl_jenisinventaris.kode_jenisinventaris=tbl_keluhan.kode_jenisinventaris 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhan.kode_tingkatperbaikan
		Where tbl_keluhan.kode_status = '$kode' ORDER BY tbl_keluhan.kode_keluhan DESC");
        return $query->result();
      }
	  
	function semua_join_data(){
        $query=$this->db->query("SELECT * FROM `tbl_keluhan` 
		LEFT join tbl_jenisinventaris on tbl_jenisinventaris.kode_jenisinventaris=tbl_keluhan.kode_jenisinventaris
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhan.kode_pelapor  
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhan.kode_status 
		LEFT join tbl_jenispekerjaan on tbl_jenispekerjaan.kode_jenispekerjaan=tbl_keluhan.kode_jenispekerjaan 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhan.kode_tingkatperbaikan 
		LEFT join tbl_kategori on tbl_kategori.kode_kategori=tbl_keluhan.kode_kategori 
		LEFT join tbl_penyebabmasalah on tbl_penyebabmasalah.kode_penyebabmasalah=tbl_keluhan.kode_penyebabmasalah 
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhan.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhan.kode_operator 
		ORDER BY tbl_keluhan.kode_keluhan DESC");
        return $query->result();
      }
	  
	  function join_all_data($id){
        $query=$this->db->query("SELECT * FROM `tbl_keluhan` 
		LEFT join tbl_jenisinventaris on tbl_jenisinventaris.kode_jenisinventaris=tbl_keluhan.kode_jenisinventaris
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhan.kode_pelapor  
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhan.kode_status 
		LEFT join tbl_jenispekerjaan on tbl_jenispekerjaan.kode_jenispekerjaan=tbl_keluhan.kode_jenispekerjaan 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhan.kode_tingkatperbaikan 
		LEFT join tbl_kategori on tbl_kategori.kode_kategori=tbl_keluhan.kode_kategori 
		LEFT join tbl_penyebabmasalah on tbl_penyebabmasalah.kode_penyebabmasalah=tbl_keluhan.kode_penyebabmasalah 
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhan.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhan.kode_operator 
		Where kode_keluhan = '$id' ORDER BY tbl_keluhan.kode_keluhan DESC");
        return $query->result();
      }

}

/* End of file Tbl_keluhan_model.php */
/* Location: ./application/models/Tbl_keluhan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-30 19:41:15 */
/* http://harviacode.com */