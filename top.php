<?php session_start() ?>
<?php $datarss = require 'getrss.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Statistics Command Center</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
</head>

<body>

    <div id="wrapper" class="container">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Statistics Command Center</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php if(!isset($_SESSION['email'])) : ?>
                        <li>
                            <a href="login.html"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                        </li>
                        <?php endif ?>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if(isset($_SESSION['email'])) : ?>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tabel3.php">Inflasi</a>
                                </li>
                                <li>
                                    <a href="tabel2.php">Jumlah UMK UMB</a>
                                </li>
                                <li>
                                    <a href="tabel.php">Harga Barang Eceran</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>