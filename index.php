<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    #loginButton {
      background-color: #04AA6D;
      border: 1px solid #04AA6D;
      color: #fff;
    }

    #loginButton:hover { 
      background-color: rgb(0, 153, 76);
      border: 1px solid rgb(0, 153, 76); 
    }
  </style>
</head>

<body class="bg-gradient-black" style="background-image: url(img/bg.jpg); 
            background-size: cover; background-position: center; background-attachment: fixed;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="background-image: url();">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="img/dokter.png" width="75%" align="center">
                    <h1 class="h4 text-black-900 mb-4"></h1>
                    <p>Masukan Username dan Password Anda</p>
                  </div>
                  <form class="user" method="post" action="cek_login.php">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button class="btn btn-user btn-block" id="loginButton" type="submit" value="login" name="login">Login</button>
                      
                    
                    <hr>
                   
                  </form>
                  <div class="text-center">
                    Belum Punya Akun...? Silahkan Ke Halaman Register<br>
                    <a class="small" href="register.php">Silahkan Daftar Disini</a>
                  </div>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="index2.php"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
