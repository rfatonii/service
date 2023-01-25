<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Operator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_operator_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','operator/tbl_operator_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_operator_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_operator_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_operator' => $row->kode_operator,
		'nama_operator' => $row->nama_operator,
	    );
            $this->template->load('template','operator/tbl_operator_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('operator'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('operator/create_action'),
	    'kode_operator' => set_value('kode_operator'),
	    'nama_operator' => set_value('nama_operator'),
	);
        $this->template->load('template','operator/tbl_operator_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_operator' => $this->input->post('nama_operator',TRUE),
	    );

            $this->Tbl_operator_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('operator'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_operator_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('operator/update_action'),
		'kode_operator' => set_value('kode_operator', $row->kode_operator),
		'nama_operator' => set_value('nama_operator', $row->nama_operator),
	    );
            $this->template->load('template','operator/tbl_operator_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('operator'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_operator', TRUE));
        } else {
            $data = array(
		'nama_operator' => $this->input->post('nama_operator',TRUE),
	    );

            $this->Tbl_operator_model->update($this->input->post('kode_operator', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('operator'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_operator_model->get_by_id($id);

        if ($row) {
            $this->Tbl_operator_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('operator'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('operator'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_operator', 'nama operator', 'trim|required');

	$this->form_validation->set_rules('kode_operator', 'kode_operator', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_operator.xls";
        $judul = "tbl_operator";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Operator");

	foreach ($this->Tbl_operator_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_operator);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_operator.doc");

        $data = array(
            'operator_data' => $this->Tbl_operator_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('operator/tbl_operator_doc',$data);
    }

}

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:22:57 */
/* http://harviacode.com */