<?php 
$open="nguoidung";
require_once __DIR__."/../../autoload/autoload.php";
$sanpham=$db->fetchAll("hangsanxuat"); ?>

<?php require_once __DIR__."/../..//layouts/header.php";
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách nhà sản xuất
                                <a href="add.php" class="btn btn-success">Thêm loại nhà sản xuất</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="http://localhost:8080/tinphp/admin/index.php">Home</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Loại nhà sản xuất
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                            <?php   
                                if(isset($_SESSION['success'])): ?>
                                    <div class="lert alert-succsess">
                                    <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                            <?php endif ;?>
                            <?php   
                                if(isset($_SESSION['error'])): ?>
                                    <div class="lert alert-danger">
                                    <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                            <?php endif ;?>
                        </div>
                    </div>
                    <!-- /.row -->
<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã hãng sản phẩm</th>
                    <th>Tên hãng sản phẩm</th>
                    <th>LogoURL</th>
                    <th>Thêm Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sanpham as $item):?>
                <tr>
                    <td><?php echo $item['MaHangSanXuat'] ?></td>
                    <td><?php echo $item['TenHangSanXuat'] ?></td>
                    <td><?php echo $item['LogoURL'] ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="edit.php?MaHangSanXuat=<?php echo $item['MaHangSanXuat']?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="delete.php?MaHangSanXuat=<?php echo $item['MaHangSanXuat']?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

 <?php require_once __DIR__."/../../layouts/footer.php" ?>