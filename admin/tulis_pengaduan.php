<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Kesehatan Perjalanan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tulis Catatan Perjalanan</h6>
     </div>
  <div class="card-body">
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">

      <div class="form-group cols-sm-6">
        <label>Pilih Tanggal</label>
        <input type="text" name="tanggal" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
      </div>

      <div class="form-group cols-sm-6">
      <label>Pilih Jam</label>
        <input type="text" name="jam" class="form-control" placeholder value="<?php $timezone = time() + (60*60*7);
        echo gmdate('h:i',$timezone)?>">
      </div>
    
      <div class="form-group cols-sm-6">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" placeholder="Masukan Nama Anda" class="form-control">
      </div>


      <div class="form-group cols-sm-6">
        <label>Lokasi</label>
        <input type="text" name="lokasi" placeholder="Masukan Lokasi" class="form-control">
      </div>
      
     <div class="form-group cols-sm-6">
     <label>Suhu Tubuh</label>
        <input type="number" name="suhu" placeholder="Masukan Suhu Tubuh (Celcius)" class="form-control" min="34" max="40">
      </div>

      <div class="form-group">
        <input type="hidden" name="id_userc" value="<?= "$_SESSION[id_user]"; ?>">
      </div>

      <div class="form-group cols-sm-6">
        <input type="submit" value="Simpan" class="btn btn-success" button id="btn_simpan" onclick="alert('maaf anda dalam kondisi tidak sehat, anda tidak dapat berpergian sekarang silahkan karantina mandiri dirumah. Terima Kasih')"> 
        <input type="submit" value="Kosongkan" class="btn btn-warning">
      </div>
    </form>

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>