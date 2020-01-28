<?php
include '../conn/koneksi.php';

$prmId= $_GET['prmId'];
$query = mysql_query("DELETE FROM perumahan WHERE prmId='$prmId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=perumahan'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=perumahan'>";
	}


?>