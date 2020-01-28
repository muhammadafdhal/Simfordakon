<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <a href="?page=tambah_tkg" class="btn btn-lg btn-success">Tambah</a>
    <br>
    <br>
    <table class="table" width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th align="center">No.</th>
                <th align="center">Nama Tukang Rumah</th>
                <th align="center">Alamat Tukang Rumah</th>
                <th align="center">Telepon Tukang Rumah</th>
                <th align="center">Edit</th>
                <th align="center">Hapus</th>

            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM tukang ORDER by tkgNama";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;

        while ($data = mysql_fetch_array($sql)) {
            ?>

        <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['tkgNama']; ?></td>
                    <td><?php echo $data['tkgAlamat']; ?></td>
                    <td><?php echo $data['tkgTelepon']; ?></td>
                    <td><a href="?page=ubah_tkg&tkgId=<?php echo $data['tkgId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <td><a href="?page=hapus_tkg&tkgId=<?php echo $data['tkgId']; ?>" onclick="return confirm('Anda yakin ingin menghapus data Tukang Rumah <?php echo $data['tkgNama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>

                </tr>

                <?php $no++;
            } ?>

        <tbody>
        </tbody>
    </table>
</div>
