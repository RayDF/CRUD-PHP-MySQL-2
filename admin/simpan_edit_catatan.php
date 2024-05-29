<?php

$id_catatan   = $_POST['id_catatan'];
$tanggal		  =date('Y/m/d');
$nama_lengkap	=$_POST['nama_lengkap'];
$jam		    	=$_POST['jam'];
$lokasi			  =$_POST['lokasi'];
$suhu			    =$_POST['suhu'];

include'../koneksi.php';
$sql = "UPDATE tb_riwayat SET tanggal='$tanggal', jam='$jam', nama_lengkap='$nama_lengkap', lokasi='$lokasi', suhu='$suhu' WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
<script>
     alert("Catatan Sudah Teredit.");
     window.location.assign("admin.php?url=lihat_pengaduan");
  </script>
<?php

}else{ ?>
<script>
    alert("Catatan Tidak Teredit.");
    window.location.assign("admin.php?url=lihat_pengaduan");
  </script>
<?php

}