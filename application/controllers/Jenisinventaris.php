<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenisinventaris extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_jenisinventaris_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','jenisinventaris/tbl_jenisinventaris_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jenisinventaris_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_jenisinventaris_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_jenisinventaris' => $row->kode_jenisinventaris,
		'nama_jenisinventaris' => $row->nama_jenisinventaris,
	    );
            $this->template->load('template','jenisinventaris/tbl_jenisinventaris_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenisinventaris'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jenisinventaris/create_action'),
	    'kode_jenisinventaris' => set_value('kode_jenisinventaris'),
	    'nama_jenisinventaris' => set_value('nama_jenisinventaris'),
	);
        $this->template->load('template','jenisinventaris/tbl_jenisinventaris_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_jenisinventaris' => $this->input->post('nama_jenisinventaris',TRUE),
	    );

            $this->Tbl_jenisinventaris_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('jenisinventaris'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_jenisinventaris_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jenisinventaris/update_action'),
		'kode_jenisinventaris' => set_value('kode_jenisinventaris', $row->kode_jenisinventaris),
		'nama_jenisinventaris' => set_value('nama_jenisinventaris', $row->nama_jenisinventaris),
	    );
            $this->template->load('template','jenisinventaris/tbl_jenisinventaris_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenisinventaris'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_jenisinventaris', TRUE));
        } else {
            $data = array(
		'nama_jenisinventaris' => $this->input->post('nama_jenisinventaris',TRUE),
	    );

            $this->Tbl_jenisinventaris_model->update($this->input->post('kode_jenisinventaris', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jenisinventaris'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_jenisinventaris_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jenisinventaris_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jenisinventaris'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenisinventaris'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_jenisinventaris', 'nama jenisinventaris', 'trim|required');

	$this->form_validation->set_rules('kode_jenisinventaris', 'kode_jenisinventaris', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_jenisinventaris.xls";
        $judul = "tbl_jenisinventaris";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Jenisinventaris");

	foreach ($this->Tbl_jenisinventaris_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jenisinventaris);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_jenisinventaris.doc");

        $data = array(
            'jenisinventaris_data' => $this->Tbl_jenisinventaris_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jenisinventaris/tbl_jenisinventaris_doc',$data);
    }

}

/* End of file Jenisinventaris.php */
/* Location: ./application/controllers/Jenisinventaris.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:20:36 */
/* http://harviacode.com */