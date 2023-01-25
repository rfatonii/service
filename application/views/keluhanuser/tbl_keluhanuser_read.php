<div class="content-wrapper">
<section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
				<h2 style="margin-top:0px">Data Keluhan Read</h2>
			</div>
        <table class="table">
		<?php
            foreach ($keluhan_data as $keluhan)
            {
                ?>
	    <tr><td width="300px"><u><b>Data di isi Oleh Pelapor</b></u></td><td></td></tr>
		<tr><td width="300px">Tanggal Keluhan</td><td><?php echo $keluhan->tanggal_keluhan ?></td></tr>
	    <tr><td width="300px">ID</td><td><?php echo $keluhan->id_keluhan ?></td></tr>
		<tr><td width="300px">Nama Pelapor</td><td><?php echo $keluhan->full_name; ?></td></tr>
	    <tr><td width="300px">Status</td><td>
								<?php if($keluhan->kode_status==2){
									echo "<span class='badge btn-warning'>Diproses</span>"; 
									}else if($keluhan->kode_status==3){ 
									echo "<span class='badge btn-success'>Selesai</span>";
									}else if($keluhan->kode_status==4){ 
									echo "<span class='badge btn-info'>Diajukan</span>";
									}else{
									echo "<span class='badge btn-dark'>-</span>";
									}
								?>
		</td></tr>
		<tr><td width="300px">Nama Ruangan</td><td><?php echo $keluhan->nama_ruangan; ?></td></tr>
	    <tr><td width="300px">Lokasi</td><td><?php echo $keluhan->lokasi; ?></td></tr>
	    <tr><td width="300px">Unit Kerja</td><td><?php echo $keluhan->unit_kerja; ?></td></tr>
		<tr><td width="300px">Jenis Inventaris</td><td><?php echo $keluhan->nama_jenisinventaris; ?></td></tr>
	    <tr><td width="300px">Merk</td><td><?php echo $keluhan->merk; ?></td></tr>
	    <tr><td width="300px">Jenis Pekerjaan</td><td><?php echo $keluhan->nama_jenispekerjaan; ?></td></tr>
	    <tr><td width="300px">Uraian/Deskripsi Permasalahan</td><td><?php echo $keluhan->uraian; ?></td></tr>
		<tr><td width="300px">Penyebab Permasalahan</td><td> <?php echo $keluhan->nama_penyebabmasalah; ?></td></tr>
	    <tr><td width="300px">Tingkat Perbaikan</td><td><?php echo $keluhan->nama_tingkatperbaikan; ?></td></tr>
		<tr><td><u><b>Tindakan oleh IT</b></u></td><td></td></tr>
		<tr><td>Tanggal Respon</td><td><?php echo $keluhan->tanggal_respon; ?></td></tr>
		<tr><td>Kategori</td><td><?php echo $keluhan->nama_kategori; ?></td></tr>
		<tr><td>Hasil Pengecekan</td><td><?php echo $keluhan->nama_hasilpengecekan; ?></td></tr>
		<tr><td>Operator</td><td><?php echo $keluhan->nama_operator; ?></td></tr>
	    <?php if($keluhan->kode_status==3){
		?>
		<tr><td>Kebutuhan Material</td><td><?php echo $keluhan->kebutuhan_material; ?></td></tr>
	    <tr><td>Tindakan yang Dilakukan</td><td><?php echo $keluhan->tindaklanjut; ?></td></tr>
	    <tr><td>Hasil/Kesimpulan</td><td><?php echo $keluhan->hasil_kesimpulan; ?></td></tr>
	    <tr><td>Tanggal Selesai</td><td><?php echo $keluhan->tanggal_selesai; ?></td></tr>
		<?php } ?>
		<?php
            }
            ?>
	    <tr><td></td><td><a href="<?php echo site_url('keluhanuser') ?>" class="btn btn-default">Kembali</a></td></tr>
	</table>
        </div>
</section></div>