<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_ruangan_model extends CI_Model
{

    public $table = 'tbl_keluhan';
    public $id = 'id_keluhan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
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
	
		public function get_all_with_date($tgl_awal, $tgl_akhir)
    {
        return $this->db->query("SELECT * FROM tbl_keluhan WHERE tanggal between '$tgl_awal' AND '$tgl_akhir' ORDER BY tanggal_keluhan ASC");
    }

}

/* End of file Tbl_ruangan_model.php */
/* Location: ./application/models/Tbl_ruangan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:23:07 */
/* http://harviacode.com */