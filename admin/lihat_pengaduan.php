<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lihat Data Catatan</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Catatan Pengguna</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Lokasi</th>
                      <th>Suhu</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php $i = 1; ?>
                  <?php
                  require '../koneksi.php';
                $sql = mysqli_query($koneksi,"SELECT DISTINCT tanggal, tb_riwayat.nama_lengkap, jam, lokasi, suhu, id_catatan FROM tb_riwayat, tb_users WHERE tb_riwayat.id_userc = tb_users.id_user");
                  while ($data = mysqli_fetch_array($sql)):
                  
                  ?>
                  <tbody>
                    
                    <tr>
                      <td><?php echo $i; ?></td> 
                      <td><?php echo $data['nama_lengkap']; ?></td>
                      <td><?php echo $data['tanggal']; ?> </td>
                      <td><?php echo $data['jam']; ?> </td>
                      <td><?php echo $data['lokasi']; ?> </td>
                      <td><?php echo $data['suhu']; ?> </td>
                      <td>
                        <a href="?url=edit_catatan&id_catatan=<?= $data['id_catatan']; ?>" class="btn btn-info">
                             <i class="fa fa-pen"></i> Edit
                        </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya')" href="hapus_catatan.php?id_catatan=<?= $data['id_catatan'] ?>" class="btn btn-danger">
                               <i class="fa fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    
                  </tbody>
                  <?php $i++; ?>
                <?php endwhile; ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
