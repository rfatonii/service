<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cetak Keluhan SIMRS Khanza</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        b {
          font-weight: bold;
          }
        @media all {
          .page-break { display: none; }
          }

          @media print {
          .page-break { display: block; page-break-before: always;page-break-after: always; }
          @page {   margin-top: 0;
                    margin-bottom: 0;
                    margin-right: 40px;
                    margin-left: 40px; }
          }



        }
        </style>
        <script>
        window.print()
        </script>

    </head>
    <body>
	
<!--Main Wrapper Start-->
        <div class="as-mainwrapper">


            <?php
            foreach($keluhan_data as $detail){
            ?>
            <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
                  <div class="container  ">
                        <div class="row">
                          <div class="col-md-12">
            <img src="<?php echo base_url('assets/umum/coverperbaikansimrs.PNG') ?>" width="100%">
            
	<table align="left" border="0">
			<?php
            foreach ($keluhan_data as $keluhan)
            {
                ?>
			<tr>
				<td width="10px"></td>
				<td width="200px">ID Pelaporan</td><td width="10px">: </td><td width="200px"><?php echo $keluhan->id_keluhansimrs ?></td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="200px">Tanggal Pelaporan</td><td width="10px">: </td><td width="200px"><?php echo date('d-m-Y H:i:s', strtotime($keluhan->tanggal_keluhansimrs));  ?></td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="200px">Pelapor</td><td width="10px">: </td><td width="200px"><?php echo $keluhan->full_name ?></td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="200px">Unit Kerja</td><td width="10px">: </td><td width="200px"><?php echo $keluhan->unit_kerja; ?></td>
				<td width="30px"></td>
				<td width="150px"></td><td> </td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="200px">Jenis Pekerjaan</td><td width="10px">: </td><td width="450px"><?php echo $keluhan->nama_jp_simrs; ?></td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="200px">Deskripsi Permasalahan</td><td width="10px">: </td><td><?php echo $keluhan->deskripsi; ?></td>
			</tr>
    </table>

			
	<table align="left" border="0">
			<tr><td><br></td></tr>
			<tr>
				<td width="10px"></td>
				<td width="190px"><b>Tindakan oleh IT</b></td><td>
			</tr>
			<tr>
				<td width="10px"></td>
				<td width="165px">Tanggal Di Proses</td><td width="10px">: </td><td><?php echo date('d-m-Y H:i:s', strtotime($keluhan->tanggal_respon));  ?></td>
			</tr>
			
			<tr>
				<td width="10px"></td>
				<td width="165px">Solusi/Tindaklanjut</td><td width="10px">: </td><td><?php echo $keluhan->solusi; ?></td>
			</tr>
			
			<tr>
				<td width="10px"></td>
				<td width="165px">Tingkat Perbaikan</td><td width="10px">: </td><td><?php echo $keluhan->nama_tingkatperbaikan; ?></td>
			</tr>
			
			<tr>
				<td width="10px"></td>
				<td width="165px">Pelaksana</td><td width="10px">: </td><td><?php echo $keluhan->nama_operator; ?></td>
			</tr>
	
			
			<tr>
				<td width="10px"></td>
				<td width="165px">Tanggal Selesai</td><td width="10px">: </td><td><?php echo date('d-m-Y H:i:s', strtotime($keluhan->tanggal_selesai));  ?></td>
			</tr>
			
	</table>

                                    <table width="100%" border="0">
                                      <tr>
										<td align="center"><br></td>
                                      </tr>
									  <tr>
										<td align="center"><br></td>
                                      </tr>
									  <tr>
										<td width="150px" align="center"></td>
                                        <td width="130px" align="center">&nbsp;</td>
                                        <td width="180px" align="center">Tangerang Selatan, <?php date_default_timezone_set("Asia/Jakarta"); echo date('d-m-Y');  ?></td>
										<td width="30px" align="center"></td>
									  </tr>
									  <tr>
										<td width="150px" align="center">Pelapor</td>
                                        <td width="130px" align="center">Pelaksana,</td>
                                        <td width="180px" align="center">Mengetahui,</td>
                                        <td align="center"></td>
                                      </tr>
                                      <tr>
                                        <td align="center">&nbsp;</td>
                                        <td align="center">Staf IT Support</td>
                                        <td align="center">Kasubag Sistem Informasi</td>
										<td align="center"></td>
									  </tr>

                                      <tr>
                                        <td align="center">&nbsp;<br><br><br><br></td>
                                        <td align="center"></td>
                                        <td align="center"><img src="<?php echo base_url('assets/umum/ttd-qr.png') ?>" width="45%"></td>
                                        <td align="center">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center">(<?php echo $keluhan->full_name; ?>)</td>
                                        <td align="center">(<?php echo $keluhan->nama_operator; ?>)</td>
                                        <td align="center">(A. Aviv Hanafiah, S.Kom)</td>
                                        <td align="center"></td>
                                      </tr>
                                    </table>
			<?php
            }
            ?>

				</div>
                        </div>
                    </div>
                </div>
          <?php } ?>
                <!--End of Single Job Post Area-->

        </div>
        <!--End of Main Wrapper Area-->



    </body>


</html>
