<?php

include '../conn/koneksi.php';

$pilihanId = $_POST['pilihanId'];
$pilihanNama = $_POST['pilihanNama'];
$pilihanJarak = $_POST['pilihanJarak'];

$input = mysql_query("INSERT into pilihan values('$pilihanId','$pilihanNama','$pilihanJarak')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=pilihan&pilihanNama=$pilihanNama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_plh'>";
}
?>
