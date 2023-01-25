<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenispekerjaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_jenispekerjaan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','jenispekerjaan/tbl_jenispekerjaan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jenispekerjaan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_jenispekerjaan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_jenispekerjaan' => $row->kode_jenispekerjaan,
		'nama_jenispekerjaan' => $row->nama_jenispekerjaan,
	    );
            $this->template->load('template','jenispekerjaan/tbl_jenispekerjaan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenispekerjaan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jenispekerjaan/create_action'),
	    'kode_jenispekerjaan' => set_value('kode_jenispekerjaan'),
	    'nama_jenispekerjaan' => set_value('nama_jenispekerjaan'),
	);
        $this->template->load('template','jenispekerjaan/tbl_jenispekerjaan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_jenispekerjaan' => $this->input->post('nama_jenispekerjaan',TRUE),
	    );

            $this->Tbl_jenispekerjaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('jenispekerjaan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_jenispekerjaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jenispekerjaan/update_action'),
		'kode_jenispekerjaan' => set_value('kode_jenispekerjaan', $row->kode_jenispekerjaan),
		'nama_jenispekerjaan' => set_value('nama_jenispekerjaan', $row->nama_jenispekerjaan),
	    );
            $this->template->load('template','jenispekerjaan/tbl_jenispekerjaan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenispekerjaan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_jenispekerjaan', TRUE));
        } else {
            $data = array(
		'nama_jenispekerjaan' => $this->input->post('nama_jenispekerjaan',TRUE),
	    );

            $this->Tbl_jenispekerjaan_model->update($this->input->post('kode_jenispekerjaan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jenispekerjaan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_jenispekerjaan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jenispekerjaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jenispekerjaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenispekerjaan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_jenispekerjaan', 'nama jenispekerjaan', 'trim|required');

	$this->form_validation->set_rules('kode_jenispekerjaan', 'kode_jenispekerjaan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_jenispekerjaan.xls";
        $judul = "tbl_jenispekerjaan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Jenispekerjaan");

	foreach ($this->Tbl_jenispekerjaan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jenispekerjaan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_jenispekerjaan.doc");

        $data = array(
            'jenispekerjaan_data' => $this->Tbl_jenispekerjaan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jenispekerjaan/tbl_jenispekerjaan_doc',$data);
    }

}

/* End of file Jenispekerjaan.php */
/* Location: ./application/controllers/Jenispekerjaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:22:17 */
/* http://harviacode.com */