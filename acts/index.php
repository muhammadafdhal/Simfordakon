<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Silahkan login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Sistem Informasi Data Konsumen</title>

            <!-- Bootstrap Core CSS -->
            <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../assets/css/sb-admin.css" rel="stylesheet">

            <!-- Morris Charts CSS -->
            <link href="../assets/css/morris.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body>

            <div id="wrapper">

                <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">Sistem Informasi Data Konsumen</div>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?= $_SESSION['level']; ?></span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <a href="beranda/logout.php"><div align="center">Log Out</div></a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                                <a href="index.php" class="menu"> BERANDA</a>
                            </li>
                            <li>
                                <a href="?page=perumahan"> PERUMAHAN</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#demo"> TUKANG </a>
                                <ul id="demo" class="collapse">
                                    <li>
                                        <a href="?page=tukang">TUKANG RUMAH</a>
                                    </li>
                                    <li>
                                        <a href="?page=sumur">TUKANG SUMUR</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=bank"> BANK</a>
                            </li>
                            <li>
                                <a href="?page=pilihan"> PILIHAN TAHAPAN</a>
                            </li>
                            <li>
                                <a href="?page=rumah"> RUMAH</a>
                            </li>

                            <?php if ($_SESSION['level'] == 'Admin') { ?>
                                <li><a href="?page=kosumen"> FORM KONSUMEN</a></li>
                            <?php } ?>
                            <li>
                                <a href="?page=laporan"> LAPORAN </a>

                            </li>
                            <?php if ($_SESSION['level'] == 'Admin') { ?>
                                <li><a href="?page=admin"> ADMIN</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>

                <?php
                error_reporting(0);
                switch ($_GET['page']) {
                    default:
                        include "beranda/beranda.php";
                        break;

                    // menu perumahan				
                    case "perumahan";
                        include "perumahan/tabel.php";
                        break;
                    case "tambah";
                        include "perumahan/tambah.php";
                        break;
                    case "proses";
                        include "perumahan/proses.php";
                        break;
                    case "ubah";
                        include "perumahan/ubah.php";
                        break;
                    case "proses_edit";
                        include "perumahan/proses_edit.php";
                        break;
                    case "hapus";
                        include "perumahan/hapus.php";
                        break;

                    // menu tukang
                    case "tukang";
                        include "tukang/tabel_tkg.php";
                        break;
                    case "tambah_tkg";
                        include "tukang/tambah_tkg.php";
                        break;
                    case "proses_tkg";
                        include "tukang/proses_tkg.php";
                        break;
                    case "ubah_tkg";
                        include "tukang/ubah_tkg.php";
                        break;
                    case "proses_edit_tkg";
                        include "tukang/proses_edit_tkg.php";
                        break;
                    case "hapus_tkg";
                        include "tukang/hapus_tkg.php";
                        break;


                    // menu Sumur
                    case "sumur";
                        include "sumur/tabel_smr.php";
                        break;
                    case "tambah_smr";
                        include "sumur/tambah_smr.php";
                        break;
                    case "proses_smr";
                        include "sumur/proses_smr.php";
                        break;
                    case "ubah_smr";
                        include "sumur/ubah_smr.php";
                        break;
                    case "proses_edit_smr";
                        include "sumur/proses_edit_smr.php";
                        break;
                    case "hapus_smr";
                        include "sumur/hapus_smr.php";
                        break;

                    // menu Bank
                    case "bank";
                        include "bank/tabel_bank.php";
                        break;
                    case "tambah_bank";
                        include "bank/tambah_bank.php";
                        break;
                    case "proses_bank";
                        include "bank/proses_bank.php";
                        break;
                    case "ubah_bank";
                        include "bank/ubah_bank.php";
                        break;
                    case "proses_edit_bank";
                        include "bank/proses_edit_bank.php";
                        break;
                    case "hapus_bank";
                        include "bank/hapus_bank.php";
                        break;

                    // menu Pilihan
                    case "pilihan";
                        include "pilihan/tabel_plh.php";
                        break;
                    case "tambah_plh";
                        include "pilihan/tambah_plh.php";
                        break;
                    case "proses_plh";
                        include "pilihan/proses_plh.php";
                        break;
                    case "ubah_plh";
                        include "pilihan/ubah_plh.php";
                        break;
                    case "proses_edit_plh";
                        include "pilihan/proses_edit_plh.php";
                        break;
                    case "hapus_plh";
                        include "pilihan/hapus_plh.php";
                        break;

                    // menu Rumah
                    case "rumah";
                        include "rumah/tabel_rmh.php";
                        break;
                    case "tambah_rmh";
                        include "rumah/tambah_rmh.php";
                        break;
                    case "proses_rmh";
                        include "rumah/proses_rmh.php";
                        break;
                    case "ubah_rmh";
                        include "rumah/ubah_rmh.php";
                        break;
                    case "proses_edit_rmh";
                        include "rumah/proses_edit_rmh.php";
                        break;
                    case "hapus_rmh";
                        include "rumah/hapus_rmh.php";
                        break;

                    // menu Konsumen
                    case "konsumen";
                        include "konsumen/tambah_konsumen.php";
                        break;
                    case "proses_konsumen";
                        include "konsumen/proses_konsumen.php";
                        break;
                    case "ubah_konsumen";
                        include "konsumen/ubah_konsumen.php";
                        break;
                    case "proses_edit_konsumen";
                        include "konsumen/proses_edit_kosumen.php";
                        break;
                    case "hapus_kosumen";
                        include "konsumen/hapus_konsumen.php";
                        break;

                    //menu admin
                    case "admin";
                        include "admin/tabel_adm.php";
                        break;
                    case "tambah_adm";
                        include "admin/tambah_adm.php";
                        break;
                    case "proses_adm";
                        include "admin/proses_adm.php";
                        break;
                    case "ubah_adm";
                        include "admin/ubah_adm.php";
                        break;
                    case "proses_edit_adm";
                        include "admin/proses_edit_adm.php";
                        break;
                    case "hapus_adm";
                        include "admin/hapus_adm.php";
                        break;



                    // laporan
                    case "laporan";
                        include "laporan/laporan.php";
                        break;

                    // User
                    case "user";
                        include "user_data.php";
                        break;
                    case "user_search";
                        include "user_search.php";
                        break;
                    case "user_input";
                        include "user_input.php";
                        break;
                    case "user_proses";
                        include "user_proses.php";
                        break;
                    case "user_detil";
                        include "user_detil.php";
                        break;
                    case "user_edit";
                        include "user_edit.php";
                        break;
                    case "user_proses_edit";
                        include "user_proses_edit.php";
                        break;
                    case "user_hapus";
                        include "user_hapus.php";
                        break;
                }
                ?>

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="../assets/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="../dist/js/bootstrap.min.js"></script>

            <!-- Morris Charts JavaScript -->
            <script src="../dist/js/raphael.min.js"></script>
            <script src="../dist/js/morris.min.js"></script>
            <script src="../dist/js/morris-data.js"></script>

        </body>

    </html>

<?php } ?>
