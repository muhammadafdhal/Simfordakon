<?php
include '../conn/koneksi.php';

$rmhId = $_GET['rmhId'];
$query = "SELECT * FROM rumah where rmhId='$rmhId'";
$sql = mysql_query($query);
$data = mysql_fetch_array($sql);
$rmhId = $data['rmhId'];
$rmhBlok = $data['rmhBlok'];
$rmhType = $data['rmhType'];
$pilihanId = $data['pilihanId'];
$rmhLuas = $data['rmhLuas'];
$tkgId = $data['tkgId'];
$sumurId = $data['sumurId'];
?>

<!-- menu tengah -->

<div id="page-wrapper">
    <div class="container-fluid">

        <h2 align="center">
            <small>Edit Data Rumah</small>
        </h2>
        <hr>
        <div class="table_input">
            <form action="?page=proses_edit_rmh" method="post">
                <div class="alert alert-info alert-dismissable">
                    <label>ID RUMAH</label>
                    <input type="text" class="form-control" name="rmhId" value="<?php echo $rmhId; ?>" readonly>
                    <br>
                    <label>BLOK RUMAH</label>
                    <input type="text" class="form-control" name="rmhBlok" value="<?php echo $rmhBlok; ?>">
                    <br>
                    <label>TYPE RUMAH</label>
                    <input type="text" class="form-control" name="rmhType" value="<?php echo $rmhType; ?>">
                    <br>
                    <label>ID PILIHAN</label>
                    <select name="pilihanId" class="form-control">
                    <?php
                    $sql_pilihan = mysql_query("SELECT * FROM pilihan");
                    while($k = mysql_fetch_assoc($sql_pilihan))
                    {
                        if (isset($c['pilihanId']) && $k['pilihanId'] == $c['pilihanId'])
                        {
                            echo "<option value='$k[pilihanId]' selected>$k[pilihanId]</option>";
                        }
                        else
                        {
                            echo "<option value ='$k[pilihanId]'>$k[pilihanId]</option>";
                        }
                    }
                    ?>
                    </select>
                    <br>
                    <label>LUAS RUMAH</label>
                    <input type="text" class="form-control" name="rmhLuas" value="<?php echo $rmhLuas; ?>">
                     <br>
                <label width="20%" align="right">Id Tukang</label>
                <select name="tkgId" class="form-control">
                    <?php
                    $sql_pilihan = mysql_query("SELECT * FROM tukang");
                    while($k = mysql_fetch_assoc($sql_pilihan))
                    {
                        
                        if (isset($c['tkgId']) && $k['tkgId'] == $c['tkgId'])
                        {
                            echo "<option value='$k[tkgId]' selected>$k[tkgNama]</option>";
                        }
                        else
                        {
                            echo "<option value ='$k[tkgId]'>$k[tkgId]</option>";
                        }
                    }
                    ?>
                </select>
                <br>
                <label width="20%" align="right">Id Sumur</label>
                <select name="sumurId" class="form-control">
                    <?php
                    $sql_pilihan = mysql_query("SELECT * FROM sumur");
                    while($k = mysql_fetch_assoc($sql_pilihan))
                    {
                        if (isset($c['sumurId']) && $k['sumurId'] == $c['sumurId'])
                        {
                            echo "<option value='$k[sumurId]' selected>$k[sumurNama]</option>";
                        }
                        else
                        {
                            echo "<option value ='$k[sumurId]'>$k[sumurId]</option>";
                        }
                    }
                    ?>
                </select>
                    
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-lg btn-success">
                <a href="?page=rumah" class="btn btn-lg btn-success">Batal
                </a>
            </form>
        </div>
    </div>

</div>