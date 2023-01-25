<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keluhanuser extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_keluhanuser_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }
	
	

    public function index()
    {
		
		$data['semua_keluhanuser'] = $this->Tbl_keluhanuser_model->semua_keluhanuser();
		
        $this->template->load('template','keluhanuser/tbl_keluhanuser_list', $data);
    }

	/*public function proses()
    {

		$data['semua_keluhanuser'] = $this->Tbl_keluhanuser_model->process_keluhanuser();
		
        $this->template->load('template','keluhanuser/tbl_keluhanuser_list_process', $data);
    } 

	public function selesai()
    {
		$data['semua_keluhanuser'] = $this->Tbl_keluhanuser_model->selesai_keluhanuser();
		
        $this->template->load('template','keluhanuser/tbl_keluhanuser_list_selesai', $data);
    } */
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_keluhanuser_model->json();
    }
    


     public function read($id) 
    {
        $row = $this->Tbl_keluhanuser_model->get_by_id($id);
        if ($row) {
            $data = array(
		'keluhan_data' => $this->Tbl_keluhanuser_model->join_all_data($id),
		'kode_keluhan' => $row->kode_keluhan,
		'id_keluhan' => $row->id_keluhan,
		'tanggal_keluhan' => $row->tanggal_keluhan,
		'kode_pelapor' => $row->kode_pelapor,
		'kode_status' => $row->kode_status,
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
            $this->template->load('template','keluhanuser/tbl_keluhanuser_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhanuser'));
        }
    }
	
	public function cetak($id) 
    {
        $row = $this->Tbl_keluhanuser_model->get_by_id($id);
        if ($row) {
            $data = array(
		'keluhan_data' => $this->Tbl_keluhanuser_model->join_all_data($id),
		'kode_keluhan' => $row->kode_keluhan,
		'id_keluhan' => $row->id_keluhan,
		'tanggal_keluhan' => $row->tanggal_keluhan,
		'kode_pelapor' => $row->kode_pelapor,
		'kode_status' => $row->kode_status,
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
            //$this->template->load('', 'cetak/cetakservicereport', $data);
			$this->load->view('cetak/cetakservicereport',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhan'));
        }
    }

    public function create() 
    {
		date_default_timezone_set("Asia/Jakarta");
		
        $data = array(
            'button' => 'Create',
            'action' => site_url('keluhanuser/create_action'),
	    //'tanggal_keluhan' =>  date("d-m-Y H:i:s"),
	    'tanggal_keluhan' =>  set_value('tanggal_keluhan'),
	    'kode_keluhan' => set_value('kode_keluhan'),
	    'uraian' => set_value('uraian'),
	    'kode_jenisinventaris' => set_value('kode_jenisinventaris'),
	    'merk' => set_value('merk'),
	    'kode_jenispekerjaan' => set_value('kode_jenispekerjaan'),
	    //'kode_kategori' => set_value('kode_kategori'),
	    'kode_penyebabmasalah' => set_value('kode_penyebabmasalah'),
	    'nama_ruangan' => set_value('nama_ruangan'),
	    'lokasi' => set_value('lokasi'),
	    'unit_kerja' => set_value('unit_kerja'),
	    'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan'),
	    //'kode4' => set_value('kode4'),
	    //'kode5' => set_value('kode5'),
	    //'kode6' => set_value('kode6'),
	    //'kode7' => set_value('kode7'),
	    //'kode8' => set_value('kode8'),
	    //'kode9' => set_value('kode9'),
	);
        $this->template->load('template','keluhanuser/tbl_keluhanuser_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
		
		date_default_timezone_set("Asia/Jakarta");

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		//'tanggal_keluhan' =>  date("Y-m-d H:i:s"),
		'tanggal_keluhan' =>  $this->input->post('tanggal_keluhan',TRUE),
		'uraian' => $this->input->post('uraian',TRUE),
		'kode_jenisinventaris' => $this->input->post('kode_jenisinventaris',TRUE),
		'merk' => $this->input->post('merk',TRUE),
		'kode_jenispekerjaan' => $this->input->post('kode_jenispekerjaan',TRUE),
		//'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_penyebabmasalah' => $this->input->post('kode_penyebabmasalah',TRUE),
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_status' => 4,
		'id_keluhan' => mktime(date("H"),date("i"),date("s"),date("d"),date("m"),date("Y")),
		'kode_pelapor' => $this->session->userdata('id_users'),
		//'kode4' => $this->input->post('kode4',TRUE),
		//'kode5' => $this->input->post('kode5',TRUE),
		//'kode6' => $this->input->post('kode6',TRUE),
		//'kode7' => $this->input->post('kode7',TRUE),
		//'kode8' => $this->input->post('kode8',TRUE),
		//'kode9' => $this->input->post('kode9',TRUE),
	    );

            $this->Tbl_keluhanuser_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('keluhanuser'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_keluhanuser_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keluhanuser/update_action'),
		'kode_keluhan' => set_value('kode_keluhan', $row->kode_keluhan),
		'tanggal_keluhan' => set_value('tanggal_keluhan', $row->tanggal_keluhan),
		'uraian' => set_value('uraian', $row->uraian),
		'kode_jenisinventaris' => set_value('kode_jenisinventaris', $row->kode_jenisinventaris),
		'merk' => set_value('merk', $row->merk),
		'kode_jenispekerjaan' => set_value('kode_jenispekerjaan', $row->kode_jenispekerjaan),
		//'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'kode_penyebabmasalah' => set_value('kode_penyebabmasalah', $row->kode_penyebabmasalah),
		'nama_ruangan' => set_value('nama_ruangan', $row->nama_ruangan),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		//'kode4' => set_value('kode4', $row->lokasi),
		//'kode5' => set_value('kode5', $row->lokasi),
		//'kode6' => set_value('kode6', $row->lokasi),
		//'kode7' => set_value('kode7', $row->lokasi),
		//'kode8' => set_value('kode8', $row->lokasi),
		//'kode9' => set_value('kode9', $row->lokasi),
	    );
            $this->template->load('template','keluhanuser/tbl_keluhanuser_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhanuser'));
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
		'uraian' => $this->input->post('uraian',TRUE),
		'kode_jenisinventaris' => $this->input->post('kode_jenisinventaris',TRUE),
		'merk' => $this->input->post('merk',TRUE),
		'kode_jenispekerjaan' => $this->input->post('kode_jenispekerjaan',TRUE),
		//'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_penyebabmasalah' => $this->input->post('kode_penyebabmasalah',TRUE),
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		//'kode4' => $this->input->post('kode4',TRUE),
		//'kode5' => $this->input->post('kode5',TRUE),
		//'kode6' => $this->input->post('kode6',TRUE),
		//'kode7' => $this->input->post('kode7',TRUE),
		//'kode8' => $this->input->post('kode8',TRUE),
		//'kode9' => $this->input->post('kode9',TRUE),
	    );

            $this->Tbl_keluhanuser_model->update($this->input->post('kode_keluhan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhanuser'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_keluhanuser_model->get_by_id($id);

        if ($row) {
            $this->Tbl_keluhanuser_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keluhanuser'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhanuser'));
        }
    }
		
	public function tindaklanjut($id) 
    {
        $row = $this->Tbl_keluhanuser_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Tindaklanjut',
                'action' => site_url('keluhanuser/update_tindakan'),
		'kode_keluhan' => set_value('kode_keluhan', $row->kode_keluhan),
		'uraian' => set_value('uraian', $row->uraian),
		'kode_jenisinventaris' => set_value('kode_jenisinventaris', $row->kode_jenisinventaris),
		'merk' => set_value('merk', $row->merk),
		'kode_jenispekerjaan' => set_value('kode_jenispekerjaan', $row->kode_jenispekerjaan),
		'kode_penyebabmasalah' => set_value('kode_penyebabmasalah', $row->kode_penyebabmasalah),
		'nama_ruangan' => set_value('nama_ruangan', $row->nama_ruangan),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'unit_kerja' => set_value('unit_kerja', $row->unit_kerja),
		'kode_kategori' => set_value('kode_kategori', $row->kode_kategori),
		'kode_hasilpengecekan' => set_value('kode_hasilpengecekan', $row->kode_hasilpengecekan),
		'tindaklanjut' => set_value('tindaklanjut', $row->tindaklanjut),
		'hasil_kesimpulan' => set_value('hasil_kesimpulan', $row->hasil_kesimpulan),
		'kebutuhan_material' => set_value('kebutuhan_material', $row->kebutuhan_material),
		'kode_tingkatperbaikan' => set_value('kode_tingkatperbaikan', $row->kode_tingkatperbaikan),
		'kode_operator' => set_value('kode_operator', $row->kode_operator),
		//'kode4' => set_value('kode4', $row->lokasi),
		//'kode5' => set_value('kode5', $row->lokasi),
		//'kode6' => set_value('kode6', $row->lokasi),
		//'kode7' => set_value('kode7', $row->lokasi),
		//'kode8' => set_value('kode8', $row->lokasi),
		//'kode9' => set_value('kode9', $row->lokasi),
	    );
            $this->template->load('template','keluhanuser/tbl_tindaklanjut_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluhanuser'));
        }
    }
	
	public function update_tindakan() 
    {
        $this->_rules1();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_keluhan', TRUE));
        } else {
            $data = array(
		'uraian' => $this->input->post('uraian',TRUE),
		'kode_jenisinventaris' => $this->input->post('kode_jenisinventaris',TRUE),
		'merk' => $this->input->post('merk',TRUE),
		'kode_jenispekerjaan' => $this->input->post('kode_jenispekerjaan',TRUE),
		'kode_penyebabmasalah' => $this->input->post('kode_penyebabmasalah',TRUE),
		'nama_ruangan' => $this->input->post('nama_ruangan',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'unit_kerja' => $this->input->post('unit_kerja',TRUE),
		'kode_kategori' => $this->input->post('kode_kategori',TRUE),
		'kode_hasilpengecekan' => $this->input->post('kode_hasilpengecekan',TRUE),
		'tindaklanjut' => $this->input->post('tindaklanjut',TRUE),
		'hasil_kesimpulan' => $this->input->post('hasil_kesimpulan',TRUE),
		'kebutuhan_material' => $this->input->post('kebutuhan_material',TRUE),
		'kode_tingkatperbaikan' => $this->input->post('kode_tingkatperbaikan',TRUE),
		'kode_operator' => $this->input->post('kode_operator',TRUE),
		//'status' => 4,
		'tanggal_selesai' =>  date("Y-m-d H:i:s"),
		//'kode4' => $this->input->post('kode4',TRUE),
		//'kode5' => $this->input->post('kode5',TRUE),
		//'kode6' => $this->input->post('kode6',TRUE),
		//'kode7' => $this->input->post('kode7',TRUE),
		//'kode8' => $this->input->post('kode8',TRUE),
		//'kode9' => $this->input->post('kode9',TRUE),
	    );

            $this->Tbl_keluhanuser_model->update($this->input->post('kode_keluhan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluhanuser'));
        }
    }
	

    public function _rules() 
    {
	$this->form_validation->set_rules('uraian', 'nama keluhanuser', 'trim|required');

	$this->form_validation->set_rules('kode_keluhan', 'kode_keluhan', 'trim');
	$this->form_validation->set_rules('kode_jenisinventaris', 'kode_jenisinventaris', 'trim|required');
	$this->form_validation->set_rules('kode_penyebabmasalah', 'kode_penyebabmasalah', 'trim|required');
	$this->form_validation->set_rules('merk', 'merk', 'trim|required');
	$this->form_validation->set_rules('kode_jenispekerjaan', 'kode_jenispekerjaan', 'trim|required');
	$this->form_validation->set_rules('kode_penyebabmasalah', 'kode_penyebabmasalah', 'trim|required');
	$this->form_validation->set_rules('nama_ruangan', 'nama_ruangan', 'trim|required');
	$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
	$this->form_validation->set_rules('unit_kerja', 'unit_kerja', 'trim|required');
    }
	
	public function _rules1() 
    {
	$this->form_validation->set_rules('kode_kategori', 'kode_kategori', 'trim|required');
	$this->form_validation->set_rules('kode_hasilpengecekan', 'kode_hasilpengecekan', 'trim|required');
	$this->form_validation->set_rules('tindaklanjut', 'tindaklanjut', 'trim|required');
	$this->form_validation->set_rules('hasil_kesimpulan', 'hasil_kesimpulan', 'trim|required');
	$this->form_validation->set_rules('kebutuhan_material', 'kebutuhan_material', 'trim|required');
	$this->form_validation->set_rules('kode_tingkatperbaikan', 'kode_tingkatperbaikan', 'trim|required');
	$this->form_validation->set_rules('kode_operator', 'kode_operator', 'trim|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_keluhanuser.xls";
        $judul = "tbl_keluhanuser";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal keluhanuser");
	xlsWriteLabel($tablehead, $kolomhead++, "ID keluhanuser");
	xlsWriteLabel($tablehead, $kolomhead++, "Pelapor");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Ruangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Inventaris");
	xlsWriteLabel($tablehead, $kolomhead++, "Lokasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Unit Kerja");
	xlsWriteLabel($tablehead, $kolomhead++, "Merk");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Pekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Uraian");
	xlsWriteLabel($tablehead, $kolomhead++, "Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Penyebab Permasalahan");
	xlsWriteLabel($tablehead, $kolomhead++, "Hasil Pengecekan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kebutuhan Material");
	xlsWriteLabel($tablehead, $kolomhead++, "Tindakan yang Dilakukan");
	xlsWriteLabel($tablehead, $kolomhead++, "Hasil Kesimpulan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tingkat Perbaikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Operator");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Selesai");

	foreach ($this->Tbl_keluhanuser_model->semua_join_data() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_keluhan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_keluhan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->full_name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_ruangan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jenisinventaris);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lokasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->unit_kerja);
	    xlsWriteLabel($tablebody, $kolombody++, $data->merk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jenispekerjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uraian);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_kategori);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_penyebabmasalah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_hasilpengecekan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kebutuhan_material);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tindaklanjut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hasil_kesimpulan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_tingkatperbaikan);
		xlsWriteLabel($tablebody, $kolombody++, $data->nama_operator);
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
        header("Content-Disposition: attachment;Filename=tbl_keluhanuser.doc");

        $data = array(
            'keluhanuser_data' => $this->Tbl_keluhanuser_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('keluhanuser/tbl_keluhanuser_doc',$data);
    }

}

/* End of file keluhanuser.php */
/* Location: ./application/controllers/keluhanuser.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-30 19:41:15 */
/* http://harviacode.com */