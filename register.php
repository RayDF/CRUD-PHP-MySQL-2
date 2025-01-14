<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    #daftarButton {
      background-color: #04AA6D;
      border: 1px solid #04AA6D;
      color: #fff;
    }

    #daftarButton:hover { 
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
                <div class="p-4">
                  <div class="text-center">
                    <img src="" width="50%" align="center">
                    <h1 class="h4 text-white-900 mb-4">Silahkan Daftar !</h1>
                  </div>
                  <form class="user" method="post" action="simpan_masyarakat.php">
                    <div class="form-group">
                      <input type="number" class="form-control form-control-user" name="nik" placeholder="Masukkan NIK" id="exampleinputEmail" aria-describedby="emailHelp"
                      placeholder="Masukkan NIK Anda" maxlength="16" pattern="\d{16}"title="
                      harap masukan 16 digit">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nama_lengkap" placeholder="Masukkan Nama Anda">
                    </div>
                     <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username">
                    </div>
                     <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password">
                    </div>
                     
                    <div class="form-group">
                      
                    </div>
                    
                    <button class="btn btn-danger btn-user btn-block" type="submit" value="Daftar" id="daftarButton" >Daftar</button>
                    
                    <hr>
                   
                  </form>
                  <div class="text-center">
                    Sudah Punya Akun...?<br>
                    <a class="small" href="index.php">Silahkan Login</a>
                  </div>
                  <hr>
                  
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
