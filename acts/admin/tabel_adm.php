<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <a href="?page=tambah_adm" class="btn btn-lg btn-success">Tambah</a>
    <br>
    <br>
    <table class="table" width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th align="center">No.</th>
                <th align="center">Nama Admin</th>
                <th align="center">UserName</th>
                <th align="center">Password</th>
                <th align="center">Level</th>
                <th align="center">Edit</th>
                <th align="center">Hapus</th>

            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM login ORDER by nama";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;

        while ($data = mysql_fetch_array($sql)) {
            ?>

        <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['loginName']; ?></td>
                    <td><?php echo $data['loginPassword']; ?></td>
                    <td><?php echo $data['level']; ?></td>
                    <td><a href="?page=ubah_adm&loginId=<?php echo $data['loginId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <td><a href="?page=hapus_adm&loginId=<?php echo $data['loginId']; ?>" onclick="return confirm('Anda yakin ingin menghapus data Pengguna <?php echo $data['nama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>

                </tr>

                <?php $no++;
            } ?>

        <tbody>
        </tbody>
    </table>
</div>
