<?php

include '../conn/koneksi.php';

$loginId = $_POST['loginId'];
$nama = $_POST['nama'];
$loginName = $_POST['loginName'];
$loginPassword = $_POST['loginPassword'];
$level = $_POST['level'];

$input = mysql_query("INSERT into login values('$loginId','$nama','$loginName','$loginPassword','$level')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=admin&nama=$nama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_adm'>";
}
?>
