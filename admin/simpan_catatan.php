<?php

session_start();
$nik     		= $_SESSION['nik'];
$tanggal 		= $_POST['tanggal'];
$jam			= $_POST['jam'];
$lokasi			= $_POST['lokasi'];
$suhu   		= $_POST['suhu'];

include'../koneksi.php';
$sql = "INSERT INTO tb_riwayat(nik,tanggal,jam,lokasi,suhu) VALUES('$nik','$tanggal','$jam','$lokasi','$suhu')";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
<script>
     alert("Data Perjalanan Sudah Tersimpan.");
     window.location.assign("admin.php");
  </script>
<?php

}else{ ?>
	<script>
	    alert("Data Perjalanan Tidak Tersimpan.");
	    window.location.assign("admin.php?url=tulis_catatan");
	</script>
<?php

}