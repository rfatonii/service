<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keluhansimrs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_keluhansimrs_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()

    {
        //$this->template->load('template','keluhansimrs/tbl_keluhansimrs_list');
		
		$data['semua_keluhanadmin'] = $this->Tbl_keluhansimrs_model->semua_keluhan();
		$data['semua_keluhanuser'] = $this->Tbl_keluhansimrs_model->semua_keluhanuser();
		
        $this->template->load('template','keluhansimrs/tbl_keluhansimrs_list', $data);
    }

	public function proses()
    {
		$data['semua_keluhanadmin'] = $this->Tbl_keluhansimrs_model->process_keluhan();
		
        $this->template->load('template','keluhansimrs/tbl_keluhansimrs_list_process', $data);
    } 

	public function selesai()
    {
		$data['semua_keluhanadmin'] = $this->Tbl_keluhansimrs_model->selesai_keluhan();
		
        $this->template->load('template','keluhansimrs/tbl_keluhansimrs_list_selesai', $data);
    }	
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_keluhansimrs_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'keluhansimrs_data' => $this->Tbl_keluhansimrs_model->join_all_data($id),
		'kode_keluhansimrs' => $row->kode_keluhansimrs,
		'tanggal_keluhansimrs' => $row->tanggal_keluhansimrs,
		'unit_kerja' => $row->unit_kerja,
		'deskripsi' => $row->deskripsi,
		'kode_jp_simrs' => $row->kode_jp_simrs,
		'kode_hasilpengecekan' => $row->kode_hasilpengecekan,
		//'pengembangan_oleh' => $row->pengembangan_oleh,
		'solusi' => $row->solusi,
		'tanggal_selesai' => $row->tanggal_selesai,
	    );
            $this->template->load('template','keluhansimrs/tbl_keluhansimrs_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keluhansimrs/create_action'),
            'action2' => site_url('keluhansimrs/create_action2'),
	    'kode_keluhansimrs' => set_value('kode_keluhansimrs'),
	    'id_keluhansimrs' => set_value('id_keluhansimrs'),
	    'tanggal_keluhansimrs' => set_value('tanggal_keluhansimrs'),
	    'kode_pelapor' => set_value('kode_pelapor'),
	    'unit_kerja' => set_value('unit_kerja'),
	    'deskripsi' => set_value('deskripsi'),
	    'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan'),
	    'kode_jp_simrs' => set_value('kode_jp_simrs'),
	    //'kode_status' => set_value('kode_status'),
	    //'pengembangan_oleh' => set_value('pengembangan_oleh'),
	    //'solusi' => set_value('solusi'),
	    //'tanggal_selesai' => set_value('tanggal_selesai'),
	);
        $this->template->load('template','keluhansimrs/tbl_keluhansimrs_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
		
		date_default_timezone_set("Asia/Jakarta");

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		//'tanggal_keluhansimrs' => date("Y-m-d H:i:s"),
		'id_keluhansimrs' => mktime(date("H"),date("i"),date("s"),date("d"),date("m"),date("Y")),
		'tanggal_keluhansimrs' => $this->input->post('tanggal_keluhansimrs',TRUE),
		'kode_pelapor' => $this->input->post('kode_pelapor',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_jp_simrs' => $this->input->post('kode_jp_simrs',TRUE),
		//'kode_status' => $this->input->post('kode_status',TRUE),
		'kode_status' => 4,
		//'kode_pelapor' => $this->session->userdata('id_users'),
		//'pengembangan_oleh' => $this->input->post('pengembangan_oleh',TRUE),
		//'solusi' => $this->input->post('solusi',TRUE),
		//'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
	    );

            $this->Tbl_keluhansimrs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('keluhansimrs'));
        }
    }
	
	public function create_action2() 
    {
        $this->_rules();
		
		date_default_timezone_set("Asia/Jakarta");

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_keluhansimrs' => mktime(date("H"),date("i"),date("s"),date("d"),date("m"),date("Y")),
		'tanggal_keluhansimrs' => $this->input->post('tanggal_keluhansimrs',TRUE),
		//'kode_pelapor' => $this->input->post('kode_pelapor',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_jp_simrs' => $this->input->post('kode_jp_simrs',TRUE),
		'kode_status' => 4,
		'kode_pelapor' => $this->session->userdata('id_users'),
	    );

            $this->Tbl_keluhansimrs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('keluhansimrs'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keluhansimrs/update_action'),
		'kode_keluhansimrs' => set_value('kode_keluhansimrs', $row->kode_keluhansimrs),
		'tanggal_keluhansimrs' => set_value('tanggal_keluhansimrs', $row->tanggal_keluhansimrs),
		'kode_pelapor' => set_value('kode_pelapor', $row->kode_pelapor),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		'kode_jp_simrs' => set_value('kode_jp_simrs', $row->kode_jp_simrs),
		//'kode_status' => set_value('kode_status', $row->kode_status),
		//'pengembangan_oleh' => set_value('pengembangan_oleh', $row->pengembangan_oleh),
		//'solusi' => set_value('solusi', $row->solusi),
		//'tanggal_selesai' => set_value('tanggal_selesai', $row->tanggal_selesai),
	    );
            $this->template->load('template','keluhansimrs/tbl_keluhansimrs_edit', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_keluhansimrs', TRUE));
        } else {
            $data = array(
		'tanggal_keluhansimrs' => $this->input->post('tanggal_keluhansimrs',TRUE),
		'kode_pelapor' => $this->input->post('kode_pelapor',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_jp_simrs' => $this->input->post('kode_jp_simrs',TRUE),
		//'kode_status' => $this->input->post('kode_status',TRUE),
		'kode_status' => 4,
	    );

            $this->Tbl_keluhansimrs_model->update($this->input->post('kode_keluhansimrs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhansimrs'));
        }
    }
	
	public function tindaklanjut($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Tindaklanjut',
                'action' => site_url('keluhansimrs/tindaklanjut_action'),
		'kode_keluhansimrs' => set_value('kode_keluhansimrs', $row->kode_keluhansimrs),
		'tanggal_keluhansimrs' => set_value('tanggal_keluhansimrs', $row->tanggal_keluhansimrs),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		'kode_jp_simrs' => set_value('kode_jp_simrs', $row->kode_jp_simrs),
		//'pengembangan_oleh' => set_value('pengembangan_oleh', $row->pengembangan_oleh),
		'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'kode_hasilpengecekan' => set_value('kode_hasilpengecekan', $row->kode_hasilpengecekan),
		'solusi' => set_value('solusi', $row->solusi),
		'kode_operator' => set_value('kode_operator', $row->kode_operator),
		'kode_status' => set_value('kode_status', $row->kode_status),
		'tanggal_selesai' => set_value('tanggal_selesai', $row->tanggal_selesai),
		'tanggal_respon' => set_value('tanggal_respon', $row->tanggal_respon),
	    );
            $this->template->load('template','keluhansimrs/tbl_tindaklanjutsimrs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs'));
        }
    }
    
    public function tindaklanjut_action() 
    {
        $this->_rules1();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_keluhansimrs', TRUE));
        } else {
            $data = array(
		'tanggal_keluhansimrs' => $this->input->post('tanggal_keluhansimrs',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_jp_simrs' => $this->input->post('kode_jp_simrs',TRUE),
		//'pengembangan_oleh' => $this->input->post('pengembangan_oleh',TRUE),
		'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_hasilpengecekan' => $this->input->post('kode_hasilpengecekan',TRUE),
		'solusi' => $this->input->post('solusi',TRUE),
		'kode_operator' => $this->input->post('kode_operator',TRUE),
		'kode_status' => $this->input->post('kode_status',TRUE),
		'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		'tanggal_respon' => $this->input->post('tanggal_respon',TRUE),
		//'tanggal_selesai' => date("Y-m-d H:i:s"),
	    );

            $this->Tbl_keluhansimrs_model->update($this->input->post('kode_keluhansimrs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhansimrs/selesai'));
        }
    }
	
	public function tindakanproses($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Proses',
                'action' => site_url('keluhansimrs/update_proses'),
		'kode_keluhansimrs' => set_value('kode_keluhansimrs', $row->kode_keluhansimrs),
		'tanggal_keluhansimrs' => set_value('tanggal_keluhansimrs', $row->tanggal_keluhansimrs),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		'kode_jp_simrs' => set_value('kode_jp_simrs', $row->kode_jp_simrs),
		'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'kode_hasilpengecekan' => set_value('kode_hasilpengecekan', $row->kode_hasilpengecekan),
		//'solusi' => set_value('solusi', $row->solusi),
		'kode_operator' => set_value('kode_operator', $row->kode_operator),
		'kode_status' => set_value('status', $row->kode_status),
		'tanggal_respon' => set_value('tanggal_respon', $row->tanggal_selesai),
		//'tanggal_selesai' => set_value('tanggal_selesai', $row->tanggal_selesai),
	    );
            $this->template->load('template','keluhansimrs/tbl_proses_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs'));
        }
    }
    
    public function update_proses() 
    {
        $this->_rules2();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_keluhansimrs', TRUE));
        } else {
            $data = array(
		'tanggal_keluhansimrs' => $this->input->post('tanggal_keluhansimrs',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_jp_simrs' => $this->input->post('kode_jp_simrs',TRUE),
		'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_hasilpengecekan' => $this->input->post('kode_hasilpengecekan',TRUE),
		//'solusi' => $this->input->post('solusi',TRUE),
		'kode_operator' => $this->input->post('kode_operator',TRUE),
		'kode_status' => $this->input->post('kode_status',TRUE),
		'tanggal_respon' => $this->input->post('tanggal_respon',TRUE),
		//'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		//'tanggal_selesai' => date("Y-m-d H:i:s"),
	    );

            $this->Tbl_keluhansimrs_model->update($this->input->post('kode_keluhansimrs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhansimrs/proses'));
        }
    }
	
	public function tindaklanjutedit($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Edit Tindaklanjut',
                'action' => site_url('keluhansimrs/tjedit_action'),
		'kode_keluhansimrs' => set_value('kode_keluhansimrs', $row->kode_keluhansimrs),
		'tanggal_keluhansimrs' => set_value('tanggal_keluhansimrs', $row->tanggal_keluhansimrs),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		'kode_jp_simrs' => set_value('kode_jp_simrs', $row->kode_jp_simrs),
		'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'kode_hasilpengecekan' => set_value('kode_hasilpengecekan', $row->kode_hasilpengecekan),
		'solusi' => set_value('solusi', $row->solusi),
		'kode_operator' => set_value('kode_operator', $row->kode_operator),
		'kode_status' => set_value('kode_status', $row->kode_status),
		'tanggal_selesai' => set_value('tanggal_selesai', $row->tanggal_selesai),
		'tanggal_respon' => set_value('tanggal_respon', $row->tanggal_respon),
		'kode_pelapor' => set_value('kode_pelapor', $row->kode_pelapor),
	    );
            $this->template->load('template','keluhansimrs/tbl_edittindakan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs'));
        }
    }
	
	public function tjedit_action() 
    {
        $this->_rules1();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_keluhansimrs', TRUE));
        } else {
            $data = array(
		'tanggal_keluhansimrs' => $this->input->post('tanggal_keluhansimrs',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_jp_simrs' => $this->input->post('kode_jp_simrs',TRUE),
		'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_hasilpengecekan' => $this->input->post('kode_hasilpengecekan',TRUE),
		'solusi' => $this->input->post('solusi',TRUE),
		'kode_operator' => $this->input->post('kode_operator',TRUE),
		'kode_status' => $this->input->post('kode_status',TRUE),
		'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		'tanggal_respon' => $this->input->post('tanggal_respon',TRUE),
		'kode_pelapor' => $this->input->post('kode_pelapor',TRUE),
	    );

            $this->Tbl_keluhansimrs_model->update($this->input->post('kode_keluhansimrs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhansimrs/selesai'));
        }
    }
	
    
    public function delete($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);

        if ($row) {
            $this->Tbl_keluhansimrs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keluhansimrs'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs'));
        }
    }
	
	public function cetakkeluhansimrs($id) 
    {
        $row = $this->Tbl_keluhansimrs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'keluhan_data' => $this->Tbl_keluhansimrs_model->join_all_data($id)
	    );
            //$this->template->load('', 'cetak/cetakservicereport', $data);
			$this->load->view('cetak/cetakkeluhansimrs',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhansimrs/selesai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal_keluhansimrs', 'tanggal keluhansimrs', 'trim');
	$this->form_validation->set_rules('kode_pelapor', 'kode_pelapor', 'trim');
	$this->form_validation->set_rules('unit_kerja', 'unit kerja', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('kode_jp_simrs', 'kode jp simrs', 'trim');


	$this->form_validation->set_rules('kode_keluhansimrs', 'kode_keluhansimrs', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	
	public function _rules1() 
    {
	$this->form_validation->set_rules('kode_kategori', 'kategori', 'trim');
	$this->form_validation->set_rules('kode_hasilpengecekan', 'pengecekan', 'trim');
	$this->form_validation->set_rules('solusi', 'solusi', 'trim');
	$this->form_validation->set_rules('kode_operator', 'kode_operator', 'trim');
	$this->form_validation->set_rules('status', 'status', 'trim');
	$this->form_validation->set_rules('tanggal_selesai', 'tglselesai', 'trim');
	$this->form_validation->set_rules('tanggal_keluhan', 'tglkeluhan', 'trim');
	
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	
	public function _rules2() 
    {
	$this->form_validation->set_rules('kode_kategori', 'kategori', 'trim');
	$this->form_validation->set_rules('kode_hasilpengecekan', 'pengecekan', 'trim');
	$this->form_validation->set_rules('kode_operator', 'kode_operator', 'trim');
	$this->form_validation->set_rules('status', 'status', 'trim');
	$this->form_validation->set_rules('tanggal_keluhan', 'tanggal_keluhan', 'trim');
	
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_keluhansimrs.xls";
        $judul = "tbl_keluhansimrs";
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
	xlsWriteLabel($tablehead, $kolomhead++, "ID Keluhan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Keluhan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pelapor");
	xlsWriteLabel($tablehead, $kolomhead++, "Unit Kerja");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Pekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tingkat");
	xlsWriteLabel($tablehead, $kolomhead++, "Pengembangan Oleh");
	xlsWriteLabel($tablehead, $kolomhead++, "Solusi");
	xlsWriteLabel($tablehead, $kolomhead++, "Operator");
    xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Selesai");

	foreach ($this->Tbl_keluhansimrs_model->selesai_keluhan() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->id_keluhansimrs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_keluhansimrs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->full_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->unit_kerja);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jp_simrs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_tingkatperbaikan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_hasilpengecekan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->solusi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_operator);
        xlsWriteLabel($tablebody, $kolombody++, $data->nama_status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_selesai);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
		header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_keluhansimrs.doc");
		header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
		header("Pragma: no-cache");
		header("Expires: 0");
        $data = array(
            'keluhansimrs_data' => $this->Tbl_keluhansimrs_model->selesai_keluhan(),
            'start' => 0
        );
        
        $this->load->view('keluhansimrs/tbl_keluhansimrs_doc',$data);
    }

}

/* End of file Keluhansimrs.php */
/* Location: ./application/controllers/Keluhansimrs.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-14 08:26:53 */
/* http://harviacode.com */