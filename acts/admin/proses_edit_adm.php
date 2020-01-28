<?php

include '../conn/koneksi.php';

$loginId = $_POST ['loginId'];
$nama = $_POST ['nama'];
$loginName = $_POST['loginName'];
$loginPassword = $_POST['loginPassword'];
$level = $_POST['level'];

$input = mysql_query("UPDATE login SET nama='$nama',
 										 loginName='$loginName',
										 loginPassword='$loginPassword',
                                                                                 level='$level'
										 WHERE loginId='$loginId'");

if ($input) {
    echo "<script> alert('Data Berhasil Di Update') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=admin'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=ubah_adm&loginId=$loginId'>";
}
?>
