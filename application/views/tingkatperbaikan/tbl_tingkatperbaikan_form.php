<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_TINGKATPERBAIKAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Nama Tingkatperbaikan <?php echo form_error('nama_tingkatperbaikan') ?></td><td><input type="text" class="form-control" name="nama_tingkatperbaikan" id="nama_tingkatperbaikan" placeholder="Nama Tingkatperbaikan" value="<?php echo $nama_tingkatperbaikan; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_tingkatperbaikan" value="<?php echo $kode_tingkatperbaikan; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('tingkatperbaikan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>