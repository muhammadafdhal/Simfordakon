<?php

include '../conn/koneksi.php';

$ksmId = $_POST['ksmId'];
$prmId = $_POST['prmId'];
$rmhId = $_POST['rmhId'];
$bankId = $_POST['bankId'];
$ksmNama = $_POST['ksmNama'];
$ksmTelepon = $_POST['ksmTelepon'];
$ksmNoLpa = $_POST['ksmNoLpa'];
$ksmNosp3k = $_POST['ksmNosp3k'];
$ksmTglAkad = $_POST['ksmTglAkad'];
$ksmTglWawancara = $_POST['ksmTglWawancara'];
$ksmAlamat = $_POST['ksmAlamat'];
$ksmKpr = $_POST['ksmKpr'];
$ksmNoAjb = $_POST['ksmNoAjb'];
$ksmNoSertifikat = $_POST['ksmNoSertifikat'];
$ksmTglOts = $_POST['ksmTglOts'];
$ksmTglLpa = $_POST['ksmTglLpa'];
$ksmNoDebit = $_POST['ksmNoDebit'];
$ksmPcn = $_POST['ksmPcn'];
$ksmTglPcn = $_POST['ksmTglPcn'];
$ksmSimpanan = $_POST['ksmSimpanan'];


$input = mysql_query("INSERT into konsumen values('$ksmId','$prmId','$rmhId','$bankId',
'$ksmNama','$ksmTelepon','$ksmNoLpa','$ksmNosp3k','$ksmTglAkad','$ksmTglWawancara','$ksmAlamat',
'$ksmKpr','$ksmNoAjb','$ksmNoSertifikat','$ksmTglOts','$ksmTglLpa','$ksmNoDebit','$ksmPcn',
'$ksmTglPcn','$ksmSimpanan')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=konsumen&ksmNama=$ksmNama'>";
} else {
    echo "<script> alert('Data Gagal Di Input') </script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tambah_konsumen '>";
}
?>
