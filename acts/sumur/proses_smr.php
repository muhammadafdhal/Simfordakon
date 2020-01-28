<?php

include '../conn/koneksi.php';

$sumurId = $_POST['sumurId'];
$sumurNama = $_POST['sumurNama'];
$sumurTelepon = $_POST['sumurTelepon'];
$sumurAlamat = $_POST['sumurAlamat'];

$input = mysql_query("INSERT into sumur values('$sumurId','$sumurNama','$sumurTelepon','$sumurAlamat')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=sumur&sumurNama=$sumurNama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_smr'>";
}
?>
