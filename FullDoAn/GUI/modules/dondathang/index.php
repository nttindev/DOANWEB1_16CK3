<?php
$open="dondathang";
require_once __DIR__."/../../layout/header.php";

$dondathang=new DonDatHangBus();

$dondathang=$dondathang->fetchAll(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách đơn đặt hàng
                                <a href="add.php" class="btn btn-success">Thêm đơn đặt hàng</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/fulldoan/gui/index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Đơn đặt hàng
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
                        <form action="seach.php" method="POST">
                                <input class="pull-right" type="text" name="name11"><br><br>
                                <button type="submit" class="btn btn-primary pull-right">Tìm kiếm</button>
                                </form>
                        </div>
    </div>
</div>
<div class="row">

    <div class="col-lg-12">

        <div class="table-responsive">
            
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã đặt hàng</th>
                    <th>Mã người dùng</th>
                    <th>Ngày lập</th>
                    <th>Tổng thành tiền</th>
                    <th>Tình trạng</th>
                    <th>Bị xóa</th>
                    <th>Sửa xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dondathang as $item):?>
                <tr>
                    <td><?php echo $item->MaDatHang ?></td>
                    <td><?php echo $item->MaNguoiDung ?></td>
                    <td><?php echo $item->NgayLap ?></td>
                    <td><?php echo number_format($item->TongThanhTien) ?></td>
                    <td><?php echo $item->TinhTrang ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="edit.php?MaDonDatHang=<?php echo $item->MaDatHang?>">Duyệt</a>
                        <a class="btn btn-xs btn-danger" href="delete.php?MaDonDatHang=<?php echo $item->MaDatHang?>">Xóa</a>
                        <a class="btn btn-xs btn-info" href="ct.php?MaDonDatHang=<?php echo $item->MaDatHang?>">Xem</a>
                        <a class="btn btn-xs btn-success" href="sua.php?MaDonDatHang=<?php echo $item->MaDatHang?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="delete1.php?MaDonDatHang=<?php echo $item->MaDatHang?>">Xóa NC</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

 <?php require_once __DIR__."/../../layout/footer.php" ?>