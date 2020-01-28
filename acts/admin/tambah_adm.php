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

        <form action="?page=proses_adm" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID</label>
                <input type="text" class="form-control" name="loginId" size="50%" required="required">
                <br>
                <label width="25%" align="right">NAMA</label>
                <input type="text" name="nama" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">USERNAME</label>
                <input type="text" name="loginName" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">PASSWORD</label>
                <input type="text" name="loginPassword" class="form-control" size="50%" required="required">
                <br>
                <label>Level</label>
                    <select name="level" class="form-control">
                            <option value="admin" <?php if( $level=='admin'){echo "selected"; } ?>>Admin</option>
                            <option value="direk2" <?php if( $level=='direk'){echo "selected"; } ?>>Direktur</option>                     
                    	</select>
            </div>
            <br>
            <br>
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=admin" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>