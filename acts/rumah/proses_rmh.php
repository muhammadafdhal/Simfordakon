<?php

include '../conn/koneksi.php';

$rmhId = $_POST['rmhId'];
$pilihanId = $_POST['pilihanId'];
$rmhLuas = $_POST['rmhLuas'];
$rmhBlok = $_POST['rmhBlok'];
$rmhType = $_POST['rmhType'];
$tkgId = $_POST['tkgId'];
$sumurId = $_POST['sumurId'];

$input = mysql_query("INSERT into rumah values('$rmhId','$pilihanId','$rmhLuas','$rmhBlok','$rmhType','$tkgId','$sumurId')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=rumah&rmhBlok=$rmhBlok'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_rmh'>";
}
?>
