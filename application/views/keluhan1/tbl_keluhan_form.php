<div class="content-wrapper">
    
    <section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA TBL_KELUHAN</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered'>        

	    <tr><td width='200'>Tanggal Keluhan <?php echo form_error('tanggal_keluhan') ?></td><td><input type="text" class="form-control" name="tanggal_keluhan" id="tanggal_keluhan" placeholder="Tanggal Keluhan" value="<?php echo $tanggal_keluhan; ?>" /></td></tr>
	    <tr><td width='200'>Pelapor <?php echo form_error('kode_pelapor') ?></td><td><input type="text" class="form-control" name="kode_pelapor" id="kode_pelapor" placeholder="Kode Pelapor" value="<?php echo $kode_pelapor; ?>" /></td></tr>
	    <tr><td width='200'>Status <?php echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td></tr>
	    <tr><td width='200'>Kode Operator <?php echo form_error('kode_operator') ?></td><td><input type="text" class="form-control" name="kode_operator" id="kode_operator" placeholder="Kode Operator" value="<?php echo $kode_operator; ?>" /></td></tr>
	    <tr><td width='200'>Tanggal Selesai <?php echo form_error('tanggal_selesai') ?></td><td><input type="text" class="form-control" name="tanggal_selesai" id="tanggal_selesai" placeholder="Tanggal Selesai" value="<?php echo $tanggal_selesai; ?>" /></td></tr>
	    <tr><td width='200'>Nama Ruangan <?php echo form_error('nama_ruangan') ?></td><td><input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan" placeholder="Nama Ruangan" value="<?php echo $nama_ruangan; ?>" /></td></tr>
	    <tr><td width='200'>Kode Jenisinventaris <?php echo form_error('kode_jenisinventaris') ?></td><td><input type="text" class="form-control" name="kode_jenisinventaris" id="kode_jenisinventaris" placeholder="Kode Jenisinventaris" value="<?php echo $kode_jenisinventaris; ?>" /></td></tr>
	    <tr><td width='200'>Lokasi <?php echo form_error('lokasi') ?></td><td><input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi" value="<?php echo $lokasi; ?>" /></td></tr>
	    <tr><td width='200'>Unit Kerja <?php echo form_error('unit_kerja') ?></td><td><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" placeholder="Unit Kerja" value="<?php echo $unit_kerja; ?>" /></td></tr>
	    <tr><td width='200'>Merk <?php echo form_error('merk') ?></td><td><input type="text" class="form-control" name="merk" id="merk" placeholder="Merk" value="<?php echo $merk; ?>" /></td></tr>
	    <tr><td width='200'>Kode Jenispekerjaan <?php echo form_error('kode_jenispekerjaan') ?></td><td><input type="text" class="form-control" name="kode_jenispekerjaan" id="kode_jenispekerjaan" placeholder="Kode Jenispekerjaan" value="<?php echo $kode_jenispekerjaan; ?>" /></td></tr>
	    <tr><td width='200'>Uraian <?php echo form_error('uraian') ?></td><td><input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian" value="<?php echo $uraian; ?>" /></td></tr>
	    <tr><td width='200'>Kode Kategori <?php echo form_error('kode_kategori') ?></td><td><input type="text" class="form-control" name="kode_kategori" id="kode_kategori" placeholder="Kode Kategori" value="<?php echo $kode_kategori; ?>" /></td></tr>
	    <tr><td width='200'>Kode Penyebabmasalah <?php echo form_error('kode_penyebabmasalah') ?></td><td><input type="text" class="form-control" name="kode_penyebabmasalah" id="kode_penyebabmasalah" placeholder="Kode Penyebabmasalah" value="<?php echo $kode_penyebabmasalah; ?>" /></td></tr>
	    <tr><td width='200'>Kode Hasilpengecekan <?php echo form_error('kode_hasilpengecekan') ?></td><td><input type="text" class="form-control" name="kode_hasilpengecekan" id="kode_hasilpengecekan" placeholder="Kode Hasilpengecekan" value="<?php echo $kode_hasilpengecekan; ?>" /></td></tr>
	    <tr><td width='200'>Kebutuhan Material <?php echo form_error('kebutuhan_material') ?></td><td><input type="text" class="form-control" name="kebutuhan_material" id="kebutuhan_material" placeholder="Kebutuhan Material" value="<?php echo $kebutuhan_material; ?>" /></td></tr>
	    <tr><td width='200'>Tindaklanjut <?php echo form_error('tindaklanjut') ?></td><td><input type="text" class="form-control" name="tindaklanjut" id="tindaklanjut" placeholder="Tindaklanjut" value="<?php echo $tindaklanjut; ?>" /></td></tr>
	    <tr><td width='200'>Hasil Kesimpulan <?php echo form_error('hasil_kesimpulan') ?></td><td><input type="text" class="form-control" name="hasil_kesimpulan" id="hasil_kesimpulan" placeholder="Hasil Kesimpulan" value="<?php echo $hasil_kesimpulan; ?>" /></td></tr>
	    <tr><td width='200'>Kode Tingkatperbaikan <?php echo form_error('kode_tingkatperbaikan') ?></td><td><input type="text" class="form-control" name="kode_tingkatperbaikan" id="kode_tingkatperbaikan" placeholder="Kode Tingkatperbaikan" value="<?php echo $kode_tingkatperbaikan; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="kode_keluhan" value="<?php echo $kode_keluhan; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('keluhan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
</div>
</div>