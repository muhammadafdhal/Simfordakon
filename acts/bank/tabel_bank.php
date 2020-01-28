<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <?php if ($_SESSION['level'] == 'Admin') { ?>
    <a href="?page=tambah_bank" class="btn btn-lg btn-success">Tambah</a><?php } ?>
    <br>
    <br>
    <table class="table" width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th align="center">No.</th>
                <th align="center">Nama Bank</th>
                <th align="center">Alamat Bank</th>
                <th align="center">Telepon Bank</th>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                <th align="center">Edit</th>
                <?php } ?>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                <th align="center">Hapus</th>
                <?php } ?>

            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM bank ORDER by bankNama";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;

        while ($data = mysql_fetch_array($sql)) {
            ?>

        <tbody class="table">
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['bankNama']; ?></td>
                    <td><?php echo $data['bankAlamat']; ?></td>
                    <td><?php echo $data['bankTelepon']; ?></td>
                    <?php if ($_SESSION['level'] == 'Admin') { ?>
                    <td><a href="?page=ubah_bank&bankId=<?php echo $data['bankId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <?php } ?>
                    <?php if ($_SESSION['level'] == 'Admin') { ?>
                    <td><a href="?page=hapus_bank&bankId=<?php echo $data['bankId']; ?>" onclick="return confirm('Anda yakin ingin menghapus data Bank <?php echo $data['bankNama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
                    <?php } ?>
                </tr>

                <?php $no++;
            } ?>

        <tbody>
        </tbody>
    </table>
</div>
