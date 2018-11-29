<?php
$open="loaisanpham";
require_once __DIR__."/../../layout/header.php";

$loaisanphambus=new LoaiSanPhamBus();
$masp= intval($loaisanphambus->getInput('MaLoaiSanPham'));

    $editsanpham=$loaisanphambus->fetchID($masp);
    if(empty($editsanpham))
    {
        $_SESSION['error']="Dữ liệu không tồn tại";
        ?>
        <script> window.location = "index.php"; </script><?php
    }
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        
        $data=[
            "maloaisanpham"=> $loaisanphambus->postInput('maloai'),
            "tenloaisanpham"=> $loaisanphambus->postInput('tenloai'),
        ];
        $error=[];
        if($loaisanphambus->postInput('maloai')=='' or $loaisanphambus->postInput('tenloai')=='')
        {
            $error['maloai']="mời bạn nhập vào mã loại sản phẩm";
            $error['tenloai']="mời bạn nhập vào tên loại";
        }
        if(empty($error))
        {
                $id_update =$loaisanphambus->update($data,array("MaLoaiSanPham"=>$masp));
                if($id_update >0)
                {
                    $_SESSION['success']="Cập nhật thành công"; ?>
                    <script> window.location = "index.php"; </script><?php
                }
                else
                {
                    $_SESSION['error']="Dữ liệu không thay đỗi"; ?>
                    <script> window.location = "index.php"; </script><?php
                }
        }
      //echo $POST['name'];
    }
 ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Sửa loại sản phẩm
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/tinphp/admin/gui/index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="/tinphp/admin/gui/modules/loaisanpham/index.php">Loại sản phẩm</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sửa loại sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mã loại sản phẩm</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="3" name="maloai" value="<?php echo $editsanpham['MaLoaiSanPham'];?>">
                            <?php if(isset($error['maloai'])): ?>        
                            <p class="text-danger"><?php echo $error['maloai']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Tên loại sản xuất</label>
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="SMART PHONE" name="tenloai" value="<?php echo $editsanpham['TenLoaiSanPham'];?>">
                            <?php if(isset($error['tenloai'])): ?>        
                            <p class="text-danger"><?php echo $error['tenloai']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
 <?php require_once __DIR__."/../../layout/footer.php" ?>