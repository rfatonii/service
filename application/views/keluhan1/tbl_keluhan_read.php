<div class="content-wrapper">
<section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
				<h2 style="margin-top:0px">Tbl_keluhan Read</h2>
			</div>
        <table class="table">
		<?php
            foreach ($keluhan_data as $keluhan)
            {
                ?>
	    <tr><td>Tanggal Keluhan</td><td><?php echo $keluhan->tanggal_keluhan ?></td></tr>
	    <tr><td>ID</td><td><?php echo $keluhan->id_keluhan ?></td></tr>
		<tr><td>Nama Pelapor</td><td><?php echo $keluhan->full_name; ?></td></tr>
	    <tr><td>Status</td><td>
		<?php if($keluhan->status==1){
									echo "<div class='btn btn-success btn-sm'>Proses</div>"; 
									}else if($keluhan->status==2){ 
									echo "<div class='btn btn-warning btn-sm'>Selesai</div>";
									}
								?>
		</td></tr>
	    <tr><td>Nama Ruangan</td><td><?php echo $keluhan->nama_ruangan; ?></td></tr>
	    <tr><td>Jenis Inventaris</td><td><?php echo $keluhan->nama_jenisinventaris; ?></td></tr>
	    <tr><td>Lokasi</td><td><?php echo $keluhan->lokasi; ?></td></tr>
	    <tr><td>Unit Kerja</td><td><?php echo $keluhan->unit_kerja; ?></td></tr>
	    <tr><td>Merk</td><td><?php echo $keluhan->merk; ?></td></tr>
	    <tr><td>Jenis Pekerjaan</td><td><?php echo $keluhan->nama_jenispekerjaan; ?></td></tr>
	    <tr><td>Uraian/Deskripsi Permasalahan</td><td><?php echo $keluhan->uraian; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $keluhan->nama_kategori; ?></td></tr>
	    <tr><td>Penyebab Permasalahan</td><td> <?php echo $keluhan->nama_penyebabmasalah; ?></td></tr>
	    <tr><td>Hasil Pengecekan</td><td><?php echo $keluhan->nama_hasilpengecekan; ?></td></tr>
	    <tr><td>Kebutuhan Material</td><td><?php echo $keluhan->kebutuhan_material; ?></td></tr>
	    <tr><td>Tindakan yang Dilakukan</td><td><?php echo $keluhan->tindaklanjut; ?></td></tr>
	    <tr><td>Hasil Kesimpulan</td><td><?php echo $keluhan->hasil_kesimpulan; ?></td></tr>
	    <tr><td>Tingkat Perbaikan</td><td><?php echo $keluhan->nama_tingkatperbaikan; ?></td></tr>
		<tr><td>Nama Operator</td><td><?php echo $keluhan->nama_operator; ?></td></tr>
	    <tr><td>Tanggal Selesai</td><td><?php echo $keluhan->tanggal_selesai; ?></td></tr>
<?php
            }
            ?>
	    <tr><td></td><td><a href="<?php echo site_url('keluhan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div>
</section></div>