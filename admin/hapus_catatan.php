<?php

$id_catatan = $_GET['id_catatan'];

include'../koneksi.php';
$sql = "DELETE FROM tb_riwayat WHERE id_catatan='$id_catatan'";
$query =mysqli_query($koneksi, $sql);

if($query){ ?>
<script>
 alert("Data Sudah Terhapus.");
window.location.assign("admin.php?url=lihat_pengaduan");
</script>
<?php

}else{ ?>
<script> alert("Data Tidak Terhapus.");
window.location.assign("admin.php?url=lihat_pengaduan");
</script>

<?php

}