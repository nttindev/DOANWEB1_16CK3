<?php
    $open="sanpham";
    require_once __DIR__."/../../layout/header.php";
    $sanphambus=new SanPhamBus();
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $data=[
            "maloaisanpham"=> $sanphambus->postInput('maloai'),
            "mahangsanxuat"=> $sanphambus->postInput('mahang'),
            "tensanpham"=> $sanphambus->postInput('name'),
            "giasanpham"=> $sanphambus->postInput('gia'),
            "mota"=> $sanphambus->postInput('mota'),
            "anhurl"=> $sanphambus->postInput('anhurl'),
            "tukhoa"=> $sanphambus->postInput('tukhoa'),
            "xuatxu"=> $sanphambus->postInput('xuatxu'),
            "ngaydang"=> $sanphambus->postInput('ngaydang')
        ];
        $error=[];
        if($sanphambus->postInput('maloai')=='' or $sanphambus->postInput('mahang')==''or $sanphambus->postInput('name')==''
        or $sanphambus->postInput('gia')==''or $sanphambus->postInput('mota')==''or $sanphambus->postInput('anhurl')=='' or $sanphambus->postInput('tukhoa')==''or $sanphambus->postInput('xuatxu')=='')
        {
            $error['name']="mời bạn nhập vào tên sản phẩm";
            $error['mahang']="mời bạn nhập vào mã hãng";
            $error['name']="mời bạn nhập vào tên sản phẩm";
            $error['gia']="mời bạn nhập vào giá sản phẩm";
            $error['mota']="mời bạn nhập vào mô tả sản phẩm";
            $error['anhurl']="mời bạn chọn ảnhurl sản phẩm";
            $error['tukhoa']="mời bạn nhập vào từ khóa sản phẩm";
            $error['xuatxu']="mời bạn nhập vào xuất xứ sản phẩm";
            $error['ngaydang']="mời bạn nhập vào ngày đăng sản phẩm";
        }
        if(empty($error))
        {
                $id_insert =$sanphambus->insert($data);
                if($id_insert >0)
                {
                    $_SESSION['success']="Thêm mới thành công"; ?>
                    <script> window.location = "index.php"; </script><?php
                } 
                else
                {
                    $_SESSION['error']="Thêm mới thất bại";
                    ?>
                    <script> window.location = "index.php"; </script><?php
                }
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
                                    <i class="fa fa-dashboard"></i>  <a href="/tinphp/admin/gui/index.php">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="/tinphp/admin/gui/modules/sanpham/index.php">Sản phẩm</a>
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
                            <label for="exampleFormControlSelect1">Mã loại sản phẩm</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="maloai">
                            <option>1</option>
                            <option>2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Mã hãng sản xuất</label>
                            <select multiple class="form-control" id="exampleFormControlSelect2" name="mahang">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            </select>
                            <?php if(isset($error['mahang'])): ?>        
                            <p class="text-danger"><?php echo $error['mahang']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên sản phẩm</label>

                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="HuaWei Mate 20 black" name="name">
                            <?php if(isset($error['name'])): ?>        
                            <p class="text-danger"><?php echo $error['name']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="gia">
                            <?php if(isset($error['gia'])): ?>        
                            <p class="text-danger"><?php echo $error['gia']?></p>
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
                            <label for="exampleFormControlFile1">Ảnh URl</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="anhurl">
                            <?php if(isset($error['anhurl'])): ?>        
                            <p class="text-danger"><?php echo $error['anhurl']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">từ khóa</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pro grean" name="tukhoa">
                            <?php if(isset($error['tukhoa'])): ?>        
                            <p class="text-danger"><?php echo $error['tukhoa']?></p>
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
                            <label for="exampleFormControlInput1">Ngày đăng</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2018-11-29" name="ngaydang">
                            <?php if(isset($error['ngaydang'])): ?>        
                            <p class="text-danger"><?php echo $error['ngaydang']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
 <?php require_once __DIR__."/../../layout/footer.php" ?>