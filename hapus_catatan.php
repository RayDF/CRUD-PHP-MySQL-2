<?php

$id_catatan = $_GET['id_catatan'];

include'koneksi.php';
$sql = "DELETE FROM tb_riwayat WHERE id_catatan='$id_catatan'";
$query =mysqli_query($koneksi, $sql);

if($query){ ?>
<script>
 alert("Data Catatan Sudah Terhapus.");
window.location.assign("masyarakat.php");
</script>
<?php

}else{ ?>
<script> alert("Data Catatan Tidak Terhapus.");
window.location.assign("masyarakat.php");
</script>

<?php

}