<?php
include '../conn/koneksi.php';
?>

<!-- menu tengah -->
<div id="page-wrapper">
    <div class="container-fluid">
        <h2 align="center">
            <small>Input Tukang Sumur</small>
        </h2>
        <hr>

        <form action="?page=proses_bank" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID BANK</label>
                <input type="text" class="form-control" name="bankId" size="50%" required="required">
                <br>
                <label width="25%" align="right">NAMA BANK</label>
                <input type="text" name="bankNama" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">ALAMAT BANK</label>
                <input type="text" name="bankAlamat" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">TELEPON BANK</label>
                <input type="text" name="bankTelepon" class="form-control" size="50%" required="required">
            </div>
            <br>
            <br>
            
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=bank" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>