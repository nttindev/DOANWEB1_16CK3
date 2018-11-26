<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>QUẢN TRỊ ADMIN</title>
        <!-- Bootstrap Core CSS -->
        <link href="/tinphp/public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/tinphp/public/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="/tinphp/public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">HOME</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Logout</a>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="<?php echo isset($open) && $open == 'sanpham' ? 'active' : '' ?>">
                            <a href="/tinphp/admin/modules/sanpham/"><i class="fa fa-list"></i>Danh sách sản phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'loaisanpham' ? 'active' : '' ?>">
                            <a href="/tinphp/admin/modules/loaisanpham/"><i class="fa fa-list"></i>Danh sách loại sản phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'hangsanxuat' ? 'active' : '' ?>">
                            <a href="/tinphp/admin/modules/hangsanxuat/"><i class="fa fa-list"></i>Danh sách nhà sản xuất</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'nguoidung' ? 'active' : '' ?>">
                            <a href="/tinphp/admin/modules/nguoidung/"><i class="fa fa-list"></i>Danh sách tk người dùng</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->