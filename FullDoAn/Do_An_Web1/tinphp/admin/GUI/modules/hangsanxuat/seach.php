<?php
$open="hangsanxuat";
require_once __DIR__."/../../layout/header.php";

$loaisanphambus=new HangSanXuatBUS();

$masp=$loaisanphambus->postInput('name11');
$loaisanphambus=$loaisanphambus->TimKiem($masp); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách nhà sản xuất
                                <a href="add.php" class="btn btn-success">Thêm loại nhà sản xuất</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/tinphp/admin/gui/index.php">Dashboard</a>
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
                    <th>Bị Xóa</th>
                    <th>Thêm Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($loaisanphambus as $item):?>
                <tr>
                    <td><?php echo $item->MaHangSanXuat ?></td>
                    <td><?php echo $item->TenHangSanXuat ?></td>
                    <td><img src="images/<?php echo $item->LogoURL ?>" alt="" width="50" height="75"></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="edit.php?MaHangSanXuat=<?php echo $item->MaHangSanXuat?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="delete.php?MaHangSanXuat=<?php echo $item->MaHangSanXuat?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

<?php require_once __DIR__."/../../layout/footer.php" ?>