<?php
include '../conn/koneksi.php';

$bankId = $_GET['bankId'];
$query = "SELECT * FROM bank where bankId='$bankId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$bankId = $data['bankId'];
$bankNama = $data['bankNama'];
$bankAlamat = $data['bankAlamat'];
$bankTelepon = $data['bankTelepon']
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data Bank</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit_bank" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>ID BANK</label>
                    <input type="text" class="form-control" name="bankId" value="<?php echo $bankId; ?>" readonly>
                    <br>
                    <label>NAMA BANK</label>
                    <input type="text" class="form-control" name="bankNama" value="<?php echo $bankNama; ?>">
                    <br>
                    <label>ALAMAT BANK</label>
                    <input type="text" class="form-control" name="bankAlamat" value="<?php echo $bankAlamat; ?>">
                    <br>
                    <label>TELEPON BANK</label>
                    <input type="text" class="form-control" name="bankTelepon" value="<?php echo $bankTelepon; ?>">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=bank" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>