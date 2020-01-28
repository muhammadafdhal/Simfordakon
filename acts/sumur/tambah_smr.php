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

        <form action="?page=proses_smr" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID TUKANG SUMUR</label>
                <input type="text" class="form-control" name="sumurId" size="50%" required="required">
                <br>
                <label width="25%" align="right">NAMA TUKANG SUMUR</label>
                <input type="text" name="sumurNama" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">ALAMAT TUKANG SUMUR</label>
                <input type="text" name="sumurAlamat" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">TELEPON TUKANG SUMUR</label>
                <input type="text" name="sumurTelepon" class="form-control" size="50%" required="required">
            </div>
            <br>
            <br>
            
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=sumur" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>