<div class="content-wrapper">
    <section class="content">
        <?php echo alert('alert-info', 'Selamat Datang', 'Selamat Datang Di Halaman Utama')?>
     <div>
            <?php
// Cek role
if($this->session->userdata('id_user_level') == '1'){ // Jika role-nya admin
    ?>

            <head>
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
                <style>
                    .container, h4, h3, h2 {
                        font-family:'Poppins', sans-serif;
                    }
                </style>
            </head >

            <body onload="startTime()">
                
			<!-- <h3 class="box-title">CRUD GENERATOR</h3>
				<p>Untuk lebih lengkapnya, silahkan buka:
				<a href="http://localhost:8080/servicereport/harviacode/index.php">TAMBAH CRUD</a></p>	 -->
			
			<!-- <div class="container">
                            <div class="section-title">
                                <h2>Alur Melaporkan Keluhan</h2>
                                <span class="section-separator"></span>
                                <p>Berikut Alur untuk Melaporkan Keluhan Anda</p>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="process-item">
                                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <h4>1. Laporkan Keluhan Anda</h4>
                                            <p>Anda Dapat Melaporkan Masalah Tanah Anda Terkait IT (Sistem, Software, Hardware maupun Jaringan)</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                            <h4>2. Masalah Anda Akan di Proses</h4>
                                            <p>Keluhan Anda Akan Di Proses Dengan Cepat Berdasarkan Keluhan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                            <h4>3. Masalah Selesai</h4>
                                            <p>Keluhan Anda selesai dan Anda Dapat Memantau Keluhan Dengan Login di Aplikasi IT SERVICE REPORT</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
            </div> -->
            <div class="container">

                
            <div class="row">
                <div class="col-md-6">    
                    <h3 class="box-title">CRUD GENERATOR</h3>
                        <p>Untuk lebih lengkapnya, silahkan buka:
                        <a href="http://localhost:8080/servicereport/harviacode/index.php">TAMBAH CRUD</a></p>
                </div>

                <div class="col-md-6 text-center">
                    <div class="card">
                        <!-- <h4 class="card-title">TIME</h4>   -->
                        <div class="card-text" id="date" style="font-size:18px;"></div>
                        <div class="card-text" id="txt" style="font-size:18px;"></div>
                    </div>
                </div>

            </div>



            <div class="row" style="margin-top:50px;">
                <div class="col-md-7">
                    <div class="section-title">
                        <h2>Alur Melaporkan Keluhan</h2>
                        <span class="section-separator"></span>
                        <p>Berikut Alur untuk Melaporkan Keluhan Anda</p>
                    </div>

                    <div class="process-wrap fl-wrap">
                        <ul class="list-unstyled">
                            <li>
                                <div class="process-item">
                                    <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <h4>1. Laporkan Keluhan Anda</h4>
                                    <p>Anda Dapat Melaporkan Masalah Tanah Anda Terkait IT (Sistem, Software, Hardware maupun Jaringan)</p>
                                </div>
                                <span class="pr-dec"></span>
                            </li>
                            <li>
                                <div class="process-item">
                                    <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                    <h4>2. Masalah Anda Akan di Proses</h4>
                                    <p>Keluhan Anda Akan Di Proses Dengan Cepat Berdasarkan Keluhan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                </div>
                                <span class="pr-dec"></span>
                            </li>
                            <li>
                                <div class="process-item">
                                    <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                    <h4>3. Masalah Selesai</h4>
                                    <p>Keluhan Anda selesai dan Anda Dapat Memantau Keluhan Dengan Login di Aplikasi IT SERVICE REPORT</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="../assets/foto_profil/developer-team.png" alt="" width="420">
                </div>
            </div>

            </div>

            <script>
                function startTime() {
                const today = new Date();
                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s + " WIB";
                setTimeout(startTime, 1000);
                }

                function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
                }

                var tanggal = new Date();
                var date = tanggal.toDateString();
                document.getElementById("date").innerHTML = date;
            </script>
            </body>
			
			<?php
}else{ // Jika role-nya user/member/karyawan
?>
	<!--section  -->
    <head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        .container, h4, h2 {
            font-family:'Poppins', sans-serif;
        }
    </style>
    </head >

    <body onload="startTime()">
    <section data-scrollax-parent="true">
        
        <!-- Sourcecode Mba Amel -->
        <!-- <div class="container">
            <div class="section-title">
                <h2>Alur Melaporkan Keluhan</h2>
                <span class="section-separator"></span>
                <p>Berikut Alur untuk Melaporkan Keluhan Anda</p>
            </div>
            <div class="process-wrap fl-wrap">
                <ul class="no-list-style">
                    <li>
                        <div class="process-item">
                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                            <h4>1. Laporkan Keluhan Anda</h4>
                            <p>Anda Dapat Melaporkan Masalah Tanah Anda Terkait IT (Sistem, Software, Hardware maupun Jaringan)</p>
                        </div>
                        <span class="pr-dec"></span>
                    </li>
                    <li>
                        <div class="process-item">
                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                            <h4>2. Masalah Anda Akan di Proses</h4>
                            <p>Keluhan Anda Akan Di Proses Dengan Cepat Berdasarkan Keluhan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                        <span class="pr-dec"></span>
                    </li>
                    <li>
                        <div class="process-item">
                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                            <h4>3. Masalah Selesai</h4>
                            <p>Keluhan Anda selesai dan Anda Dapat Memantau Keluhan Dengan Login di Aplikasi IT SERVICE REPORT</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div> -->

        <div class="container">

            <div class="row text-center">
                <div class="col-md-6" style="border-left:1px solid #098b57">
                    <!-- <div class="row">
                        <div class="col-md-5" style="border-right:1px solid #098b57">
                            <div class="card" style="width: 18rem; margin:0 auto">
                                <h4 class="card-title">SERVICE REPORT</h4>               
                                <p class="card-text" style="font-size:30px">4</p>
                            </div>
                        </div>
                        <div class="col-md-5" style="border-right:1px solid #098b57">
                            <div class="card" style="width: 18rem; margin:0 auto">
                                <h4 class="card-title">SIMRS KHANZA</h4>  
                                <p class="card-text" style="font-size:30px">7</p>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <!-- <h4 class="card-title">TIME</h4>   -->
                        <div class="card-text" id="date" style="font-size:18px;"></div>
                        <div class="card-text" id="txt" style="font-size:18px;"></div>
                    </div>
                </div>

            </div>

            

            <div class="row" style="margin-top:50px;">
                <div class="col-md-7">
                    <div class="section-title">
                        <h2>Alur Melaporkan Keluhan</h2>
                        <span class="section-separator"></span>
                        <p>Berikut Alur untuk Melaporkan Keluhan Anda</p>
                    </div>

                    <div class="process-wrap fl-wrap">
                        <ul class="list-unstyled">
                            <li>
                                <div class="process-item">
                                    <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <h4>1. Laporkan Keluhan Anda</h4>
                                    <p>Anda Dapat Melaporkan Masalah Tanah Anda Terkait IT (Sistem, Software, Hardware maupun Jaringan)</p>
                                </div>
                                <span class="pr-dec"></span>
                            </li>
                            <li>
                                <div class="process-item">
                                    <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                    <h4>2. Masalah Anda Akan di Proses</h4>
                                    <p>Keluhan Anda Akan Di Proses Dengan Cepat Berdasarkan Keluhan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                </div>
                                <span class="pr-dec"></span>
                            </li>
                            <li>
                                <div class="process-item">
                                    <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                    <h4>3. Masalah Selesai</h4>
                                    <p>Keluhan Anda selesai dan Anda Dapat Memantau Keluhan Dengan Login di Aplikasi IT SERVICE REPORT</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="../assets/foto_profil/developer-team.png" alt="" width="420">
                </div>
            </div>

        </div>
    </section> 

        <script>
            function startTime() {
            const today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s + " WIB";
            setTimeout(startTime, 1000);
            }

            function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
            }

            var tanggal = new Date();
            var date = tanggal.toDateString();
            document.getElementById("date").innerHTML = date;
        </script>
    </body>
<?php
}
?>
        </div>
    </section>
	 
</div>
