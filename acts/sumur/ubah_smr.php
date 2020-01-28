<?php
include '../conn/koneksi.php';

$sumurId = $_GET['sumurId'];
$query = "SELECT * FROM sumur where sumurId='$sumurId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$sumurId = $data['sumurId'];
$sumurNama = $data['sumurNama'];
$sumurAlamat = $data['sumurAlamat'];
$sumurTelepon = $data['sumurTelepon']
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data Tukang SUMUR</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit_smr" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>ID TUKANG SUMUR</label>
                    <input type="text" class="form-control" name="sumurId" value="<?php echo $sumurId; ?>" readonly>
                    <br>
                    <label>NAMA TUKANG SUMUR</label>
                    <input type="text" class="form-control" name="sumurNama" value="<?php echo $sumurNama; ?>">
                    <br>
                    <label>ALAMAT TUKANG SUMUR</label>
                    <input type="text" class="form-control" name="sumurAlamat" value="<?php echo $sumurAlamat; ?>">
                    <br>
                    <label>TELEPON TUKANG SUMUR</label>
                    <input type="text" class="form-control" name="sumurTelepon" value="<?php echo $sumurTelepon; ?>">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=sumur" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>