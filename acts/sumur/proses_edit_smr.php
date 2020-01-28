<?php

include '../conn/koneksi.php';

$sumurId = $_POST ['sumurId'];
$sumurNama = $_POST ['sumurNama'];
$sumurTelepon = $_POST['sumurTelepon'];
$sumurAlamat = $_POST['sumurAlamat'];

$input = mysql_query("UPDATE sumur SET sumurNama='$sumurNama',
 										 sumurTelepon='$sumurTelepon',
										 sumurAlamat='$sumurAlamat'
										 WHERE sumurId='$sumurId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=sumur'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah_smr&sumurId=$sumurId'>";
}
?>
