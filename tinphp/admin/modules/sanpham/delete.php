<?php
    $open="sanpham";
    require_once __DIR__."/../../autoload/autoload.php";
    $masp= getInput('MaSanPham');
    $editsanpham=$db->fetchID("sanpham",$masp);
    if(empty($editsanpham))
    {
        $_SESSION['error']="Dữ liệu không tồn tại";
        ?>
        <script> window.location = "index.php"; </script><?php
    }
    $num=$db->delete("sanpham",$masp);
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
    function  getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }
?>