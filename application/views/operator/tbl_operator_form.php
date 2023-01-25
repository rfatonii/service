<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_OPERATOR</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Operator <?php echo form_error('nama_operator') ?></td><td><input type="text" class="form-control" name="nama_operator" id="nama_operator" placeholder="Nama Operator" value="<?php echo $nama_operator; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_operator" value="<?php echo $kode_operator; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('operator') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>