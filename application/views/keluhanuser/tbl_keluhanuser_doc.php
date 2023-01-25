<!doctype html>
<html>
    <head>
        <title>IT RS Syarif Hidayatullah</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Data List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal Keluhan</th>
		<th>Kode Pelapor</th>
		<th>Status</th>
		<th>Kode Operator</th>
		<th>Tanggal Selesai</th>
		<th>Nama Ruangan</th>
		<th>Kode Jenisinventaris</th>
		<th>Lokasi</th>
		<th>Unit Kerja</th>
		<th>Merk</th>
		<th>Kode Jenispekerjaan</th>
		<th>Uraian</th>
		<th>Kode Kategori</th>
		<th>Kode Penyebabmasalah</th>
		<th>Kode Hasilpengecekan</th>
		<th>Kebutuhan Material</th>
		<th>Tindaklanjut</th>
		<th>Hasil Kesimpulan</th>
		<th>Kode Tingkatperbaikan</th>
		
            </tr><?php
            foreach ($keluhanuser_data as $keluhanuser)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $keluhanuser->tanggal_keluhanuser ?></td>
		      <td><?php echo $keluhanuser->kode_pelapor ?></td>
		      <td><?php echo $keluhanuser->status ?></td>
		      <td><?php echo $keluhanuser->kode_operator ?></td>
		      <td><?php echo $keluhanuser->tanggal_selesai ?></td>
		      <td><?php echo $keluhanuser->nama_ruangan ?></td>
		      <td><?php echo $keluhanuser->kode_jenisinventaris ?></td>
		      <td><?php echo $keluhanuser->lokasi ?></td>
		      <td><?php echo $keluhanuser->unit_kerja ?></td>
		      <td><?php echo $keluhanuser->merk ?></td>
		      <td><?php echo $keluhanuser->kode_jenispekerjaan ?></td>
		      <td><?php echo $keluhanuser->uraian ?></td>
		      <td><?php echo $keluhanuser->kode_kategori ?></td>
		      <td><?php echo $keluhanuser->kode_penyebabmasalah ?></td>
		      <td><?php echo $keluhanuser->kode_hasilpengecekan ?></td>
		      <td><?php echo $keluhanuser->kebutuhan_material ?></td>
		      <td><?php echo $keluhanuser->tindaklanjut ?></td>
		      <td><?php echo $keluhanuser->hasil_kesimpulan ?></td>
		      <td><?php echo $keluhanuser->kode_tingkatperbaikan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>