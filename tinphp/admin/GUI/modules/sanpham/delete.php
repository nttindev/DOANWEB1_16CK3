<?php
    session_start();
    $open="sanpham";
    require_once __DIR__."/../../../bus/SanPhamBUS.php";
    require_once __DIR__."/../../../dao/db.php";
    require_once __DIR__."/../../../dao/sanphamdao.php";
    $sanphambus=new SanPhamBus();
    $masp= $sanphambus->getInput('MaSanPham');
    $editsanpham=$sanphambus->fetchID($masp);
    if(empty($editsanpham))
    {
        $_SESSION['error']="Dữ liệu không tồn tại";
        ?>
        <script> window.location = "index.php"; </script><?php
    }
    $num=$sanphambus->delete($masp);
    if($num>0)
    {
        $_SESSION['success']="Xóa thành công"; ?>
        <script> window.location = "index.php"; </script><?php
    }
    else
    {
        $_SESSION['error']="Xóa thất bại";
        ?>
        <script> window.location = "index.php"; </script><?php
    }
?>