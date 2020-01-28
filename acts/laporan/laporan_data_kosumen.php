<html>
<body onLoad="window.print();">
   <?php
   include '../conn/koneksi.php';
   ?>

<style type="text/css">
body {
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
.style1{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;	
}
</style>

			<p align="center">LAPORAN DATA KONSUMEN</p>
   			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	    
   	          <tr>
   	            <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
   	            <td bgcolor="#CCCCCC" align="center">Id Konsumen</td>
   	            <td width="16%" bgcolor="#CCCCCC" align="center">Id Perumahan</td>
   	            <td width="14%" bgcolor="#CCCCCC" align="center">Id Rumah</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Id Bank</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Nama Konsumen</td>
   	            <td width="7%" bgcolor="#CCCCCC" align="center">Telepon Konsumen</td>
                <td width="8%" bgcolor="#CCCCCC" align="center">NoLPA Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">No SP3K Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Taggal Akad Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Tanggal Wawancara Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Alamat Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">KPR Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">No AJB Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">No Sertifikat Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Tanggal OTS Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Tanggal LPA Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">No Debit Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Pencairan Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Tanggal Pencairan Konsumen</td>
                <td width="15%" bgcolor="#CCCCCC" align="center">Simpanan Kosumen</td>
              </tr>
            <?php
				$query = "SELECT * FROM konsumen ORDER by ksmnama";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td height="27" align="center"><?php echo $no; ?></td>
   	            <td align="center"><?php echo $data['ksmId']; ?></a>
   	            <td align="center"><?php echo $data['prmId']; ?></td>
   	            <td align="center"><?php echo $data['rmhId']; ?></td>
                <td align="center"><?php echo $data['bankId']; ?></td>
                <td align="center"><?php echo $data['ksmNama']; ?></td>
                <td align="center"><?php echo $data['ksmTelepon']; ?></td>
               	<td align="center"><?php echo $data['ksmNoLpa']; ?></td>
                <td align="center"><?php echo $data['ksmNosp3k']; ?></td>
                <td align="center"><?php echo $data['ksmTglAkad']; ?></td>
                <td align="center"><?php echo $data['ksmTglWawancara']; ?></td>
                <td align="center"><?php echo $data['ksmAlamat']; ?></td>
                <td align="center"><?php echo $data['ksmKpr']; ?></td>
                <td align="center"><?php echo $data['ksmNoAjb']; ?></td>
                <td align="center"><?php echo $data['ksmNoSertifikat']; ?></td>
                <td align="center"><?php echo $data['ksmTglOts']; ?></td>
                <td align="center"><?php echo $data['ksmTglLpa']; ?></td>
                <td align="center"><?php echo $data['ksmNoDebit']; ?></td>
                <td align="center"><?php echo $data['ksmPcn']; ?></td>
                <td align="center"><?php echo $data['ksmTglPcn']; ?></td>
                <td align="center"><?php echo $data['ksmSimpanan']; ?></td>
                                
              </tr>
            <?php $no++; } ?>
            
            </tbody>
          </table>

</body>