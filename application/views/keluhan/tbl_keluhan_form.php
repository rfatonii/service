<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Include file bootstrap.min.css 
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php //echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>"/>-->
	
    <!-- Include library Bootstrap Datepicker 
    <link href="../../application/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="<?php echo base_url('libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>"/>




  </head>
  <body>
<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA KELUHAN</h3>
            </div>
        
		<form action="<?php echo $action; ?>" method="post">
	
		<table class='table table-bordered'> 
		
		<tr>
			<td colspan='2'><b><u>DATA RUANGAN</u></b></td>
		</tr>	
		
		        <div class="form-group">
	                <tr><td>Tanggal Keluhan <?php echo form_error('tanggal_keluhan') ?></td>
                  	<td><div class="input-group">
					<?php
					//$t = $tanggal_keluhan;
					date_default_timezone_set('Asia/Jakarta');
					?>
                    	<input type="datetime-local" class="form-control"  name="tanggal_keluhan" value="<?php echo date('Y-m-d\TH:i:s'); ?>" />
                    	<!--<input type="datetime-local" class="form-control"  name="tanggal_keluhan" value="<?php // echo date('Y-m-d\TH:i:s', strtotime($t)); ?>" />-->
                  	</div></td></tr>
                </div>
		
		
		<tr><td width='150'>Nama Ruangan <?php echo form_error('nama_ruangan') ?></td>
			<td width='500'><input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan" placeholder="isi nama ruangan" value="<?php echo $nama_ruangan; ?>" /></td>
		</tr>
		<tr><td width='150'>Lokasi <?php echo form_error('lokasi') ?></td>
			<td><input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="isi lokasi (lantai 1,2,3,4,5)" value="<?php echo $lokasi; ?>" /></td>
		</tr>
		<tr><td width='150'>Unit Kerja <?php echo form_error('unit_kerja') ?></td>
			<td><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="isi unit kerja/bagian" value="<?php echo $unit_kerja; ?>" /></td>
		</tr>
		<!--<tr><td width='150'>Pelapor <?php echo form_error('id_users') ?></td><td>
            <?php echo cmb_dinamis('kode_pelapor', 'tbl_user', 'full_name', 'id_users', $kode_pelapor) ?>
			</td>
		</tr>
		<tr><td width='150'>Tanggal <?php echo form_error('tanggal_keluhan') ?></td>
			<td><input type="text" class="form-control datepicker"  name="tanggal_keluhan" value="<?php echo $tanggal_keluhan; ?>" /></td>
		</tr>

		<tr><td width='150'>Tanggal <?php echo form_error('tanggal_keluhan') ?></td>
			<td width='50'><input type="datetime-local" class="form-control"  name="tanggal_keluhan" value="<?php echo $tanggal_keluhan; ?>"/></td>
		</tr>-->
		
                <div class="form-group">
	                <tr><td>Pelapor</td>
                  	<td><div class="input-group">
						<?php echo cmb_dinamis('kode_pelapor', 'tbl_user', 'full_name', 'id_users', $kode_pelapor) ?>
                  	</div></td></tr>
                </div>
		
		<tr>
			<td><b><u>DATA ALAT</u></b></td>
			<td><input type="hidden" name="kode_keluhan" value="<?php echo $kode_keluhan; ?>" /> </td>
		</tr>	
	   
	    <!--<tr><td width='150'>Jenis Inventaris <?php echo form_error('kode_jenisinventaris') ?></td>
			<td>
            <?php // echo cmb_dinamis('kode_jenisinventaris', 'tbl_jenisinventaris', 'nama_jenisinventaris', 'kode_jenisinventaris', $kode_jenisinventaris) ?>
            </td>
		</tr>-->
		
                <div class="form-group">
	                <tr><td>Jenis Inventaris <?php echo form_error('kode_jenisinventaris') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_jenisinventaris', 'tbl_jenisinventaris', 'nama_jenisinventaris', 'kode_jenisinventaris', $kode_jenisinventaris) ?>
					</div></td></tr>
                </div>
		
		<tr><td width='150'>Merk/Type <?php echo form_error('merk') ?></td>
			<td><input type="text" class="form-control" name="merk" id="merk" placeholder="isi merk/type" value="<?php echo $merk; ?>" /></td>
		</tr>
		
		<!--<tr><td width='150'>Jenis Pekerjaan <?php echo form_error('kode_jenispekerjaan') ?></td>
		<td>
            <?php// echo cmb_dinamis('kode_jenispekerjaan', 'tbl_jenispekerjaan', 'nama_jenispekerjaan', 'kode_jenispekerjaan', $kode_jenispekerjaan) ?>
            </td>
		</tr>-->
		
                <div class="form-group">
	                <tr><td>Jenis Pekerjaan <?php echo form_error('kode_jenispekerjaan') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_jenispekerjaan', 'tbl_jenispekerjaan', 'nama_jenispekerjaan', 'kode_jenispekerjaan', $kode_jenispekerjaan) ?>
					</div></td></tr>
                </div>
		
		<tr><td width='150'>Deskripsi Permsalahan <?php echo form_error('uraian') ?></td>
			<td><textarea cols="60" rows="3" class="form-control" id="uraian" name="uraian" placeholder="isi uraian permasalahan" style="margin-bottom:20px;"><?php echo $uraian; ?></textarea>
			<!--<input type="text" class="form-control" name="uraian" id="uraian" placeholder="isi uraian permasalahan" value="<?php echo $uraian; ?>" />--></td>
		</tr>
		<!--<tr><td width='150'>Kategori <?php //echo form_error('kode_kategori') ?></td><td>
            <?php //echo cmb_dinamis('kode_kategori', 'tbl_kategori', 'nama_kategori', 'kode_kategori', $kode_kategori) ?>
            </td>
		</tr>-->
		
		<!--<tr><td width='150'>Penyebab Permasalahan <?php echo form_error('kode_penyebabmasalah') ?></td><td>
            <?php echo cmb_dinamis('kode_penyebabmasalah', 'tbl_penyebabmasalah', 'nama_penyebabmasalah', 'kode_penyebabmasalah', $kode_penyebabmasalah) ?>
            </td>
		</tr>-->
		
                <div class="form-group">
	                <tr><td>Penyebab Permasalahan <?php echo form_error('kode_penyebabmasalah') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_penyebabmasalah', 'tbl_penyebabmasalah', 'nama_penyebabmasalah', 'kode_penyebabmasalah', $kode_penyebabmasalah) ?>
					</div></td></tr>
                </div>
		
		<!--<tr><td width='150'>Tingkat <?php echo form_error('kode_tingkatperbaikan') ?></td><td>
            <?php// echo cmb_dinamis('kode_tingkatperbaikan', 'tbl_tingkatperbaikan', 'nama_tingkatperbaikan', 'kode_tingkatperbaikan', $kode_tingkatperbaikan) ?>
            </td>
		</tr>-->
		
                <div class="form-group">
	                <tr><td>Tingkat Perbaikan<?php echo form_error('kode_tingkatperbaikan') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_tingkatperbaikan', 'tbl_tingkatperbaikan', 'nama_tingkatperbaikan', 'kode_tingkatperbaikan', $kode_tingkatperbaikan) ?>
					</div></td></tr>
                </div>
		
		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
			<a href="<?php echo site_url('keluhan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td>
		</tr>
	</table>
</div>
</form>        
</div>
</div>
</div>
    <!-- Include file jquery.min.js
    <script src="../../assets/js/jquery.min.js"></script> -->
	<script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
	
    <!-- Include file boootstrap.min.js
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="<?php echo base_url(); ?>css/js/bootstrap.min.js"></script>
	
    <!-- Include library Bootstrap Datepicker
    <script src="../../libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->
	<script src="<?php echo base_url(); ?>libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

	
    <script>
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd",
		todayHighlight: true,
		autoclose: true,
		locale: 'id'
    });
</script>
<script>
$(function(){
 $('.timepicker').timepicker({
       showInputs: false
    })
});
</script>
</body>

  </body>
</html>