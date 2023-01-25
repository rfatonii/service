<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_JENISINVENTARIS</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Jenisinventaris <?php echo form_error('nama_jenisinventaris') ?></td><td><input type="text" class="form-control" name="nama_jenisinventaris" id="nama_jenisinventaris" placeholder="Nama Jenisinventaris" value="<?php echo $nama_jenisinventaris; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_jenisinventaris" value="<?php echo $kode_jenisinventaris; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('jenisinventaris') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>