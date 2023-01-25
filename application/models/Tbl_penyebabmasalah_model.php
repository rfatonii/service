<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_penyebabmasalah_model extends CI_Model
{

    public $table = 'tbl_penyebabmasalah';
    public $id = 'kode_penyebabmasalah';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('kode_penyebabmasalah,nama_penyebabmasalah');
        $this->datatables->from('tbl_penyebabmasalah');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_penyebabmasalah.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('penyebabmasalah/read/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-primary btn-sm'))." 
            ".anchor(site_url('penyebabmasalah/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-success btn-sm'))." 
                ".anchor(site_url('penyebabmasalah/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_penyebabmasalah');
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
        $this->db->like('kode_penyebabmasalah', $q);
	$this->db->or_like('nama_penyebabmasalah', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_penyebabmasalah', $q);
	$this->db->or_like('nama_penyebabmasalah', $q);
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

}

/* End of file Tbl_penyebabmasalah_model.php */
/* Location: ./application/models/Tbl_penyebabmasalah_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:23:02 */
/* http://harviacode.com */