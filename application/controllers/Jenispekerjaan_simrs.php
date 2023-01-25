<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenispekerjaan_simrs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_jenispekerjaan_simrs_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','jenispekerjaan_simrs/tbl_jenispekerjaan_simrs_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jenispekerjaan_simrs_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_jenispekerjaan_simrs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_jp_simrs' => $row->kode_jp_simrs,
		'nama_jp_simrs' => $row->nama_jp_simrs,
	    );
            $this->template->load('template','jenispekerjaan_simrs/tbl_jenispekerjaan_simrs_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenispekerjaan_simrs'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jenispekerjaan_simrs/create_action'),
	    'kode_jp_simrs' => set_value('kode_jp_simrs'),
	    'nama_jp_simrs' => set_value('nama_jp_simrs'),
	);
        $this->template->load('template','jenispekerjaan_simrs/tbl_jenispekerjaan_simrs_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_jp_simrs' => $this->input->post('nama_jp_simrs',TRUE),
	    );

            $this->Tbl_jenispekerjaan_simrs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('jenispekerjaan_simrs'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_jenispekerjaan_simrs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jenispekerjaan_simrs/update_action'),
		'kode_jp_simrs' => set_value('kode_jp_simrs', $row->kode_jp_simrs),
		'nama_jp_simrs' => set_value('nama_jp_simrs', $row->nama_jp_simrs),
	    );
            $this->template->load('template','jenispekerjaan_simrs/tbl_jenispekerjaan_simrs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenispekerjaan_simrs'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_jp_simrs', TRUE));
        } else {
            $data = array(
		'nama_jp_simrs' => $this->input->post('nama_jp_simrs',TRUE),
	    );

            $this->Tbl_jenispekerjaan_simrs_model->update($this->input->post('kode_jp_simrs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jenispekerjaan_simrs'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_jenispekerjaan_simrs_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jenispekerjaan_simrs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jenispekerjaan_simrs'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenispekerjaan_simrs'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_jp_simrs', 'nama jp simrs', 'trim|required');

	$this->form_validation->set_rules('kode_jp_simrs', 'kode_jp_simrs', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_jenispekerjaan_simrs.xls";
        $judul = "tbl_jenispekerjaan_simrs";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Jp Simrs");

	foreach ($this->Tbl_jenispekerjaan_simrs_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jp_simrs);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_jenispekerjaan_simrs.doc");

        $data = array(
            'jenispekerjaan_simrs_data' => $this->Tbl_jenispekerjaan_simrs_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jenispekerjaan_simrs/tbl_jenispekerjaan_simrs_doc',$data);
    }

}

/* End of file Jenispekerjaan_simrs.php */
/* Location: ./application/controllers/Jenispekerjaan_simrs.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-14 08:24:10 */
/* http://harviacode.com */