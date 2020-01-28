<?php

include '../conn/koneksi.php';

$prmId = $_POST['prmId'];
$prmNama = $_POST['prmNama'];
$prmAlamat = $_POST['prmAlamat'];

$input = mysql_query("INSERT into perumahan values('$prmId','$prmNama','$prmAlamat')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=perumahan&prmNama=$prmNama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah'>";
}
?>
