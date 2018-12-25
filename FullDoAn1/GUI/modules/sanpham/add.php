<?php
    $open="sanpham";
    require_once __DIR__."/../../layout/header.php";
    $sanphambus=new SanPhamBus();
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        
        $tenSanPham=$sanphambus->postInput('tensanpham');
        $anhURL=$sanphambus->postInput('anhurl');
        $giaSanPham= $sanphambus->postInput('giasanpham');
        $ngayNhap= $sanphambus->postInput('ngaynhap');
        $slt= $sanphambus->postInput('ton');
        $moTa = $sanphambus->postInput('mota');
        $xuatXu= $sanphambus->postInput('xuatxu');
        $maLoaiSanPham= $sanphambus->postInput('maloai');
        $maHangSanXuat= $sanphambus->postInput('mahang');
        $biXoa= $sanphambus->postInput('bixoa');
        $error=[];
        if($tenSanPham=='' or $giaSanPham=='' or $anhURL==''
        or $ngayNhap==''or $moTa==''or $xuatXu=='' 
        or $maLoaiSanPham==''or $maHangSanXuat==''or $biXoa=='' or $slt=='')
        {
            $error['tensanpham']="mời bạn nhập vào tên sản phẩm";
            $error['mahang']="mời bạn nhập vào mã hãng";
            $error['maloai']="mời bạn nhập vào mã loại sản phẩm";
            $error['anhurl']="mời bạn nhập vào ảnh url sản phẩm";
            $error['giasanpham']="mời bạn nhập vào giá sản phẩm";
            $error['mota']="mời bạn nhập vào mô tả sản phẩm";
            $error['xuatxu']="mời bạn nhập vào xuất xứ sản phẩm";
            $error['ngaynhap']="mời bạn nhập vào ngày nhập sản phẩm";
            $error['bixoa']="mời bạn nhập vào tt sản phẩm";
            $error['ton']="mời bạn nhập vào số lượng tồn sản phẩm";
        }
        if(empty($error))
        {
                    $name = $sanphambus->fileInput('anhurl');
                    $tmp_name = $sanphambus->tfileInput('anhurl');
                    move_uploaded_file($tmp_name, $name);
                    $sanphambus->Insert_With_SanPham($tenSanPham,$anhURL,$giaSanPham,$ngayNhap,$slt,$moTa,$xuatXu,$maLoaiSanPham,$maHangSanXuat,$biXoa); ?>
                    <script> window.location = "index.php"; </script><?php
        }
    }
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Thêm mới sản phẩm
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="/fulldoan/gui/index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="/fulldoan/tinphp/admin/gui/modules/sanpham/index.php">Sản phẩm</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Thêm sản phẩm
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên sản phẩm</label>

                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="HuaWei Mate 20 black" name="tensanpham">
                            <?php if(isset($error['tensanpham'])): ?>        
                            <p class="text-danger"><?php echo $error['tensanpham']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ảnh URl</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="anhurl">
                            <?php if(isset($error['anhurl'])): ?>        
                            <p class="text-danger"><?php echo $error['anhurl']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="giasanpham">
                            <?php if(isset($error['giasanpham'])): ?>        
                            <p class="text-danger"><?php echo $error['giasanpham']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ngày nhập</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2018-11-29" name="ngaynhap">
                            <?php if(isset($error['ngaynhap'])): ?>        
                            <p class="text-danger"><?php echo $error['ngaynhap']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Số lượng tồn</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="ton">
                            <?php if(isset($error['ton'])): ?>        
                            <p class="text-danger"><?php echo $error['ton']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô tả</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"></textarea>
                            <?php if(isset($error['mota'])): ?>        
                            <p class="text-danger"><?php echo $error['mota']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Xuất Xứ</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Trung Quốc" name="xuatxu">
                            <?php if(isset($error['xuatxu'])): ?>        
                            <p class="text-danger"><?php echo $error['xuatxu']?></p>
                            <?php endif ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mã loại sản phẩm</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="maloai">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            </select>
                            <?php if(isset($error['maloai'])): ?>        
                            <p class="text-danger"><?php echo $error['maloai']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mã hãng sản xuất</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="mahang">
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            </select>
                            <?php if(isset($error['mahang'])): ?>        
                            <p class="text-danger"><?php echo $error['mahang']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Bị xóa</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="bixoa">
                            <?php if(isset($error['bixoa'])): ?>        
                            <p class="text-danger"><?php echo $error['bixoa']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
 <?php require_once __DIR__."/../../layout/footer.php" ?>