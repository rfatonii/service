<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasilpengecekan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_hasilpengecekan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','hasilpengecekan/tbl_hasilpengecekan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_hasilpengecekan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_hasilpengecekan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_hasilpengecekan' => $row->kode_hasilpengecekan,
		'nama_hasilpengecekan' => $row->nama_hasilpengecekan,
	    );
            $this->template->load('template','hasilpengecekan/tbl_hasilpengecekan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasilpengecekan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('hasilpengecekan/create_action'),
	    'kode_hasilpengecekan' => set_value('kode_hasilpengecekan'),
	    'nama_hasilpengecekan' => set_value('nama_hasilpengecekan'),
	);
        $this->template->load('template','hasilpengecekan/tbl_hasilpengecekan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_hasilpengecekan' => $this->input->post('nama_hasilpengecekan',TRUE),
	    );

            $this->Tbl_hasilpengecekan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('hasilpengecekan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_hasilpengecekan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hasilpengecekan/update_action'),
		'kode_hasilpengecekan' => set_value('kode_hasilpengecekan', $row->kode_hasilpengecekan),
		'nama_hasilpengecekan' => set_value('nama_hasilpengecekan', $row->nama_hasilpengecekan),
	    );
            $this->template->load('template','hasilpengecekan/tbl_hasilpengecekan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasilpengecekan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_hasilpengecekan', TRUE));
        } else {
            $data = array(
		'nama_hasilpengecekan' => $this->input->post('nama_hasilpengecekan',TRUE),
	    );

            $this->Tbl_hasilpengecekan_model->update($this->input->post('kode_hasilpengecekan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('hasilpengecekan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_hasilpengecekan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_hasilpengecekan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('hasilpengecekan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasilpengecekan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_hasilpengecekan', 'nama hasilpengecekan', 'trim|required');

	$this->form_validation->set_rules('kode_hasilpengecekan', 'kode_hasilpengecekan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_hasilpengecekan.xls";
        $judul = "tbl_hasilpengecekan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Hasilpengecekan");

	foreach ($this->Tbl_hasilpengecekan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_hasilpengecekan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_hasilpengecekan.doc");

        $data = array(
            'hasilpengecekan_data' => $this->Tbl_hasilpengecekan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('hasilpengecekan/tbl_hasilpengecekan_doc',$data);
    }

}

/* End of file Hasilpengecekan.php */
/* Location: ./application/controllers/Hasilpengecekan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:20:18 */
/* http://harviacode.com */