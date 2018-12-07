<?php
$open="nguoidung";
require_once __DIR__."/../../layout/header.php";

$taikhoan=new TaiKhoanBUS();

$taikhoan=$taikhoan->fetchAll(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Danh sách tài khoản
                                <a href="add.php" class="btn btn-success">Thêm tài khoản</a>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/tinphp/admin/gui/index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Tài khoản
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
                    <th>Mã người dùng</th>
                    <th>Tên người dùng</th>
                    <th>Tên đăng nhập</th>
                    <th>Ngày sinh</th>
                    <th>nơi sinh</th>
                    <th>mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Bị xóa</th>
                    <th>Sửa Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($taikhoan as $item):?>
                <tr>
                    <td><?php echo $item->MaNguoiDung ?></td>
                    <td><?php echo $item->TenNguoiDung ?></td>
                    <td><?php echo $item->TenDangNhap ?></td>
                    <td><?php echo $item->NgaySinh ?></td>
                    <td><?php echo $item->NoiSinh ?></td>
                    <td><?php echo $item->MatKhau ?></td>
                    <td><?php echo $item->SDT ?></td>
                    <td><?php echo $item->BiXoa ?></td>
                    <td>
                        <a class="btn btn-xs btn-info" href="edit.php?MaNguoidung=<?php echo $item->MaNguoiDung?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" href="delete.php?MaNguoidung=<?php echo $item->MaNguoiDung?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
</table>            

<?php require_once __DIR__."/../../layout/footer.php" ?>