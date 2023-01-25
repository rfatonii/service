<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_keluhansimrs_model extends CI_Model
{

    public $table = 'tbl_keluhansimrs';
    public $id = 'kode_keluhansimrs';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    /*function json() {
        $this->datatables->select('kode_keluhansimrs,tanggal_keluhansimrs,unit_kerja,deskripsi,kode_jp_simrs,pengembangan_oleh,solusi,tanggal_selesai');
        $this->datatables->from('tbl_keluhansimrs');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_keluhansimrs.field = table2.field');
        //$this->datatables->join('tbl_jenispekerjaan_simrs', 'tbl_keluhansimrs.kode_jp_simrs = tbl_jenispekerjaan_simrs.kode_jp_simrs');
       // $this->datatables->join('tbl_jenispekerjaan_simrs', 'tbl_jenispekerjaan_simrs.kode_jp_simrs = tbl_keluhansimrs.kode_jp_simrs');
		
		$this->datatables->join('tbl_tingkatperbaikan', 'tbl_tingkatperbaikan.kode_tingkatperbaikan = tbl_keluhansimrs.pengembangan_oleh');
		
		$this->datatables->add_column('action', anchor(site_url('keluhansimrs/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-primary btn-sm'))." 
            ".anchor(site_url('keluhansimrs/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-success btn-sm'))." 
                ".anchor(site_url('keluhansimrs/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_keluhansimrs');
        return $this->datatables->generate();
    }*/

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
        $this->db->like('kode_keluhansimrs', $q);
	$this->db->or_like('tanggal_keluhansimrs', $q);
	$this->db->or_like('unit_kerja', $q);
	$this->db->or_like('deskripsi', $q);
	$this->db->or_like('kode_jp_simrs', $q);
	$this->db->or_like('pengembangan_oleh', $q);
	$this->db->or_like('solusi', $q);
	$this->db->or_like('tanggal_selesai', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_keluhansimrs', $q);
	$this->db->or_like('tanggal_keluhansimrs', $q);
	$this->db->or_like('unit_kerja', $q);
	$this->db->or_like('deskripsi', $q);
	$this->db->or_like('kode_jp_simrs', $q);
	$this->db->or_like('pengembangan_oleh', $q);
	$this->db->or_like('solusi', $q);
	$this->db->or_like('tanggal_selesai', $q);
	$this->db->limit($limit, $start);
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
        $query=$this->db->query("SELECT * FROM `tbl_keluhansimrs` 
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhansimrs.kode_pelapor
		LEFT join tbl_jenispekerjaan_simrs on tbl_jenispekerjaan_simrs.kode_jp_simrs=tbl_keluhansimrs.kode_jp_simrs 
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhansimrs.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhansimrs.kode_operator 
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhansimrs.kode_status 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhansimrs.kode_tingkatperbaikan 
		Where tbl_keluhansimrs.kode_status = '$kode' ORDER BY tbl_keluhansimrs.kode_keluhansimrs DESC");
        return $query->result();
      }
	  
	function process_keluhan($kode=2){
        $query=$this->db->query("SELECT * FROM `tbl_keluhansimrs` 
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhansimrs.kode_pelapor
		LEFT join tbl_jenispekerjaan_simrs on tbl_jenispekerjaan_simrs.kode_jp_simrs=tbl_keluhansimrs.kode_jp_simrs 
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhansimrs.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhansimrs.kode_operator 
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhansimrs.kode_status 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhansimrs.kode_tingkatperbaikan 
		Where tbl_keluhansimrs.kode_status = '$kode' ORDER BY tbl_keluhansimrs.kode_keluhansimrs DESC");
        return $query->result();
      }
	 
	function selesai_keluhan($kode=3){
        $query=$this->db->query("SELECT * FROM `tbl_keluhansimrs` 
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhansimrs.kode_pelapor
		LEFT join tbl_jenispekerjaan_simrs on tbl_jenispekerjaan_simrs.kode_jp_simrs=tbl_keluhansimrs.kode_jp_simrs 
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhansimrs.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhansimrs.kode_operator 
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhansimrs.kode_status 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhansimrs.kode_tingkatperbaikan 
		Where tbl_keluhansimrs.kode_status = '$kode' ORDER BY tbl_keluhansimrs.kode_keluhansimrs DESC");
        return $query->result();
      }
	
	function join_all_data($id){
        $query=$this->db->query("SELECT * FROM `tbl_keluhansimrs` 
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhansimrs.kode_pelapor
		LEFT join tbl_jenispekerjaan_simrs on tbl_jenispekerjaan_simrs.kode_jp_simrs=tbl_keluhansimrs.kode_jp_simrs
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhansimrs.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhansimrs.kode_operator 
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhansimrs.kode_status 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhansimrs.kode_tingkatperbaikan 
		Where kode_keluhansimrs = '$id' ORDER BY tbl_keluhansimrs.kode_keluhansimrs DESC");
        return $query->result();
      }
	  
	function semua_keluhanuser(){
        $kode = $this->session->userdata('id_users');
		
		$query=$this->db->query("SELECT * FROM `tbl_keluhansimrs` 
		LEFT join tbl_user on tbl_user.id_users=tbl_keluhansimrs.kode_pelapor
		LEFT join tbl_jenispekerjaan_simrs on tbl_jenispekerjaan_simrs.kode_jp_simrs=tbl_keluhansimrs.kode_jp_simrs 
		LEFT join tbl_hasilpengecekan on tbl_hasilpengecekan.kode_hasilpengecekan=tbl_keluhansimrs.kode_hasilpengecekan 
		LEFT join tbl_operator on tbl_operator.kode_operator=tbl_keluhansimrs.kode_operator 
		LEFT join tbl_status on tbl_status.kode_status=tbl_keluhansimrs.kode_status 
		LEFT join tbl_tingkatperbaikan on tbl_tingkatperbaikan.kode_tingkatperbaikan=tbl_keluhansimrs.kode_tingkatperbaikan 
		Where tbl_keluhansimrs.kode_pelapor = '$kode' ORDER BY tbl_keluhansimrs.kode_keluhansimrs DESC");
        return $query->result();
      }

}

/* End of file Tbl_keluhansimrs_model.php */
/* Location: ./application/models/Tbl_keluhansimrs_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-14 08:26:53 */
/* http://harviacode.com */