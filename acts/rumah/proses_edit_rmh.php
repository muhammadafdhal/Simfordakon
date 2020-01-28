<?php

include '../conn/koneksi.php';

$rmhId = $_POST['rmhId'];
$pilihanId = $_POST['pilihanId'];
$rmhLuas = $_POST['rmhLuas'];
$rmhBlok = $_POST['rmhBlok'];
$rmhType = $_POST['rmhType'];
$tkgId = $_POST['tkgId'];
$sumurId = $_POST['sumurId'];

$input = mysql_query("UPDATE rumah SET pilihanId='$pilihanId',
 										 						 
                                                                                 rmhLuas='$rmhLuas',
                                                                                 rmhBlok='$rmhBlok',
                                                                                 rmhType='$rmhType',
                                                                                 tkgId='$tkgId',
                                                                                 sumurId='$sumurId'
										 WHERE rmhId='$rmhId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=rumah'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah_rmh&rmhId=$rmhId'>";
}
?>
