<?php
include '../conn/koneksi.php';
?>

<!-- menu tengah -->
<div id="page-wrapper">
    <div class="container-fluid">
        <h2 align="center">
            <small>Input Tukang Rumah</small>
        </h2>
        <hr>

        <form action="?page=proses_tkg" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID TUKANG RUMAH</label>
                <input type="text" class="form-control" name="tkgId" size="50%" required="required">
                <br>
                <label width="25%" align="right">NAMA TUKANG RUMAH</label>
                <input type="text" name="tkgNama" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">ALAMAT TUKANG RUMAH</label>
                <input type="text" name="tkgAlamat" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">TELEPON TUKANG RUMAH</label>
                <input type="text" name="tkgTelepon" class="form-control" size="50%" required="required">
            </div>
            <br>
            <br>
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=tukang" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>