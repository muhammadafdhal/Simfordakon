<?php
include '../conn/koneksi.php';
?>


<div id="page-wrapper">
    <div class="container-fluid">
    <h2 align="center">
            <small>DATA KONSUMEN</small>
        </h2>
    <HR>
    <table class="table" width="300" height="250" align="center" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
               
				<th align="center">No.</th>
                <th align="center">Id Konsumen</th>
                <th align="center">Id Perumahan</th>
                <th align="center">Id Rumah</th>
                <th align="center">Id Bank</th>
				<th align="center">Nama Konsumen</th>
				<th align="center">Telepon Konsumen</th>
				<th align="center">No LPA Konsumen</th>
				<th align="center">No SP3K Konsumen</th>
				<th align="center">Tgl Akad Konsumen</th>
				<th align="center">Tgl OTS Konsumen</th>
				<th align="center">Tgl LPA Konsumen</th>
				<th align="center">Tgl Wawancara Konsumen</th>
				<th align="center">Alamat Konsumen</th>
				<th align="center">KPR Konsumen</th>
				<th align="center">No AJB Konsumen</th>
				<th align="center">No Debit Konsumen</th>
				<th align="center">Pencairan Konsumen</th>
				<th align="center">Tgl Pencairan Konsumen</th>
				<th align="center">No Sertifikat Konsumen</th>
                <th align="center">Simpanan Konsumen</th>
                <th align="center">Edit</th>
                <th align="center">Hapus</th>

            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM konsumen ORDER by ksmId";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;

        while ($data = mysql_fetch_array($sql)) {
            ?>

        <tbody class="table">
		
			<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['ksmId']; ?></td>
					<td><?php echo $data['prmId']; ?></td>
                    <td><?php echo $data['rmhId']; ?></td>
                    <td><?php echo $data['bankId']; ?></td>
                    <td><?php echo $data['ksmNama']; ?></td>
                    <td><?php echo $data['ksmTelepon']; ?></td>
					<td><?php echo $data['ksmNoLpa']; ?></td>
					<td><?php echo $data['ksmNosp3k']; ?></td>
					<td><?php echo $data['ksmTglAkad']; ?></td>
					<td><?php echo $data['ksmTglWawancara']; ?></td>
					<td><?php echo $data['ksmAlamat']; ?></td>
					<td><?php echo $data['ksmKpr']; ?></td>
					<td><?php echo $data['ksmNoAjb']; ?></td>
					<td><?php echo $data['ksmNoSertifikat']; ?></td>
					<td><?php echo $data['ksmTglOts']; ?></td>
					<td><?php echo $data['ksmTglLpa']; ?></td>
					<td><?php echo $data['ksmNoDebit']; ?></td>
					<td><?php echo $data['ksmPcn']; ?></td>
					<td><?php echo $data['ksmTglPcn']; ?></td>
					<td><?php echo $data['ksmSimpanan']; ?></td>
                    <td><a href="?page=ubah_konsumen&ksmId=<?php echo $data['ksmId']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <td><a href="?page=hapus_konsumen&ksmId=<?php echo $data['ksmId']; ?>" onclick="return confirm('Anda yakin ingin menghapus Data Konsumen<?php echo $data['ksmNama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
				
              </tr>

                <?php $no++;
            } ?>

        <tbody>
        </tbody>
    </table>
    <a href="?page=tambah_konsumen" class="btn btn-lg btn-success">Tambah</a>
    </div>
</div>
