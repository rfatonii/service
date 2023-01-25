<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <title>Login</title>
    <style>
      body{
        font-family: 'Poppins', sans-serif;
      }
      .btn-login {
        background-color: #12ce83; color: #ffff;
      }
      .btn-login:hover {
        background-color: #098b57;color: #ffff;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card shadow" style="width: 75%; margin: 90px auto">

                <?php
                  $status_login = $this->session->userdata('status_login');
                  if (empty($status_login)) {
                      $message = "Silahkan login untuk masuk ke aplikasi";
                  } else {
                      $message = $status_login;
                  }
                  ?>
                

                <div class="row p-4">

                    <div class="col-md-6 col-sm-12 rounded-start text-center">
                        <img src="" alt="">
                        <p class="fw-bold" style="font-size: 22px;">SERVICE REPORT</p>
                        <p style="font-size: 22px;">IT SYARIF HIDAYATULLAH</p>  
                        <img src="../assets/foto_profil/developer-IT.png" alt="" width="250">
                    </div>

                    <div class="col-md-6 col-sm-12 rounded-end text-center">
                        <img src="../assets/foto_profil/LOGO_RS.png" alt="" width="90" class="mt-4">
                            <div class="container text-start mt-4">

                                <!-- <form><?php echo base_url(); ?> -->
                                <?php echo form_open('auth/cheklogin'); ?>

                                    <div class="mb-3">
                                      <input type="text" class="form-control shadow-none" name="email" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                      <input type="password" class="form-control shadow-none" name="password" placeholder="Password" id="inputPassword">
                                    </div>
                                    <div class="mb-3 form-check mt-4">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showPassword()">
                                      <label class="form-check-label">Tampilkan Password</label>
                                    </div>
                                    <div class="row">
                                      <div class="col-12 text-center mt-2">
                                        <button type="submit" class="btn rounded px-5 shadow-none btn-login">Login</button>
                                      </div>
                                    </div>
                                    <p class="login-box-msg text-center mt-4 text-muted h6"><?php echo $message; ?></p>
                                </form>
                            </div>
                    </div>
                </div>
            
          </div>
    </div>
    <script>
      function showPassword() {
          var x = document.getElementById("inputPassword");
          if (x.type === "password") {
              x.type = "text";
          } else {
              x.type = "password";
          }
      }
  </script>

  <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
  </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>