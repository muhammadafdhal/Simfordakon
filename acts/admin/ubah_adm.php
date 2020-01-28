<?php
include '../conn/koneksi.php';

$loginId = $_GET['loginId'];
$query = "SELECT * FROM login where loginId='$loginId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$logiId = $data['loginId'];
$nama = $data['nama'];
$loginName = $data['loginName'];
$loginPassword = $data['loginPassword'];
$level = $data['level']
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data User</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit_adm" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>ID</label>
                    <input type="text" class="form-control" name="loginId" value="<?php echo $loginId; ?>" readonly>
                    <br>
                    <label>NAMA</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    <br>
                    <label>UserName</label>
                    <input type="text" class="form-control" name="loginName" value="<?php echo $loginName; ?>">
                    <br>
                    <label>Password</label>
                    <input type="text" class="form-control" name="loginPassword" value="<?php echo $loginPassword; ?>">
                    <label>Level</label>
                    <select name="level" class="form-control">
                            <option value="admin" <?php if( $level=='admin'){echo "selected"; } ?>>Admin</option>
                            <option value="direk2" <?php if( $level=='direk'){echo "selected"; } ?>>Direktur</option>                     
                    	</select>
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=admin" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>