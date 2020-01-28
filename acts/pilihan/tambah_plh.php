<?php
include '../conn/koneksi.php';
?>

<!-- menu tengah -->
<div id="page-wrapper">
    <div class="container-fluid">
        <h2 align="center">
            <small>Input Pilih Tahapan</small>
        </h2>
        <hr>

        <form action="?page=proses_plh" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID PILIHAN</label>
                <input type="text" class="form-control" name="pilihanId" size="50%" required="required">
                <br>
                <label>PILIH TAHAPAN</label>
                <select name="pilihanNama" class="form-control">
                    <option value="null"></option>
                            <option value="tahap1">Tahap 1</option>
                            <option value="tahap2">Tahap 2</option> 
                            <option value="tahap3">Tahap 3</option>                    
                    	</select>
                <br>
                <label width="20%" align="right">Jarak</label>
                <input type="text" name="pilihanJarak" class="form-control" size="50%" required="required">
            </div>
            <br>
            <br>
            
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=pilihan" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>