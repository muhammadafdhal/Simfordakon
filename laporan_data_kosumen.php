<html>
    <body onLoad="window.print();">
        <?php
        include 'conn/koneksi.php';
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

        <h2 align="center"><small>LAPORAN DATA KONSUMEN</small></h2>
        <table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">

            <tr>
                <td align="center" bgcolor="#CCCCCC">No</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">Id Konsumen</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">Id Perumahan</td>
                <td width="3%" bgcolor="#CCCCCC" align="center">Id Rumah</td>
                <td width="4%" bgcolor="#CCCCCC" align="center">Id Bank</td>
                <td width="6%" bgcolor="#CCCCCC" align="center">Nama</td>
                <td width="6%" bgcolor="#CCCCCC" align="center">Telepon</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">NoLPA</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">No SP3K</td>
                <td width="8%" bgcolor="#CCCCCC" align="center">Taggal Akad</td>
                <td width="1%" bgcolor="#CCCCCC" align="center">Tanggal Wawancara</td>
                <td width="7%" bgcolor="#CCCCCC" align="center">Alamat</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">KPR</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">No AJB</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">No Sertifikat</td>
                <td width="7%" bgcolor="#CCCCCC" align="center">Tanggal OTS</td>
                <td width="7%" bgcolor="#CCCCCC" align="center">Tanggal LPA</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">No Debit</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">Pencairan</td>
                <td width="10%" bgcolor="#CCCCCC" align="center">Tanggal Pencairan</td>
                <td width="10%" bgcolor="#CCCCCC" align="center">Simpanan</td>
            </tr>
            <?php
            $query = "SELECT * FROM konsumen ORDER by ksmnama";
            $sql = mysql_query($query);
            $total = mysql_num_rows($sql);
            $no = 1;
            while ($data = mysql_fetch_array($sql)) {
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
                    <?php $no++;
                } ?>

            </tbody>
        </table>

    </body>