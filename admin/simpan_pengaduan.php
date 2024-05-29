<?php
require 'koneksi.php';
$tanggal		=date('Y/m/d');
$nama_lengkap	=$_POST['nama_lengkap'];
$jam			=$_POST['jam'];
$lokasi			=$_POST['lokasi'];
$suhu			=$_POST['suhu'];
$id_user 		=$_POST['id_userc'];

$sql=mysqli_query($koneksi,"INSERT INTO tb_riwayat(tanggal,nama_lengkap, jam, lokasi, suhu, id_userc) VALUES ('$tanggal', '$nama_lengkap', '$jam', '$lokasi', '$suhu', '$id_user')");

if ($sql) 
{
    ?>
    <script type="text/javascript">
        alert('Data berhasil disimpan, Terimakasih sudah mengisi Data.');
        window.location = "admin.php";
    </script>
    <?php
}
?>
