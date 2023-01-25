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
        <h2>Tbl_penyebabmasalah List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Penyebabmasalah</th>
		
            </tr><?php
            foreach ($penyebabmasalah_data as $penyebabmasalah)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $penyebabmasalah->nama_penyebabmasalah ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>