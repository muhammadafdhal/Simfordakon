<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <div class="col-lg-12">
                <ol class="breadcrumb" align ="center">
                    <li>
                        <h4>DATA PERUMAHAN</h4>
                    </li>
                </ol>
            </div>
    <div class="container-fluid">
        <table class="table" align="center">
            
               
                    <th>No.</th>
                    <th>Nama Perumahan</th>
                    <th>Alamat Perumahan</th>
                    <?php if ($_SESSION['level'] == 'Admin') { ?>
                    <th>Edit</th>
                    <?php } ?>
                    <?php if ($_SESSION['level'] == 'Admin') { ?>
                    <th>Hapus</th>
                    <?php } ?>

            <?php
            $query = "SELECT * FROM perumahan ORDER by prmNama";
            $sql = mysql_query($query);
            $total = mysql_num_rows($sql);
            $no = 1;

            while ($data = mysql_fetch_array($sql)) {
                ?>

                <tbody class="table">
                    
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['prmNama']; ?></td>
                        <td><?php echo $data['prmAlamat']; ?></td>
                        <?php if ($_SESSION['level'] == 'Admin') { ?>
                        <td><a href="?page=ubah&prmId=<?php echo $data['prmId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                        <?php } ?>
                        <?php if ($_SESSION['level'] == 'Admin') { ?>
                        <td><a href="?page=hapus&prmId=<?php echo $data['prmId']; ?>" onclick="return confirm('Anda yakin ingin menghapus data perumahan <?php echo $data['prmNama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
                        <?php } ?>
        </tbody>

                    <?php $no++;
                }
                ?>
        </table>
        <?php if ($_SESSION['level'] == 'Admin') { ?>
                                <a href="?page=tambah" class="btn btn-lg btn-success">Tambah</a>
                            <?php } ?>
    </div>
</div>
