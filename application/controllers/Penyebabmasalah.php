<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penyebabmasalah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_penyebabmasalah_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','penyebabmasalah/tbl_penyebabmasalah_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_penyebabmasalah_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_penyebabmasalah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_penyebabmasalah' => $row->kode_penyebabmasalah,
		'nama_penyebabmasalah' => $row->nama_penyebabmasalah,
	    );
            $this->template->load('template','penyebabmasalah/tbl_penyebabmasalah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penyebabmasalah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('penyebabmasalah/create_action'),
	    'kode_penyebabmasalah' => set_value('kode_penyebabmasalah'),
	    'nama_penyebabmasalah' => set_value('nama_penyebabmasalah'),
	);
        $this->template->load('template','penyebabmasalah/tbl_penyebabmasalah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_penyebabmasalah' => $this->input->post('nama_penyebabmasalah',TRUE),
	    );

            $this->Tbl_penyebabmasalah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('penyebabmasalah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_penyebabmasalah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('penyebabmasalah/update_action'),
		'kode_penyebabmasalah' => set_value('kode_penyebabmasalah', $row->kode_penyebabmasalah),
		'nama_penyebabmasalah' => set_value('nama_penyebabmasalah', $row->nama_penyebabmasalah),
	    );
            $this->template->load('template','penyebabmasalah/tbl_penyebabmasalah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penyebabmasalah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_penyebabmasalah', TRUE));
        } else {
            $data = array(
		'nama_penyebabmasalah' => $this->input->post('nama_penyebabmasalah',TRUE),
	    );

            $this->Tbl_penyebabmasalah_model->update($this->input->post('kode_penyebabmasalah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('penyebabmasalah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_penyebabmasalah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_penyebabmasalah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('penyebabmasalah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penyebabmasalah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_penyebabmasalah', 'nama penyebabmasalah', 'trim|required');

	$this->form_validation->set_rules('kode_penyebabmasalah', 'kode_penyebabmasalah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_penyebabmasalah.xls";
        $judul = "tbl_penyebabmasalah";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Penyebabmasalah");

	foreach ($this->Tbl_penyebabmasalah_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_penyebabmasalah);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_penyebabmasalah.doc");

        $data = array(
            'penyebabmasalah_data' => $this->Tbl_penyebabmasalah_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('penyebabmasalah/tbl_penyebabmasalah_doc',$data);
    }

}

/* End of file Penyebabmasalah.php */
/* Location: ./application/controllers/Penyebabmasalah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:23:02 */
/* http://harviacode.com */