<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_KELUHAN</h3>
                    </div>
        
        <div class="box-body">
        <div style="padding-bottom: 10px;">
        <?php echo anchor(site_url('keluhan/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
		<?php echo anchor(site_url('keluhan/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
		<?php echo anchor(site_url('keluhan/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?></div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="30px">No</th>
		    <th>Tanggal Keluhan</th>
			<th>ID</th>
		    <th>Pelapor</th>
		    <th>Status</th>
		    <!--<th>Kode Operator</th>-->
		    <!--<th>Tanggal Selesai</th>-->
		    <th>Ruangan</th>
		    <th>Lokasi</th>
		    <th>Unit Kerja</th>
		    <th>Jenis Inventaris</th>
			<th>Merk</th>
		    <th>Jenis Pekerjaan</th>
		    <th>Uraian</th>
		    <!--<th>Kode Kategori</th>-->
		    <!--<th>Kode Penyebabmasalah</th>-->
		    <!--<th>Kode Hasilpengecekan</th>-->
		    <!--<th>Kebutuhan Material</th>-->
		    <!--<th>Tindaklanjut</th>-->
		    <!--<th>Hasil Kesimpulan</th>-->
		    <th>Tingkat</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
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
                        },{"data": "tanggal_keluhan"},{"data": "id_keluhan"},{"data": "full_name"},
							{"data": "status"},
						{"data": "nama_ruangan"},{"data": "lokasi"},{"data": "unit_kerja"},{"data": "nama_jenisinventaris"},
						{"data": "merk"},{"data": "nama_jenispekerjaan"},{"data": "uraian"},{"data": "nama_tingkatperbaikan"},
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
        </script>