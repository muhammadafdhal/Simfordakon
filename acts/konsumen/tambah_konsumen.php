<?php
include '../conn/koneksi.php';
?>

<!-- menu tengah -->
<div id="page-wrapper">
    <div class="container-fluid">
        <h2 align="center">
            <small>Input Data Konsumen</small>
        </h2>
        <hr>

        <form action="?page=proses_konsumen" method="post">
            <div class="alert alert-info alert-dismissable">
                <label>ID Konsumen</label>
                <input type="text" class="form-control" name="ksmId" size="50%" required="required">
                <br>
                <label>Nama Konsumen</label>
                <input type="text" class="form-control" name="ksmNama" size="50%" required="required">
                <br>
                <label>No. Telepon Konsumen</label>
                <input type="text" class="form-control" name="ksmTelepon" size="50%" required="required">
                <br>
                <label>No. LPA Konsumen</label>
                <input type="text" class="form-control" name="ksmNoLpa" size="50%" required="required">
                <br>
                <label>No. SP3K Konsumen</label>
                <input type="text" class="form-control" name="ksmNosp3k" size="50%" required="required">
                <br>
                <label>Tanggal Akad Konsumen</label>
                <input type="date" class="form-control" name="ksmTglAkad" size="50%" required="required">
                <br>
                <label>Tanggal Wawancara Konsumen</label>
                <input type="date" class="form-control" name="ksmTglWawancara" size="50%" required="required">
                <br>
                <label>Alamat Konsumen</label>
                <input type="text" class="form-control" name="ksmAlamat" size="50%" required="required">
                <br>
                <label>KPR Konsumen</label>
                <input type="text" class="form-control" name="ksmKpr" size="50%" required="required">
                <br>
                <label>No. AJB Konsumen</label>
                <input type="text" class="form-control" name="ksmNoAjb" size="50%" required="required">
                <br>
                <label>No. Sertifikat Konsumen</label>
                <input type="text" class="form-control" name="ksmNoSertifikat" size="50%" required="required">
                <br>
                <label>Tanggal OTS Konsumen</label>
                <input type="date" class="form-control" name="ksmTglOts" size="50%" required="required">
                <br>
                <label>Tanggal LPA Konsumen</label>
                <input type="date" class="form-control" name="ksmTglLpa" size="50%" required="required">
                <br>
                <label>No. Debit Konsumen</label>
                <input type="text" class="form-control" name="ksmNoDebit" size="50%" required="required">
                <br>
                <label>Pencairan Dana Konsumen</label>
                <input type="text" class="form-control" name="ksmPcn" size="50%" required="required">
                <br>
                <label>Tanggal Pencairan dana Konsumen</label>
                <input type="date" class="form-control" name="ksmTglPcn" size="50%" required="required">
                <br>
                <label>Simpanan Konsumen</label>
                <input type="text" class="form-control" name="ksmSimpanan" size="50%" required="required">
                <br>
                <label>ID Perumahan</label>
                <select name="prmId" class="form-control">
                    <option value="null"></option>
                    <?php
                    $sql_perumahan = mysql_query("SELECT * FROM perumahan");
                    while ($k = mysql_fetch_assoc($sql_perumahan)) {
                        if (isset($c['prmId']) && $k['prmId'] == $c['prmId']) {
                            echo "<option value='$k[prmId]' selected>$k[prmNama]</option>";
                        } else {
                            echo "<option value ='$k[prmId]'>$k[prmId]</option>";
                        }
                    }
                    ?>
                </select>
                <br>
                <label>ID Rumah</label>
                <select name="rmhId" class="form-control">
                    <option value="null"></option>
<?php
$sql_rumah = mysql_query("SELECT * FROM rumah");
while ($k = mysql_fetch_assoc($sql_rumah)) {
    if (isset($c['rmhId']) && $k['rmhId'] == $c['rmhId']) {
        echo "<option value='$k[rmhId]' selected>$k[rmhBlok]</option>";
    } else {
        echo "<option value ='$k[rmhId]'>$k[rmhId]</option>";
    }
}
?>
                </select>
                <br>
                <label>ID Bank</label>
                <select name="bankId" class="form-control">
                    <option value="null"></option>
                    <?php
                    $sql_bank = mysql_query("SELECT * FROM bank");
                    while ($k = mysql_fetch_assoc($sql_bank)) {
                        if (isset($c['bankId']) && $k['bankId'] == $c['bankId']) {
                            echo "<option value='$k[bankId]' selected>$k[bankNama]</option>";
                        } else {
                            echo "<option value ='$k[bankId]'>$k[bankId]</option>";
                        }
                    }
                    ?>
                </select>

            </div>
            <br>
            <br>
            <input type="submit" value="Simpan" class="btn btn-lg btn-success">
            <a href="?page=beranda" class="btn btn-lg btn-success">Kembali</a>

        </form>
    </div>
</div>