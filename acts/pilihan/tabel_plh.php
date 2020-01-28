<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <div class="container-fluid">
    <h2 align="center">
            <small>DATA PILIHAN</small>
        </h2>
    <HR>
    <table class="table" width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th align="center">No.</th>
                <th align="center">Nama Pilihan</th>
                <th align="center">Jarak</th>
                <th align="center">Edit</th>
                <th align="center">Hapus</th>

            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM pilihan ORDER by pilihanNama";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;

        while ($data = mysql_fetch_array($sql)) {
            ?>

        <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['pilihanNama']; ?></td>
                    <td><?php echo $data['pilihanJarak']; ?></td>
                    <td><a href="?page=ubah_plh&pilihanId=<?php echo $data['pilihanId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <td><a href="?page=hapus_plh&pilihanId=<?php echo $data['pilihanId']; ?>" onclick="return confirm('Anda yakin ingin menghapus data Tahapan Pilihan <?php echo $data['pilihanNama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>

                </tr>

                <?php $no++;
            } ?>

        <tbody>
        </tbody>
    </table>
    <a href="?page=tambah_plh" class="btn btn-lg btn-success">Tambah</a>
    </div>
</div>
