<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <div class="container-fluid">
    <h2 align="center">
            <small>DATA RUMAH</small>
        </h2>
    <HR>
    <table class="table" width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th align="center">No.</th>
                <th align="center">Blok</th>
                <th align="center">Type Rumah</th>
                <th align="center">Id Pilihan</th>
                <th align="center">Luas Rumah</th>
                <th align="center">Id Tukang Rumah</th>
                <th align="center">Id Tukang Sumur</th>
                <th align="center">Edit</th>
                <th align="center">Hapus</th>

            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM rumah ORDER by rmhBlok";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;

        while ($data = mysql_fetch_array($sql)) {
            ?>

        <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['rmhBlok']; ?></td>
                    <td><?php echo $data['rmhType']; ?></td>
                    <td><?php echo $data['pilihanId']; ?></td>
                    <td><?php echo $data['rmhLuas']; ?></td>
                    <td><?php echo $data['tkgId']; ?></td>
                    <td><?php echo $data['sumurId']; ?></td>
                    <td><a href="?page=ubah_rmh&rmhId=<?php echo $data['rmhId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <td><a href="?page=hapus_rmh&rmhId=<?php echo $data['rmhId']; ?>" onclick="return confirm('Anda yakin ingin menghapus Data Rumah <?php echo $data['rmhBlok']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>

                </tr>

                <?php $no++;
            } ?>

        <tbody>
        </tbody>
    </table>
    <a href="?page=tambah_rmh" class="btn btn-lg btn-success">Tambah</a>
    </div>
</div>
