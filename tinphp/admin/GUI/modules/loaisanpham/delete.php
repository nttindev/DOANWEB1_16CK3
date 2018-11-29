<?php
    session_start();
    $open="loaisanpham";
    require_once __DIR__."/../../../bus/LoaiSanPhamBUS.php";
    require_once __DIR__."/../../../dao/db.php";
    require_once __DIR__."/../../../dao/loaisanphamdao.php";

    $loaisanphambus=new LoaiSanPhamBus();
    $masp= $loaisanphambus->getInput('MaLoaiSanPham');
    $editsanpham=$loaisanphambus->fetchID($masp);
    if(empty($editsanpham))
    {
        $_SESSION['error']="Dữ liệu không tồn tại";
        ?>
        <script> window.location = "index.php"; </script><?php
    }
    $num=$loaisanphambus->delete($masp);
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