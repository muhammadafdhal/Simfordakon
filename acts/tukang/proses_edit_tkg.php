<?php

include '../conn/koneksi.php';

$tkgId = $_POST ['tkgId'];
$tkgNama = $_POST ['tkgNama'];
$tkgTelepon = $_POST['tkgTelepon'];
$tkgAlamat = $_POST['tkgAlamat'];

$input = mysql_query("UPDATE tukang SET tkgNama='$tkgNama',
 										 tkgTelepon='$tkgTelepon',
										 tkgAlamat='$tkgAlamat'
										 WHERE tkgId='$tkgId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tukang'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah_tkg&tkgId=$tkgId'>";
}
?>
