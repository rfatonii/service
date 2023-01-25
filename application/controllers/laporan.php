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
		$data['semua_keluhan'] = $this->Tbl_keluhan_model->semua_keluhan();
		
        $this->template->load('template','laporan/cetaksr', $data);
    }
	
	public function create()
    {
        $this->load->view('add_order');
    }
	
    public function store()
    {
        $product = $this->input->post('product');
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $total = $this->input->post('total');
        $data = [
            'product' => $product,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'total' => $total
        ];
        $simpan = $this->order_model->insert("orders", $data);
        if($simpan){
            echo '<script>alert("Berhasil menambah data order");window.location.href="'.base_url('index.php/order').'";</script>';
        }
    }
 
    public function form_export()
    {
        $this->load->view('form_export');
    }
 
    public function export() {
        $tgl_awal = date('Y-m-d', strtotime($this->input->post('tanggal_awal')));
        $tgl_akhir = date('Y-m-d', strtotime($this->input->post('tanggal_akhir')));
        $orders = $this->order_model->get_all_with_date($tgl_awal, $tgl_akhir);
        $tanggal = date('d-m-Y');
 
        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('', 'B', 20);
        $pdf->Cell(115, 0, "Laporan Order - ".$tanggal, 0, 1, 'L');
        $pdf->Cell(115, 0, "Tanggal Awal: ".date('d-m-Y', strtotime($this->input->post('tanggal_awal'))), 0, 1, 'L');
        $pdf->Cell(115, 0, "Tanggal Akhir: ".date('d-m-Y', strtotime($this->input->post('tanggal_akhir'))), 0, 1, 'L');
        $pdf->SetAutoPageBreak(true, 0);
         
        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(10, 8, "No", 1, 0, 'C');
        $pdf->Cell(55, 8, "Produk", 1, 0, 'C');
        $pdf->Cell(35, 8, "Tanggal", 1, 0, 'C');
        $pdf->Cell(35, 8, "Jumlah", 1, 0, 'C');
        $pdf->Cell(50, 8, "Total", 1, 1, 'C');
        $pdf->SetFont('', '', 12);
 
        foreach($orders->result_array() as $k => $order) {
            $this->addRow($pdf, $k+1, $order);
        }
 
        $tanggal = date('d-m-Y');
        $pdf->Output('Laporan Order - '.$tanggal.'.pdf'); 
    }
 
    private function addRow($pdf, $no, $order) {
 
        $pdf->Cell(10, 8, $no, 1, 0, 'C');
        $pdf->Cell(55, 8, $order['product'], 1, 0, '');
        $pdf->Cell(35, 8, date('d-m-Y', strtotime($order['tanggal'])), 1, 0, 'C');
        $pdf->Cell(35, 8, $order['jumlah'], 1, 0, 'C');
        $pdf->Cell(50, 8, "Rp. ".number_format($order['total'], 2, ',' , '.'), 1, 1, 'L');
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
	xlsWriteLabel($tablehead, $kolomhead++, "ID Keluhan");
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

	foreach ($this->Tbl_keluhan_model->semua_join_data() as $data) {
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
        header("Content-Disposition: attachment;Filename=tbl_keluhan.doc");

        $data = array(
            'keluhan_data' => $this->Tbl_keluhan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('keluhan/tbl_keluhan_doc',$data);
    }

}

/* End of file Keluhan.php */
/* Location: ./application/controllers/keluhan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-30 19:41:15 */
/* http://harviacode.com */