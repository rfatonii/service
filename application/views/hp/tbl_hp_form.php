<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_HP</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class="table table-bordered">        

	    <tr><td width='200'>Nama Hp <?php echo form_error('nama_hp') ?></td><td><input type="text" class="form-control" name="nama_hp" id="nama_hp" placeholder="Nama Hp" value="<?php echo $nama_hp; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_hp" value="<?php echo $kode_hp; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('hp') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>