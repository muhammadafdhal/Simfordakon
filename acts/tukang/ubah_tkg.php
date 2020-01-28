<?php
include '../conn/koneksi.php';

$tkgId = $_GET['tkgId'];
$query = "SELECT * FROM tukang where tkgId='$tkgId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$tkgId = $data['tkgId'];
$tkgNama = $data['tkgNama'];
$tkgAlamat = $data['tkgAlamat'];
$tkgTelepon = $data['tkgTelepon']
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data Tukang Rumah</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit_tkg" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>ID TUKANG RUMAH</label>
                    <input type="text" class="form-control" name="tkgId" value="<?php echo $tkgId; ?>" readonly>
                    <br>
                    <label>NAMA TUKANG RUMAH</label>
                    <input type="text" class="form-control" name="tkgNama" value="<?php echo $tkgNama; ?>">
                    <br>
                    <label>ALAMAT TUKANG RUMAH</label>
                    <input type="text" class="form-control" name="tkgAlamat" value="<?php echo $tkgAlamat; ?>">
                    <br>
                    <label>TELEPON TUKANG RUMAH</label>
                    <input type="text" class="form-control" name="tkgTelepon" value="<?php echo $tkgTelepon; ?>">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=tukang" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>