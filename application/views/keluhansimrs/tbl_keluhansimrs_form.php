<?php
// Cek role
if($this->session->userdata('id_user_level') == '1'){ // Jika role-nya admin
    ?>
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
		
		<div class="form-group">
	                <tr><td>Tanggal Keluhan <?php echo form_error('tanggal_keluhansimrs') ?></td>
                  	<td><div class="input-group">
					<?php
					//$t = $tanggal_keluhansimrs;
					date_default_timezone_set('Asia/Jakarta');  
					//$date = date('Y-m-d\TH:i:s', time());
					?>
                    	<input type="datetime-local" class="form-control"  name="tanggal_keluhansimrs" value="<?php echo date('Y-m-d\TH:i:s'); ?>" />
                  	</div></td></tr>
        </div>

        
		<tr>	<td width='200'>Unit Kerja <?php echo form_error('unit_kerja') ?></td>
				<td><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Unit Kerja" value="<?php echo $unit_kerja; ?>" /></td>
		</tr>
	    <!--<tr><td width='200'>Jenis Pekerjaan <?php echo form_error('kode_jp_simrs') ?></td>
			<td><?php echo cmb_dinamis('kode_jp_simrs', 'tbl_jenispekerjaan_simrs', 'nama_jp_simrs', 'kode_jp_simrs', $kode_jp_simrs) ?>
            </td>
		</tr>-->
		
		<div class="form-group">
	        <tr><td>Pelapor</td>
            <td><div class="input-group">
				<?php echo cmb_dinamis('kode_pelapor', 'tbl_user', 'full_name', 'id_users', $kode_pelapor) ?>
            </div></td></tr>
        </div>
		
		<div class="form-group">
	                <tr><td>Jenis Pekerjaan <?php echo form_error('kode_jp_simrs') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_jp_simrs', 'tbl_jenispekerjaan_simrs', 'nama_jp_simrs', 'kode_jp_simrs', $kode_jp_simrs) ?>
					</div></td></tr>
        </div>
		
		<!--<tr><td width='200'>Tanggal Keluhan <?php echo form_error('tanggal_keluhansimrs') ?></td>
			<td><input type="text" class="form-control datepicker"  name="tanggal_keluhansimrs" value="<?php echo $tanggal_keluhansimrs; ?>" /></td>
		</tr>-->
		
		<tr><td width='200'>Deskripsi <?php echo form_error('deskripsi') ?></td>
			<td>
				<!--<input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" />-->
				<textarea cols="60" rows="3" class="form-control" id="deskripsi" name="deskripsi" placeholder="isi deskripsi / keluhan" style="margin-bottom:20px;"><?php echo $deskripsi; ?></textarea>
			</td>
		</tr>
		<div class="form-group">
	                <tr><td>Tingkat Perbaikan <?php echo form_error('kode_tingkatperbaikan') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_tingkatperbaikan', 'tbl_tingkatperbaikan', 'nama_tingkatperbaikan', 'kode_tingkatperbaikan', $kode_tingkatperbaikan) ?>
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
<?php
} // Jika role-nya admin
?>

<?php
// Cek role
if($this->session->userdata('id_user_level') != '1'){ // Jika role-nya user
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url('libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>"/>

  </head>
  <body>

<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA KELUHAN SIM RS KHANZA</h3>
            </div>
 
		<form action="<?php echo $action2; ?>" method="post">
		
		<table class="table table-bordered">
		
		<div class="form-group">
	                <tr><td>Tanggal Keluhan <?php echo form_error('tanggal_keluhansimrs') ?></td>
                  	<td><div class="input-group">
					<?php
					date_default_timezone_set('Asia/Jakarta');  
					?>
                    	<input type="datetime-local" class="form-control"  name="tanggal_keluhansimrs" value="<?php echo date('Y-m-d\TH:i:s'); ?>" />
                  	</div></td></tr>
        </div>

        
		<tr>	<td width='200'>Unit Kerja <?php echo form_error('unit_kerja') ?></td>
				<td><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Unit Kerja" value="<?php echo $unit_kerja; ?>" /></td>
		</tr>
		
		<div class="form-group">
	                <tr><td>Jenis Pekerjaan <?php echo form_error('kode_jp_simrs') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_jp_simrs', 'tbl_jenispekerjaan_simrs', 'nama_jp_simrs', 'kode_jp_simrs', $kode_jp_simrs) ?>
					</div></td></tr>
        </div>
		
		<tr><td width='200'>Deskripsi <?php echo form_error('deskripsi') ?></td>
			<td>
				<textarea cols="60" rows="3" class="form-control" id="deskripsi" name="deskripsi" placeholder="isi deskripsi / keluhan" style="margin-bottom:20px;"><?php echo $deskripsi; ?></textarea>
			</td>
		</tr>
		<div class="form-group">
	                <tr><td>Tingkat Perbaikan <?php echo form_error('kode_tingkatperbaikan') ?></td>
                  	<td><div class="input-group">
					<?php echo cmb_dinamis('kode_tingkatperbaikan', 'tbl_tingkatperbaikan', 'nama_tingkatperbaikan', 'kode_tingkatperbaikan', $kode_tingkatperbaikan) ?>
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

<?php
} // Jika role-nya user
?> 