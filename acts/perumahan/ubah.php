<?php
include '../conn/koneksi.php';

$prmId = $_GET['prmId'];
$query = "SELECT * FROM perumahan where prmId='$prmId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$prmId = $data['prmId'];
$prmNama = $data['prmNama'];
$prmAlamat = $data['prmAlamat'];
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data Perumahan</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>Id Perumahan</label>
                    <input type="text" class="form-control" name="prmId" value="<?php echo $prmId; ?>" readonly>
                </div>
                <div class="alert alert-info alert-dismissable">
                    <label>Nama Perumahan</label>
                    <input type="text" class="form-control" name="prmNama" value="<?php echo $prmNama; ?>">
                </div>
                <div class="alert alert-info alert-dismissable">
                    <label>Alamat Perumahan</label>
                    <input type="text" class="form-control" name="prmAlamat" value="<?php echo $prmAlamat; ?>">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=perumahan" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>