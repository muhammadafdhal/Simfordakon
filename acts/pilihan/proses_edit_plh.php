<?php

include '../conn/koneksi.php';

$pilihanId = $_POST ['pilihanId'];
$pilihanNama = $_POST ['pilihanNama'];
$pilihanJarak = $_POST['pilihanJarak'];

$input = mysql_query("UPDATE pilihan SET pilihanNama='$pilihanNama',
 										 
										 
                                                                                 pilihanJarak='$pilihanJarak'
										 WHERE pilihanId='$pilihanId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=pilihan'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah_plh&pilihanId=$pilihanId'>";
}
?>
