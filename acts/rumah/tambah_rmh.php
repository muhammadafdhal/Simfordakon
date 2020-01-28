<?php
include '../conn/koneksi.php';
?>

<!-- menu tengah -->
<div id="page-wrapper">
    <div class="container-fluid">
        <h2 align="center">
            <small>Input Data Rumah</small>
        </h2>
        <hr>

        <form action="?page=proses_rmh" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID Rumah</label>
                <input type="text" class="form-control" name="rmhId" size="50%" required="required">
                <br>
                <label>Blok Rumah</label>
                <input type="text" class="form-control" name="rmhBlok" size="50%" required="required">
                <br>
                <label width="20%" align="right">Type Rumah</label>
                <input type="text" name="rmhType" class="form-control" size="50%" required="required">
                <br>
                <label>Id Pilihan</label>
                <select name="pilihanId" class="form-control">
                    <option value="null"></option>
                    <?php
                    $sql_pilihan = mysql_query("SELECT * FROM pilihan");
                    while($k = mysql_fetch_assoc($sql_pilihan))
                    {
                        if (isset($c['pilihanId']) && $k['pilihanId'] == $c['pilihanId'])
                        {
                            echo "<option value='$k[pilihanId]' selected>$k[pilihanNama]</option>";
                        }
                        else
                        {
                            echo "<option value ='$k[pilihanId]'>$k[pilihanId]</option>";
                        }
                    }
                    ?>
                    </select>
                <label width="20%" align="right">Luas</label>
                <input type="text" name="rmhLuas" class="form-control" size="50%" required="required">
                <br>
                <label width="20%" align="right">Id Tukang</label>
                <select name="tkgId" class="form-control">
                    <option value="null"></option>
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
                    <option value="null"></option>
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
            <br>
            
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=rumah" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>