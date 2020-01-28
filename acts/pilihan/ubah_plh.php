<?php
include '../conn/koneksi.php';

$pilihanId = $_GET['pilihanId'];
$query = "SELECT * FROM pilihan where pilihanId='$pilihanId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$pilihanId = $data['pilihanId'];
$pilihanNama = $data['pilihanNama'];
$pilihanJarak = $data['pilihanJarak'];
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data Bank</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit_plh" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>ID PILIHAN</label>
                    <input type="text" class="form-control" name="pilihanId" value="<?php echo $pilihanId; ?>" readonly>
                    <br>
                    <label>PILIH TAHAPAN</label>
                    <select name="pilihanNama" class="form-control">
                            <option value="tahap1" <?php if( $pilihanNama=='tahap1'){echo "selected"; } ?>>Tahap 1</option>
                            <option value="tahap2" <?php if( $pilihanNama=='tahap2'){echo "selected"; } ?>>Tahap 2</option> 
                            <option value="tahap3" <?php if( $pilihanNama=='tahap3'){echo "selected"; } ?>>Tahap 3</option>                    
                    	</select>
                    <br>
                    <label>JARAK</label>
                    <input type="text" class="form-control" name="pilihanJarak" value="<?php echo $pilihanJarak; ?>">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=pilihan" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>