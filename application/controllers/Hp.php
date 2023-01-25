<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_hp_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','hp/tbl_hp_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_hp_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_hp_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_hp' => $row->kode_hp,
		'nama_hp' => $row->nama_hp,
	    );
            $this->template->load('template','hp/tbl_hp_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hp'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('hp/create_action'),
	    'kode_hp' => set_value('kode_hp'),
	    'nama_hp' => set_value('nama_hp'),
	);
        $this->template->load('template','hp/tbl_hp_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_hp' => $this->input->post('nama_hp',TRUE),
	    );

            $this->Tbl_hp_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('hp'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_hp_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hp/update_action'),
		'kode_hp' => set_value('kode_hp', $row->kode_hp),
		'nama_hp' => set_value('nama_hp', $row->nama_hp),
	    );
            $this->template->load('template','hp/tbl_hp_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hp'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_hp', TRUE));
        } else {
            $data = array(
		'nama_hp' => $this->input->post('nama_hp',TRUE),
	    );

            $this->Tbl_hp_model->update($this->input->post('kode_hp', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('hp'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_hp_model->get_by_id($id);

        if ($row) {
            $this->Tbl_hp_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('hp'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hp'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_hp', 'nama hp', 'trim|required');

	$this->form_validation->set_rules('kode_hp', 'kode_hp', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_hp.xls";
        $judul = "tbl_hp";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Hp");

	foreach ($this->Tbl_hp_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_hp);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_hp.doc");

        $data = array(
            'hp_data' => $this->Tbl_hp_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('hp/tbl_hp_doc',$data);
    }

}

/* End of file Hp.php */
/* Location: ./application/controllers/Hp.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-24 12:14:54 */
/* http://harviacode.com */