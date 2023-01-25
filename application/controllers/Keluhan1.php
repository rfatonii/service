<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keluhan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_keluhan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','keluhan/tbl_keluhan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_keluhan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_keluhan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'keluhan_data' => $this->Tbl_keluhan_model->semua_join_data(),
		'kode_keluhan' => $row->kode_keluhan,
		'id_keluhan' => $row->id_keluhan,
		'tanggal_keluhan' => $row->tanggal_keluhan,
		'kode_pelapor' => $row->kode_pelapor,
		'status' => $row->status,
		'kode_operator' => $row->kode_operator,
		'tanggal_selesai' => $row->tanggal_selesai,
		'nama_ruangan' => $row->nama_ruangan,
		'kode_jenisinventaris' => $row->kode_jenisinventaris,
		'lokasi' => $row->lokasi,
		'unit_kerja' => $row->unit_kerja,
		'merk' => $row->merk,
		'kode_jenispekerjaan' => $row->kode_jenispekerjaan,
		'uraian' => $row->uraian,
		'kode_kategori' => $row->kode_kategori,
		'kode_penyebabmasalah' => $row->kode_penyebabmasalah,
		'kode_hasilpengecekan' => $row->kode_hasilpengecekan,
		'kebutuhan_material' => $row->kebutuhan_material,
		'tindaklanjut' => $row->tindaklanjut,
		'hasil_kesimpulan' => $row->hasil_kesimpulan,
		'kode_tingkatperbaikan' => $row->kode_tingkatperbaikan,
		//'full_name' => $row->full_name,
	    );
            $this->template->load('template','keluhan/tbl_keluhan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keluhan/create_action'),
	    'kode_keluhan' => set_value('kode_keluhan'),
	    'id_keluhan' => set_value('id_keluhan'),
	    'tanggal_keluhan' => set_value('tanggal_keluhan'),
	    'kode_pelapor' => set_value('kode_pelapor'),
	    'status' => set_value('status'),
	    'kode_operator' => set_value('kode_operator'),
	    'tanggal_selesai' => set_value('tanggal_selesai'),
	    'nama_ruangan' => set_value('nama_ruangan'),
	    'kode_jenisinventaris' => set_value('kode_jenisinventaris'),
	    'lokasi' => set_value('lokasi'),
	    'unit_kerja' => set_value('unit_kerja'),
	    'merk' => set_value('merk'),
	    'kode_jenispekerjaan' => set_value('kode_jenispekerjaan'),
	    'uraian' => set_value('uraian'),
	    'kode_kategori' => set_value('kode_kategori'),
	    'kode_penyebabmasalah' => set_value('kode_penyebabmasalah'),
	    'kode_hasilpengecekan' => set_value('kode_hasilpengecekan'),
	    'kebutuhan_material' => set_value('kebutuhan_material'),
	    'tindaklanjut' => set_value('tindaklanjut'),
	    'hasil_kesimpulan' => set_value('hasil_kesimpulan'),
	    'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan'),
	);
        $this->template->load('template','keluhan/tbl_keluhan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal_keluhan' => $this->input->post('tanggal_keluhan',TRUE),
		'kode_pelapor' => $this->input->post('kode_pelapor',TRUE),
		'status' => $this->input->post('status',TRUE),
		'kode_operator' => $this->input->post('kode_operator',TRUE),
		'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
		'kode_jenisinventaris' => $this->input->post('kode_jenisinventaris',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'merk' => $this->input->post('merk',TRUE),
		'kode_jenispekerjaan' => $this->input->post('kode_jenispekerjaan',TRUE),
		'uraian' => $this->input->post('uraian',TRUE),
		'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_penyebabmasalah' => $this->input->post('kode_penyebabmasalah',TRUE),
		'kode_hasilpengecekan' => $this->input->post('kode_hasilpengecekan',TRUE),
		'kebutuhan_material' => $this->input->post('kebutuhan_material',TRUE),
		'tindaklanjut' => $this->input->post('tindaklanjut',TRUE),
		'hasil_kesimpulan' => $this->input->post('hasil_kesimpulan',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
	    );

            $this->Tbl_keluhan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('keluhan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_keluhan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keluhan/update_action'),
		'kode_keluhan' => set_value('kode_keluhan', $row->kode_keluhan),
		'id_keluhan' => set_value('id_keluhan', $row->id_keluhan),
		'tanggal_keluhan' => set_value('tanggal_keluhan', $row->tanggal_keluhan),
		'kode_pelapor' => set_value('kode_pelapor', $row->kode_pelapor),
		'status' => set_value('status', $row->status),
		'kode_operator' => set_value('kode_operator', $row->kode_operator),
		'tanggal_selesai' => set_value('tanggal_selesai', $row->tanggal_selesai),
		'nama_ruangan' => set_value('nama_ruangan', $row->nama_ruangan),
		'kode_jenisinventaris' => set_value('kode_jenisinventaris', $row->kode_jenisinventaris),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'merk' => set_value('merk', $row->merk),
		'kode_jenispekerjaan' => set_value('kode_jenispekerjaan', $row->kode_jenispekerjaan),
		'uraian' => set_value('uraian', $row->uraian),
		'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'kode_penyebabmasalah' => set_value('kode_penyebabmasalah', $row->kode_penyebabmasalah),
		'kode_hasilpengecekan' => set_value('kode_hasilpengecekan', $row->kode_hasilpengecekan),
		'kebutuhan_material' => set_value('kebutuhan_material', $row->kebutuhan_material),
		'tindaklanjut' => set_value('tindaklanjut', $row->tindaklanjut),
		'hasil_kesimpulan' => set_value('hasil_kesimpulan', $row->hasil_kesimpulan),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
	    );
            $this->template->load('template','keluhan/tbl_keluhan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_keluhan', TRUE));
        } else {
            $data = array(
		'tanggal_keluhan' => $this->input->post('tanggal_keluhan',TRUE),
		'kode_pelapor' => $this->input->post('kode_pelapor',TRUE),
		'status' => $this->input->post('status',TRUE),
		'kode_operator' => $this->input->post('kode_operator',TRUE),
		'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
		'kode_jenisinventaris' => $this->input->post('kode_jenisinventaris',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'merk' => $this->input->post('merk',TRUE),
		'kode_jenispekerjaan' => $this->input->post('kode_jenispekerjaan',TRUE),
		'uraian' => $this->input->post('uraian',TRUE),
		'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_penyebabmasalah' => $this->input->post('kode_penyebabmasalah',TRUE),
		'kode_hasilpengecekan' => $this->input->post('kode_hasilpengecekan',TRUE),
		'kebutuhan_material' => $this->input->post('kebutuhan_material',TRUE),
		'tindaklanjut' => $this->input->post('tindaklanjut',TRUE),
		'hasil_kesimpulan' => $this->input->post('hasil_kesimpulan',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
	    );

            $this->Tbl_keluhan_model->update($this->input->post('kode_keluhan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_keluhan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_keluhan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keluhan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal_keluhan', 'tanggal keluhan', 'trim|required');
	$this->form_validation->set_rules('kode_pelapor', 'kode pelapor', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('kode_operator', 'kode operator', 'trim|required');
	$this->form_validation->set_rules('tanggal_selesai', 'tanggal selesai', 'trim|required');
	$this->form_validation->set_rules('nama_ruangan', 'nama ruangan', 'trim|required');
	$this->form_validation->set_rules('kode_jenisinventaris', 'kode jenisinventaris', 'trim|required');
	$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
	$this->form_validation->set_rules('unit_kerja', 'unit kerja', 'trim|required');
	$this->form_validation->set_rules('merk', 'merk', 'trim|required');
	$this->form_validation->set_rules('kode_jenispekerjaan', 'kode jenispekerjaan', 'trim|required');
	$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
	$this->form_validation->set_rules('kode_kategori', 'kode kategori', 'trim|required');
	$this->form_validation->set_rules('kode_penyebabmasalah', 'kode penyebabmasalah', 'trim|required');
	$this->form_validation->set_rules('kode_hasilpengecekan', 'kode hasilpengecekan', 'trim|required');
	$this->form_validation->set_rules('kebutuhan_material', 'kebutuhan material', 'trim|required');
	$this->form_validation->set_rules('tindaklanjut', 'tindaklanjut', 'trim|required');
	$this->form_validation->set_rules('hasil_kesimpulan', 'hasil kesimpulan', 'trim|required');
	$this->form_validation->set_rules('kode_tingkatperbaikan', 'kode tingkatperbaikan', 'trim|required');

	$this->form_validation->set_rules('kode_keluhan', 'kode_keluhan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_keluhan.xls";
        $judul = "tbl_keluhan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Keluhan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Pelapor");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Operator");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Selesai");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ruangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Jenisinventaris");
	xlsWriteLabel($tablehead, $kolomhead++, "Lokasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Unit Kerja");
	xlsWriteLabel($tablehead, $kolomhead++, "Merk");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Jenispekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Uraian");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Penyebabmasalah");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Hasilpengecekan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kebutuhan Material");
	xlsWriteLabel($tablehead, $kolomhead++, "Tindaklanjut");
	xlsWriteLabel($tablehead, $kolomhead++, "Hasil Kesimpulan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Tingkatperbaikan");

	foreach ($this->Tbl_keluhan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_keluhan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_pelapor);
	    xlsWriteNumber($tablebody, $kolombody++, $data->status);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_operator);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_selesai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ruangan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_jenisinventaris);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lokasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->unit_kerja);
	    xlsWriteLabel($tablebody, $kolombody++, $data->merk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_jenispekerjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uraian);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_kategori);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_penyebabmasalah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_hasilpengecekan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kebutuhan_material);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tindaklanjut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hasil_kesimpulan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kode_tingkatperbaikan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_keluhan.doc");

        $data = array(
            'keluhan_data' => $this->Tbl_keluhan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('keluhan/tbl_keluhan_doc',$data);
    }

}

/* End of file Keluhan.php */
/* Location: ./application/controllers/Keluhan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-13 08:09:09 */
/* http://harviacode.com */