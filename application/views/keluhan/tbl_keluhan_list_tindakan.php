<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">DATA KELUHAN (TINDAK LANJUT)</h3>
                    </div>
        
        <div class="box-body">
        <div style="padding-bottom: 10px;">
        <!--<?php // echo anchor(site_url('keluhan/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
		<?php// echo anchor(site_url('keluhan/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
		<?php // echo anchor(site_url('keluhan/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?>--></div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="20px">No</th>
					<th width="50px">Status</th>
					<th width="100px">ID</th>
					<th width="80px">Tanggal</th>
					<th width="130px">Ruangan</th>
					<!--<th width="90px">Lokasi</th>-->
					<!--<th width="120px">Unit</th>-->
					<th width="300px">Keluhan</th>
					<th width="100px">Jenis</th>
					<th width="150px">Merk</th>
					<th width="150px">Tingkat</th>
					<th width="300px">Action</th>
                </tr>
            </thead>
			
			<tbody>
                <?php
                    $i=0;
                    foreach($semua_keluhan as $keluhan){
                    $i++;
                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
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
                            </td>
                            <td><?php echo $keluhan->id_keluhan; ?></td>
							<td><?php echo date('d-m-Y H:i:s', strtotime($keluhan->tanggal_keluhan));  ?></td>
                            <td><?php echo $keluhan->nama_ruangan; ?></td>
                           <!-- <td><?php// echo $keluhan->lokasi; ?></td>-->
							<!--<td><?php// echo $keluhan->unit_kerja; ?></td>-->
							<td><?php echo $keluhan->uraian; ?></td>
							<td><?php echo $keluhan->nama_jenisinventaris; ?></td>
							<td><?php echo $keluhan->merk; ?></td>
							<td><?php echo $keluhan->nama_tingkatperbaikan; ?></td>
                            <td>
								<!--<a href="<?php// echo site_url(); ?>/keluhan/read/<?php// echo $keluhan->kode_keluhan; ?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
								<a href="<?php echo site_url(); ?>/keluhan/update/<?php// echo $keluhan->kode_keluhan; ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>-->
								<a href="<?php echo site_url(); ?>/keluhan/tindaklanjut/<?php echo $keluhan->kode_keluhan; ?>"><button type="button" class="btn btn-warning btn-sm">Tindakan</button></a>
								<a href="<?php echo site_url(); ?>/keluhan/tindaklanjut/<?php echo $keluhan->kode_keluhan; ?>"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
								<?php if($keluhan->kode_status==3){
								?>
								<a href="<?php echo site_url(); ?>/keluhan/cetak/<?php echo $keluhan->kode_keluhan; ?>"  target="_blank"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-print" aria-hidden="true"></i></button></a>
								<?php } ?>
								<a onclick="return confirm('Apakah data ID Keluhan <?php echo $keluhan->id_keluhan; ?> akan di hapus ?')" href="<?php echo site_url(); ?>/keluhan/delete/<?php echo $keluhan->kode_keluhan; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
							</td>
                        </tr>
                        <?php } ?>

            </tbody>
        </table>
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
				$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };
				
                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },

                });
				
            });
        </script>
		<!--<script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "keluhan/json", "type": "POST"},
                    columns: [
                        {
                            "data": "kode_keluhan",
                            "orderable": false
                        },	{"data": "nama_status"},
							{"data": "id_keluhan"},{"data": "tanggal_keluhan"},{"data": "nama_ruangan"},{"data": "lokasi"},{"data": "unit_kerja"},{"data": "uraian"},{"data": "nama_jenisinventaris"},{"data": "merk"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>-->