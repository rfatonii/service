<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="stylesheet" href="<?php echo base_url('libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>"/>

  </head>
  <body>
<div class="content-wrapper">
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">DATA PROSES KELUHAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
	<table class="table table-bordered">       
		<tr>
			<td colspan='2' width='200'><b><u>DATA RUANGAN</u></b></td>
		</tr>	
		<tr><td width='200'>Nama Ruangan <?php echo form_error('nama_ruangan') ?></td>
			<td><input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan" placeholder="isi nama ruangan" value="<?php echo $nama_ruangan; ?>" readonly /></td>
		</tr>
		<tr><td width='200'>Lokasi <?php echo form_error('lokasi') ?></td>
			<td><input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="isi lokasi (lantai 1,2,3,4,5)" value="<?php echo $lokasi; ?>" readonly /></td>
		</tr>
		<tr><td width='200'>Unit Kerja <?php echo form_error('unit_kerja') ?></td>
			<td><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="isi unit_kerja/bagian" value="<?php echo $unit_kerja; ?>" readonly /></td>
		</tr>
                <div class="form-group">
	                <tr><td>Tanggal Keluhan <?php echo form_error('tanggal_keluhan') ?></td>
                  	<td><div class="input-group">
					<?php
					$t = $tanggal_keluhan;
					?>
                    	<input type="datetime-local" class="form-control"  name="tanggal_keluhan" value="<?php echo date('Y-m-d\TH:i:s', strtotime($t)); ?>" />
                  	</div></td></tr><!--value="<?php //echo date('Y-m-d\TH:i:sP', $row['Time']); ?>"-->
                </div>
		
		<tr>
			<td colspan='2' width='200'><b><u>DATA ALAT</u></b></td>
			<td><input type="hidden" name="kode_keluhan" value="<?php echo $kode_keluhan; ?>" readonly /> </td>
		</tr>	
	    <tr><td width='200'>Jenis Inventaris <?php echo form_error('kode_jenisinventaris') ?> </td><td>
            <?php echo cmb_dinamis('kode_jenisinventaris', 'tbl_jenisinventaris', 'nama_jenisinventaris', 'kode_jenisinventaris', $kode_jenisinventaris) ?>
            </td>
		</tr>
		<tr><td width='200'>Merk/Type <?php echo form_error('merk') ?></td>
			<td><input type="text" class="form-control" name="merk" id="merk" placeholder="isi merk/type" value="<?php echo $merk; ?>" readonly /></td>
		</tr>
		<tr><td width='200'>Jenis Pekerjaan <?php echo form_error('kode_jenispekerjaan') ?></td><td>
            <?php echo cmb_dinamis('kode_jenispekerjaan', 'tbl_jenispekerjaan', 'nama_jenispekerjaan', 'kode_jenispekerjaan', $kode_jenispekerjaan) ?>
            </td>
		</tr>
		<tr><td width='200'>Deskripsi Permsalahan <?php echo form_error('uraian') ?></td>
			<td><input type="text" class="form-control" name="uraian" id="uraian" placeholder="isi uraian permasalahan" value="<?php echo $uraian; ?>" readonly /></td>
		</tr>
		<tr><td width='200'>Penyebab Permasalahan <?php echo form_error('kode_penyebabmasalah') ?></td><td>
            <?php echo cmb_dinamis('kode_penyebabmasalah', 'tbl_penyebabmasalah', 'nama_penyebabmasalah', 'kode_penyebabmasalah', $kode_penyebabmasalah) ?>
            </td>
		</tr>
		<tr><td width='200'>Tingkat <?php echo form_error('kode_tingkatperbaikan') ?></td><td>
            <?php echo cmb_dinamis('kode_tingkatperbaikan', 'tbl_tingkatperbaikan', 'nama_tingkatperbaikan', 'kode_tingkatperbaikan', $kode_tingkatperbaikan) ?>
            </td>
		</tr>
		
		<tr>
			<td colspan='2' width='200'><b><u>DATA TINDAK LANJUT DI ISI OLEH ADMIN</u></b></td>
		</tr>
		
                <div class="form-group">
	                <tr><td>Tanggal Respon <?php echo form_error('tanggal_respon') ?></td>
                  	<td><div class="input-group">
					<?php
					//$t = $tanggal_respon;
					date_default_timezone_set('Asia/Jakarta');  
					?>
                    	<!--<input type="datetime-local" class="form-control"  name="tanggal_respon" value="<?php //echo date('Y-m-d\TH:i:s', strtotime($t)); ?>" />-->
						<input type="datetime-local" class="form-control"  name="tanggal_respon" value="<?php echo date('Y-m-d\TH:i:s'); ?>" />
                  	</div></td></tr>
                </div>
		
		<tr><td width='200'>Kategori <?php echo form_error('kode_kategori') ?></td><td>
            <?php echo cmb_dinamis('kode_kategori', 'tbl_kategori', 'nama_kategori', 'kode_kategori', $kode_kategori) ?>
            </td>
		</tr>
		
		<tr><td width='200'>Hasil Pengecekan <?php echo form_error('kode_hasilpengecekan') ?></td><td>
            <?php echo cmb_dinamis('kode_hasilpengecekan', 'tbl_hasilpengecekan', 'nama_hasilpengecekan', 'kode_hasilpengecekan', $kode_hasilpengecekan) ?>
            </td>
		</tr>
		<tr><td width='200'>Penerima IT <?php echo form_error('kode_operator') ?></td>
			<td>
            <?php echo cmb_dinamis('kode_operator', 'tbl_operator', 'nama_operator', 'kode_operator', $kode_operator) ?>
            </td>
		</tr>

		<tr><td width='200'>Status <?php echo form_error('kode_status') ?></td>
			<td>
            <?php echo cmb_dinamis('kode_status', 'tbl_status', 'nama_status', 'kode_status', $kode_status) ?>
            </td>
		</tr>

		
		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
			<a href="<?php echo site_url('keluhan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td>
		</tr>
	</table></form></div>
</div>
</div>

<!-- Include file -->
<script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>css/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>/js/custom.js"></script>
	
    <script>
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd",
		todayHighlight: true,
		autoclose: true
    })
    </script>
  </body>
</html>
