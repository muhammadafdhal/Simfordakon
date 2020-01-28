<?php

include '../conn/koneksi.php';

$tkgId = $_POST['tkgId'];
$tkgNama = $_POST['tkgNama'];
$tkgTelepon = $_POST['tkgTelepon'];
$tkgAlamat = $_POST['tkgAlamat'];

$input = mysql_query("INSERT into tukang values('$tkgId','$tkgNama','$tkgTelepon','$tkgAlamat')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tukang&tkgNama=$tkgNama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_tkg'>";
}
?>
