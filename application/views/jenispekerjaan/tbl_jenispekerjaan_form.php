<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_JENISPEKERJAAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Jenispekerjaan <?php echo form_error('nama_jenispekerjaan') ?></td><td><input type="text" class="form-control" name="nama_jenispekerjaan" id="nama_jenispekerjaan" placeholder="Nama Jenispekerjaan" value="<?php echo $nama_jenispekerjaan; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_jenispekerjaan" value="<?php echo $kode_jenispekerjaan; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('jenispekerjaan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>