<?php

include '../conn/koneksi.php';

$bankId = $_POST ['bankId'];
$bankNama = $_POST ['bankNama'];
$bankAlamat = $_POST['bankAlamat'];
$bankTelepon = $_POST['bankTelepon'];

$input = mysql_query("UPDATE bank SET bankNama='$bankNama',
 										 
										 bankAlamat='$bankAlamat',
                                                                                 bankTelepon='$bankTelepon'
										 WHERE bankId='$bankId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=bank'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah_bank&bankId=$bankId'>";
}
?>
