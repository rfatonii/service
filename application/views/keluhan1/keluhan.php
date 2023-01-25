<div class="content-wrapper">
<section class="content">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
				<h2 style="margin-top:0px">Tbl_keluhan Read</h2>
			</div>
        <table class="table">
		<?php
            foreach ($keluhan_data as $keluhan)
            {}
                ?>
	    <tr><td>Tanggal Keluhan</td><td><?php echo $keluhan->tanggal_keluhan ?></td></tr>
	    <tr><td>ID</td><td><?php echo $id_keluhan; ?></td></tr>
		<tr><td>Kode Pelapor</td><td><?php echo $keluhan->full_name; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Nama Ruangan</td><td><?php echo $nama_ruangan; ?></td></tr>
	    <tr><td>Kode Jenisinventaris</td><td><?php echo $kode_jenisinventaris; ?></td></tr>
	    <tr><td>Lokasi</td><td><?php echo $lokasi; ?></td></tr>
	    <tr><td>Unit Kerja</td><td><?php echo $unit_kerja; ?></td></tr>
	    <tr><td>Merk</td><td><?php echo $merk; ?></td></tr>
	    <tr><td>Kode Jenispekerjaan</td><td><?php echo $kode_jenispekerjaan; ?></td></tr>
	    <tr><td>Uraian</td><td><?php echo $uraian; ?></td></tr>
	    <tr><td>Kode Kategori</td><td><?php echo $kode_kategori; ?></td></tr>
	    <tr><td>Kode Penyebabmasalah</td><td><?php echo $kode_penyebabmasalah; ?></td></tr>
	    <tr><td>Kode Hasilpengecekan</td><td><?php echo $kode_hasilpengecekan; ?></td></tr>
	    <tr><td>Kebutuhan Material</td><td><?php echo $kebutuhan_material; ?></td></tr>
	    <tr><td>Tindaklanjut</td><td><?php echo $tindaklanjut; ?></td></tr>
	    <tr><td>Hasil Kesimpulan</td><td><?php echo $hasil_kesimpulan; ?></td></tr>
	    <tr><td>Kode Tingkatperbaikan</td><td><?php echo $kode_tingkatperbaikan; ?></td></tr>
		<tr><td>Kode Operator</td><td><?php echo $kode_operator; ?></td></tr>
	    <tr><td>Tanggal Selesai</td><td><?php echo $tanggal_selesai; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('keluhan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div>
</section>
</div>