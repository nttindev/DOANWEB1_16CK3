﻿<?php session_start(); ?>
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
        <link href="/fulldoan/gui/public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/fulldoan/gui/public/admin/css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            require_once __DIR__."/../../DAO/db.php";
            require_once __DIR__."/../../DTO/DonDatHang.php";
            require_once __DIR__."/../../BUS/DonDatHangBUS.php";    
            require_once __DIR__."/../../DAO/DonDatHangDAO.php";

            require_once __DIR__."/../../DTO/TaiKhoan.php";
            require_once __DIR__."/../../BUS/TaiKhoanBUS.php";    
            require_once __DIR__."/../../DAO/TaiKhoanDAO.php";

            require_once __DIR__."/../../DTO/HangSanXuat.php";
            require_once __DIR__."/../../BUS/HangSanXuatBUS.php";    
            require_once __DIR__."/../../DAO/HangSanXuatDAO.php";

            require_once __DIR__."/../../DTO/SanPham.php";
            require_once __DIR__."/../../BUS/SanPhamBUS.php";    
            require_once __DIR__."/../../DAO/SanPhamDAO.php";

            require_once __DIR__."/../../DTO/LoaiSanPham.php";
            require_once __DIR__."/../../BUS/LoaiSanPhamBUS.php";    
            require_once __DIR__."/../../DAO/LoaiSanPhamDAO.php";
        ?>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" >
                    <a class="navbar-brand" href="/fulldoan/gui/">HOME</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li>
                         
                           <?php 
                                 if(isset($_SESSION['id_nguoidung']))
                                 {
                                    echo '<a href="../gui/modules/mLogin/exDangxuatAD.php" >Logout</a>';
                                 }
                                else{
                                         echo "<script>window.open('../index.php','_self')</script>";
                                }

                          ?>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="<?php echo isset($open) && $open == 'sanpham' ? 'active' : '' ?>">
                            <a href="/fulldoan/gui/?a=29"><i class="fa fa-list"></i>Quản lý sản phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'loaisanpham' ? 'active' : '' ?>">
                            <a href="/fulldoan/gui/?a=19"><i class="fa fa-list"></i>Quản lý loại sản phẩm</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'hangsanxuat' ? 'active' : '' ?>">
                            <a href="/fulldoan/gui/?a=14"><i class="fa fa-list"></i>Quản lý nhà sản xuất</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'nguoidung' ? 'active' : '' ?>">
                            <a href="/fulldoan/gui/?a=24"><i class="fa fa-list"></i>Quản lý người dùng</a>
                        </li>
                        <li class="<?php echo isset($open) && $open == 'dondathang' ? 'active' : '' ?>">
                            <a href="/fulldoan/gui/?a=7"><i class="fa fa-list"></i>Quản lý đơn đặt hàng</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->