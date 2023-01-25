<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA KELUHAN SIM RS KHANZA</h3>
                    </div>
        
        <div class="box-body">
        <div style="padding-bottom: 10px;">
<?php
// Cek role
if($this->session->userdata('id_user_level') == '1'){ // Jika role-nya admin
    ?>
		<?php echo anchor(site_url('keluhansimrs/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
		<?php //echo anchor(site_url('keluhansimrs/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
		<?php //echo anchor(site_url('keluhansimrs/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?></div>

		<table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
            <th width="20px">No</th>
		    <th>Status</th>
			<th>ID</th>
		    <th width="70px">Tgl</th>
		    <th width="150px">Pelapor</th>
		    <th>Unit</th>
		    <th width="130px">Jns Pekerjaan</th>
			<th width="250px">Keluhan</th>
		    <!--<th>Solusi/Tindaklanjut</th>-->
			<!--<th>Oleh</th>-->
		    <!--<th width="70px">Tgl Selesai</th>-->
			<th>Tingkat</th>
		    <th width="250px">Action</th>
                </tr>
            </thead>
			<tbody>
                <?php
                    $i=0;
                    foreach($semua_keluhanadmin as $keluhan){
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
							<td><?php echo $keluhan->id_keluhansimrs; ?></td>
							<td><?php echo date('d-m-Y H:i:s', strtotime($keluhan->tanggal_keluhansimrs));  ?></td>
                            <td><?php echo $keluhan->full_name; ?></td>
                            <td><?php echo $keluhan->unit_kerja; ?></td>
                            <td><?php echo $keluhan->nama_jp_simrs; ?></td>
							<td><?php echo $keluhan->deskripsi; ?></td>
							<!--<td><?php// echo $keluhan->nama_hasilpengecekan; ?></td>-->
							<!--<td><?php// echo $keluhan->solusi; ?></td>-->
							<!--<td><?php// echo $keluhan->tanggal_selesai; ?></td>-->
							<td><?php echo $keluhan->nama_tingkatperbaikan; ?></td>
                            <td>
								<a href="<?php echo site_url(); ?>/keluhansimrs/read/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
								<a href="<?php echo site_url(); ?>/keluhansimrs/update/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<a href="<?php echo site_url(); ?>/keluhansimrs/tindakanproses/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-warning btn-sm">Proses</button></a>
								<!--<a href="<?php// echo site_url(); ?>/keluhansimrs/tindaklanjut/<?php// echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-check-square-o" aria-hidden="true"></i></button></a>-->
								<?php if($keluhan->kode_status==4){
								?>
								<a onclick="return confirm('Apakah data ID Keluhan <?php echo $keluhan->id_keluhansimrs; ?> akan di hapus ?')" href="<?php echo site_url(); ?>/keluhansimrs/delete/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
								<?php } ?>
							</td>
                        </tr>
                        <?php } ?>

            </tbody>
	    
        </table>
<?php
} // Jika role-nya admin
?>

<?php
// Cek role
if($this->session->userdata('id_user_level') != '1'){ // Jika role-nya user
    ?>
		<?php echo anchor(site_url('keluhansimrs/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
<br><br>
		<table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="30px">No</th>
		    <th>Status</th>
			<th>ID </th>
		    <th width="95px">Tgl </th>
		    <th>Pelapor</th>
		    <th>Unit </th>
		    <th width="130px">Jns Pekerjaan</th>
			<th>Deskripsi</th>
		    <th>Solusi/Tindaklanjut</th>
		    <th width="95px">Tgl Selesai</th>
			<th>Tingkat</th>
		    <th width="175px">Action</th>
                </tr>
            </thead>
			<tbody>
                <?php
                    $i=0;
                    foreach($semua_keluhanuser as $keluhan){
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
							<td><?php echo $keluhan->id_keluhansimrs; ?></td>
							<td><?php echo date('d-m-Y', strtotime($keluhan->tanggal_keluhansimrs));  ?></td>
                            <td><?php echo $keluhan->full_name; ?></td>
                            <td><?php echo $keluhan->unit_kerja; ?></td>
                            <td><?php echo $keluhan->nama_jp_simrs; ?></td>
							<td><?php echo $keluhan->deskripsi; ?></td>
							<!--<td><?php echo $keluhan->nama_hasilpengecekan; ?></td>-->
							<td><?php echo $keluhan->solusi; ?></td>
							<td><?php echo $keluhan->tanggal_selesai; ?></td>
							<td><?php echo $keluhan->nama_tingkatperbaikan; ?></td>
                            <td>
								<a href="<?php echo site_url(); ?>/keluhansimrs/read/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
								<?php if($keluhan->kode_status==4){
								?>
								<a href="<?php echo site_url(); ?>/keluhansimrs/update/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<a onclick="return confirm('Apakah data ID Keluhan <?php echo $keluhan->id_keluhansimrs; ?> akan di hapus ?')" href="<?php echo site_url(); ?>/keluhansimrs/delete/<?php echo $keluhan->kode_keluhansimrs; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
								<?php } ?>
								<?php if($keluhan->kode_status==3){
								?>
								<a href="<?php echo site_url(); ?>/Keluhansimrs/cetakkeluhansimrs/<?php echo $keluhan->kode_keluhansimrs; ?>"  target="_blank"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-print" aria-hidden="true"></i></button></a>
								<?php } ?>
							</td>
                        </tr>
                        <?php } ?>

            </tbody>
	    
        </table>
<?php
} // Jika role-nya user
?> 
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
		<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
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
                    ajax: {"url": "keluhansimrs/json", "type": "POST"},
                    columns: [
                        {
                            "data": "kode_keluhansimrs",
                            "orderable": false
                        },{"data": "tanggal_keluhansimrs"},{"data": "unit_kerja"},{"data": "deskripsi"},{"data": "kode_jp_simrs"},{"data": "pengembangan_oleh"},{"data": "solusi"},{"data": "tanggal_selesai"},
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