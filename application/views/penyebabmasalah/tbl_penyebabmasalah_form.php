<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_PENYEBABMASALAH</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Penyebabmasalah <?php echo form_error('nama_penyebabmasalah') ?></td><td><input type="text" class="form-control" name="nama_penyebabmasalah" id="nama_penyebabmasalah" placeholder="Nama Penyebabmasalah" value="<?php echo $nama_penyebabmasalah; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_penyebabmasalah" value="<?php echo $kode_penyebabmasalah; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('penyebabmasalah') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>