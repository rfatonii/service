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
        <h2>DATA KELUHAN SIM RS KHANZA LIST</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>ID Keluhan</th>
		<th>Tanggal Keluhan</th>
		<th>Nama Pelapor</th>
		<th>Unit Kerja</th>
		<th>Deskripsi</th>
		<th>Jenis Pekerjaan</th>
		<th>Tingkat</th>
		<th>Pengembangan Oleh</th>
		<th>Solusi</th>
		<th>Operator</th>
		<th>Tanggal Selesai</th>
		
            </tr><?php
            foreach ($keluhansimrs_data as $keluhansimrs)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $keluhansimrs->id_keluhansimrs ?></td>
		      <td><?php echo $keluhansimrs->tanggal_keluhansimrs ?></td>
		      <td><?php echo $keluhansimrs->full_name ?></td>
		      <td><?php echo $keluhansimrs->unit_kerja ?></td>
		      <td><?php echo $keluhansimrs->deskripsi ?></td>
		      <td><?php echo $keluhansimrs->nama_jp_simrs ?></td>
		      <td><?php echo $keluhansimrs->nama_tingkatperbaikan ?></td>
			  <td><?php echo $keluhansimrs->nama_hasilpengecekan ?></td>
		      <td><?php echo $keluhansimrs->solusi ?></td>
		      <td><?php echo $keluhansimrs->nama_operator ?></td>	
		      <td><?php echo $keluhansimrs->tanggal_selesai ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>