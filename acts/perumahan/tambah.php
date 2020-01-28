<?php
include '../conn/koneksi.php';
?>

<!-- menu tengah -->
<div id="page-wrapper">
    <div class="container-fluid">
        <h2 align="center">
            <small>Input Data Perumahan</small>
        </h2>
        <hr>

        <form action="?page=proses" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>Id Perumahan</label>
                <input type="text" class="form-control" name="prmId" size="50%" required="required">
                <label width="25%" align="right">Nama Perumahan</label>
                <input type="text" name="prmNama" class="form-control" size="50%" required="required">
                <label width="20%" align="right">Alamat Perumahan</label>
                <input type="text" name="prmAlamat" class="form-control" size="50%" required="required">
            </div>
            <br>
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=perumahan" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>