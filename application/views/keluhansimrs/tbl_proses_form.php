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
                <h3 class="box-title">INPUT DATA KELUHAN SIM RS KHANZA</h3>
            </div>
 
		<form action="<?php echo $action; ?>" method="post">
		
		<table class="table table-bordered">        
		
		<tr>	<td width='200'>Unit Kerja <?php echo form_error('unit_kerja') ?></td>
				<td><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Unit Kerja" value="<?php echo $unit_kerja; ?>" /></td>
		</tr>
		
		<tr><td width='200'>Jenis Pekerjaan <?php echo form_error('kode_jp_simrs') ?></td>
			<td><?php echo cmb_dinamis('kode_jp_simrs', 'tbl_jenispekerjaan_simrs', 'nama_jp_simrs', 'kode_jp_simrs', $kode_jp_simrs) ?>
            </td>
		</tr>
		<!--<tr><td width='200'>Tanggal Keluhan <?php// echo form_error('tanggal_keluhansimrs') ?></td>
			<td><input type="text" disabled class="form-control datepicker"  name="tanggal_keluhansimrs" value="<?php// echo $tanggal_keluhansimrs; ?>" /></td>
			<input type="hidden" class="form-control datepicker"  name="tanggal_keluhansimrs" value="<?php// echo $tanggal_keluhansimrs; ?>" />
		</tr>-->
				<div class="form-group">
	                <tr><td>Tanggal Keluhan <?php echo form_error('tanggal_keluhansimrs') ?></td>
                  	<td><div class="input-group">
					<?php
					$t = $tanggal_keluhansimrs;
					?>
                    	<input type="datetime-local" class="form-control"  name="tanggal_keluhansimrs" value="<?php echo date('Y-m-d\TH:i:s', strtotime($t)); ?>" />
                  	</div></td></tr><!--value="<?php //echo date('Y-m-d\TH:i:sP', $row['Time']); ?>"-->
                </div>
		<tr>
			<td width='200'>Deskripsi <?php echo form_error('deskripsi') ?></td>
			<td><input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" readonly /></td>
		</tr>
		
		<tr><td width='200'>Tingkat <?php echo form_error('kode_tingkatperbaikan') ?></td><td>
            <?php echo cmb_dinamis('kode_tingkatperbaikan', 'tbl_tingkatperbaikan', 'nama_tingkatperbaikan', 'kode_tingkatperbaikan', $kode_tingkatperbaikan) ?>
            </td>
		</tr>
		<tr>
			<td colspan='2' width='200'><b><u>DATA TINDAK LANJUT DI ISI OLEH ADMIN</u></b></td>
		</tr>
		<tr><td width='200'>Kategori <?php echo form_error('kode_kategori') ?></td><td>
            <?php echo cmb_dinamis('kode_kategori', 'tbl_kategori', 'nama_kategori', 'kode_kategori', $kode_kategori) ?>
            </td>
		</tr>
		<tr><td width='200'>Hasil Pengerjaan <?php echo form_error('kode_hasilpengecekan') ?></td>
			<td><?php echo cmb_dinamis('kode_hasilpengecekan', 'tbl_hasilpengecekan', 'nama_hasilpengecekan', 'kode_hasilpengecekan', $kode_hasilpengecekan) ?>
            </td>
		</tr>
		<!--<tr>
			<td width='200'>Solusi / Tindakan yang Dilakukan <?php echo form_error('solusi') ?></td>
			<td><textarea cols="60" rows="3" class="form-control" id="solusi" name="solusi" placeholder="isi Solusi / Tindakan yang Dilakukan" style="margin-bottom:20px;"><?php echo $solusi; ?></textarea>
				<!--<input type="text" class="form-control" name="solusi" id="solusi" placeholder="isi Solusi / Tindakan yang Dilakukan" value="<?php echo $solusi; ?>" />
			</td>
		</tr>-->
		<tr><td width='200'>Penerima IT <?php echo form_error('kode_operator') ?></td><td>
            <?php echo cmb_dinamis('kode_operator', 'tbl_operator', 'nama_operator', 'kode_operator', $kode_operator) ?>
            </td>
		</tr>
		<tr><td width='200'>Status <?php echo form_error('kode_status') ?></td>
			<td>
            <?php echo cmb_dinamis('kode_status', 'tbl_status', 'nama_status', 'kode_status', $kode_status) ?>
            </td>
		</tr>
		
		<!--<tr><td width='200'> Status <?php echo form_error('status') ?></td><td>
				<select id="status" class="form-control" name="status" class="chosen-select no-search-select">
  					<option value="1">Proses</option>
  					<option value="2">Selesai</option>
 				</select>					
			</td>
		</tr>-->
		<!--<tr><td width='200'>Tanggal Selesai <?php// echo form_error('tanggal_selesai') ?></td>
			<td><input type="text" class="form-control datepicker"  name="tanggal_selesai" value="<?php echo $tanggal_selesai; ?>" /></td>
		</tr>-->
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
		<tr><td></td>
			<td><input type="hidden" name="kode_keluhansimrs" value="<?php echo $kode_keluhansimrs; ?>" /> 
			<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
			<a href="<?php echo site_url('keluhansimrs') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td>
		</tr>
		</table>
		</form>
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