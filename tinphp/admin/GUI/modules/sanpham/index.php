<?php
$open="sanpham";
require_once __DIR__."/../../layout/header.php";

$sanphambus=new SanPhamBus();

$sanphambus=$sanphambus->fetchAll(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách sản phẩm
                                <a href="add.php" class="btn btn-success">Thêm sản phẩm</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/tinphp/admin/gui/index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Ảnh URL</th>
                    <th>Giá SP</th>
                    <th>Ngày Nhập</th>
                    <th>Số lượng tồn</th>
                    <th>Số lượng bán</th>
                    <th>Số lượt xem</th>
                    <th>Mô tả SP</th>
                    <th>Xuất xứ SP</th>
                    <th>Mã loại SP</th>
                    <th>Mã hãng SP</th>
                    <th>Bị Xóa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sanphambus as $item):?>
                <tr>
                    <td><?php echo $item->MaSanPham  ?></td>
                    <td><?php echo $item->TenSanPham ?></td>
                    <td><img src="images/<?php echo $item->AnhURL ?>" alt="" width="50" height="75"></td>
                    <td><?php echo $item->GiaSanPham ?></td>
                    <td><?php echo $item->NgayNhap ?></td>
                    <td><?php echo $item->SoLuongTon ?></td>
                    <td><?php echo $item->SoLuongBan ?></td>
                    <td><?php echo $item->SoLuotXem?></td>
                    <td><?php echo $item->MoTa ?></td>
                    <td><?php echo $item->XuatXu?></td>
                    <td><?php echo $item->MaLoaiSanPham ?></td>
                    <td><?php echo $item->MaHangSanXuat ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="edit.php?MaSanPham=<?php echo $item->MaSanPham?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="delete.php?MaSanPham=<?php echo $item->MaSanPham?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

 <?php require_once __DIR__."/../../layout/footer.php" ?>