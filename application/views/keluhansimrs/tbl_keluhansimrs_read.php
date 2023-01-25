<div class="content-wrapper">
<section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
				<h2 style="margin-top:0px">DATA KELUHAN SIM RS KHANZA READ</h2>
			</div>
        <table class="table">
		<?php
            foreach ($keluhansimrs_data as $keluhan)
            {
                ?>
		<tr><td><u><b>Data di isi Oleh Pelapor</b></u></td><td></td></tr>		
	    <tr><td width="250px">ID Keluhan</td><td><?php echo $keluhan->id_keluhansimrs ?></td></tr>
	    <tr><td width="250px">Tanggal Keluhan</td><td><?php echo $keluhan->tanggal_keluhansimrs ?></td></tr>
	    <tr><td width="250px">Nama Pelapor</td><td><?php echo $keluhan->full_name; ?></td></tr>
	    <tr><td width="250px">Unit Kerja</td><td><?php echo $keluhan->unit_kerja; ?></td></tr>
	    <tr><td width="250px">Uraian/Deskripsi Permasalahan</td><td><?php echo $keluhan->deskripsi; ?></td></tr>
	    <tr><td width="250px">Jenis Pekerjaan</td><td><?php echo $keluhan->nama_jp_simrs; ?></td></tr>
	    <tr><td width="250px">Tingkat</td><td><?php echo $keluhan->nama_tingkatperbaikan; ?></td></tr>
	    <tr><td><u><b>Tindakan oleh IT</b></u></td><td></td></tr>
		<tr><td>Tanggal Respon</td><td><?php echo $keluhan->tanggal_respon; ?></td></tr>
	    <tr><td width="250px">Pengembangan Oleh</td><td><?php echo $keluhan->nama_hasilpengecekan; ?></td></tr>
		<tr><td width="300px">Operator</td><td><?php echo $keluhan->nama_operator; ?></td></tr>
		<?php if($keluhan->kode_status==3){
		?>
		<tr><td width="250px">Solusi/Tindakan yang Dilakukan</td><td><?php echo $keluhan->solusi; ?></td></tr>
	    <tr><td width="250px">Tanggal Selesai</td><td><?php echo $keluhan->tanggal_selesai; ?></td></tr>
	    <?php } ?>
		<?php
            }
            ?>
		<!--<tr><td></td><td><a href="<?php// echo site_url('keluhansimrs') ?>" class="btn btn-default">Kembali</a></td></tr>-->
	</table>
        </div>
</section></div>