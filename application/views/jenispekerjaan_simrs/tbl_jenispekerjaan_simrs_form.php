<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_JENISPEKERJAAN_SIMRS</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class="table table-bordered">        

	    <tr><td width='200'>Nama Jp Simrs <?php echo form_error('nama_jp_simrs') ?></td><td><input type="text" class="form-control" name="nama_jp_simrs" id="nama_jp_simrs" placeholder="Nama Jp Simrs" value="<?php echo $nama_jp_simrs; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_jp_simrs" value="<?php echo $kode_jp_simrs; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('jenispekerjaan_simrs') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>