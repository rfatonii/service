<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_ruangan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','ruangan/tbl_ruangan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_ruangan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_ruangan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_ruangan' => $row->kode_ruangan,
		'nama_ruangan' => $row->nama_ruangan,
	    );
            $this->template->load('template','ruangan/tbl_ruangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ruangan/create_action'),
	    'kode_ruangan' => set_value('kode_ruangan'),
	    'nama_ruangan' => set_value('nama_ruangan'),
	);
        $this->template->load('template','ruangan/tbl_ruangan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
	    );

            $this->Tbl_ruangan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('ruangan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_ruangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ruangan/update_action'),
		'kode_ruangan' => set_value('kode_ruangan', $row->kode_ruangan),
		'nama_ruangan' => set_value('nama_ruangan', $row->nama_ruangan),
	    );
            $this->template->load('template','ruangan/tbl_ruangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_ruangan', TRUE));
        } else {
            $data = array(
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
	    );

            $this->Tbl_ruangan_model->update($this->input->post('kode_ruangan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_ruangan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_ruangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ruangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_ruangan', 'nama ruangan', 'trim|required');

	$this->form_validation->set_rules('kode_ruangan', 'kode_ruangan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_ruangan.xls";
        $judul = "tbl_ruangan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ruangan");

	foreach ($this->Tbl_ruangan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ruangan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_ruangan.doc");

        $data = array(
            'ruangan_data' => $this->Tbl_ruangan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ruangan/tbl_ruangan_doc',$data);
    }

}

/* End of file Ruangan.php */
/* Location: ./application/controllers/Ruangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:23:07 */
/* http://harviacode.com */