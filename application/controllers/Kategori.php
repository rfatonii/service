<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_kategori_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','kategori/tbl_kategori_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_kategori_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_kategori_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_kategori' => $row->kode_kategori,
		'nama_kategori' => $row->nama_kategori,
	    );
            $this->template->load('template','kategori/tbl_kategori_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kategori'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kategori/create_action'),
	    'kode_kategori' => set_value('kode_kategori'),
	    'nama_kategori' => set_value('nama_kategori'),
	);
        $this->template->load('template','kategori/tbl_kategori_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_kategori' => $this->input->post('nama_kategori',TRUE),
	    );

            $this->Tbl_kategori_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('kategori'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_kategori_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kategori/update_action'),
		'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'nama_kategori' => set_value('nama_kategori', $row->nama_kategori),
	    );
            $this->template->load('template','kategori/tbl_kategori_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kategori'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_kategori', TRUE));
        } else {
            $data = array(
		'nama_kategori' => $this->input->post('nama_kategori',TRUE),
	    );

            $this->Tbl_kategori_model->update($this->input->post('kode_kategori', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kategori'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_kategori_model->get_by_id($id);

        if ($row) {
            $this->Tbl_kategori_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kategori'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kategori'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_kategori', 'nama kategori', 'trim|required');

	$this->form_validation->set_rules('kode_kategori', 'kode_kategori', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_kategori.xls";
        $judul = "tbl_kategori";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Kategori");

	foreach ($this->Tbl_kategori_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_kategori);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_kategori.doc");

        $data = array(
            'kategori_data' => $this->Tbl_kategori_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kategori/tbl_kategori_doc',$data);
    }

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:22:48 */
/* http://harviacode.com */