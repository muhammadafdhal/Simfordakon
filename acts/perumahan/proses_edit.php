<?php

include '../conn/koneksi.php';

$prmId = $_POST ['prmId'];
$prmNama = $_POST ['prmNama'];
$prmAlamat = $_POST['prmAlamat'];

$input = mysql_query("UPDATE perumahan SET prmNama='$prmNama',
 										 
										 prmAlamat='$prmAlamat'
										 WHERE prmId='$prmId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=perumahan'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah&prmId=$prmId'>";
}
?>
