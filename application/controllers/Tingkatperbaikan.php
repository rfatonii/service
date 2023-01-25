<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tingkatperbaikan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_tingkatperbaikan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tingkatperbaikan/tbl_tingkatperbaikan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_tingkatperbaikan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_tingkatperbaikan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_tingkatperbaikan' => $row->kode_tingkatperbaikan,
		'nama_tingkatperbaikan' => $row->nama_tingkatperbaikan,
	    );
            $this->template->load('template','tingkatperbaikan/tbl_tingkatperbaikan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tingkatperbaikan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tingkatperbaikan/create_action'),
	    'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan'),
	    'nama_tingkatperbaikan' => set_value('nama_tingkatperbaikan'),
	);
        $this->template->load('template','tingkatperbaikan/tbl_tingkatperbaikan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_tingkatperbaikan' => $this->input->post('nama_tingkatperbaikan',TRUE),
	    );

            $this->Tbl_tingkatperbaikan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('tingkatperbaikan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_tingkatperbaikan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tingkatperbaikan/update_action'),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		'nama_tingkatperbaikan' => set_value('nama_tingkatperbaikan', $row->nama_tingkatperbaikan),
	    );
            $this->template->load('template','tingkatperbaikan/tbl_tingkatperbaikan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tingkatperbaikan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_tingkatperbaikan', TRUE));
        } else {
            $data = array(
		'nama_tingkatperbaikan' => $this->input->post('nama_tingkatperbaikan',TRUE),
	    );

            $this->Tbl_tingkatperbaikan_model->update($this->input->post('kode_tingkatperbaikan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tingkatperbaikan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_tingkatperbaikan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_tingkatperbaikan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tingkatperbaikan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tingkatperbaikan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_tingkatperbaikan', 'nama tingkatperbaikan', 'trim|required');

	$this->form_validation->set_rules('kode_tingkatperbaikan', 'kode_tingkatperbaikan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_tingkatperbaikan.xls";
        $judul = "tbl_tingkatperbaikan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Tingkatperbaikan");

	foreach ($this->Tbl_tingkatperbaikan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_tingkatperbaikan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_tingkatperbaikan.doc");

        $data = array(
            'tingkatperbaikan_data' => $this->Tbl_tingkatperbaikan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tingkatperbaikan/tbl_tingkatperbaikan_doc',$data);
    }

}

/* End of file Tingkatperbaikan.php */
/* Location: ./application/controllers/Tingkatperbaikan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 07:23:13 */
/* http://harviacode.com */