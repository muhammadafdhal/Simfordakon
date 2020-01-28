<?php

include '../conn/koneksi.php';

$bankId = $_POST['bankId'];
$bankNama = $_POST['bankNama'];
$bankAlamat = $_POST['bankAlamat'];
$bankTelepon = $_POST['bankTelepon'];

$input = mysql_query("INSERT into bank values('$bankId','$bankNama','$bankAlamat','$bankTelepon')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=bank&bankNama=$bankNama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_bank'>";
}
?>
