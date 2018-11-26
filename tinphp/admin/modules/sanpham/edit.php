<?php 
    $open='sanpham';
    //include "../../autoload/autoload.php";
    require_once __DIR__."/../../autoload/autoload.php"; //E:\xampp32\htdocs\tinphp\admin\autoload../../liberies/Database.php  WTF
    $masp= intval(getInput('MaSanPham'));

    $editsanpham=$db->fetchID("sanpham",$masp);
    if(empty($editsanpham))
    {
        $_SESSION['error']="Dữ liệu không tồn tại";
        ?>
        <script> window.location = "index.php"; </script><?php
    }
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        
        $data=[
            "maloaisanpham"=> postInput('maloai'),
            "mahangsanxuat"=> postInput('mahang'),
            "tensanpham"=> postInput('name'),
            "giasanpham"=> postInput('gia'),
            "mota"=> postInput('mota'),
            "anhurl"=> postInput('anhurl'),
            "tukhoa"=> postInput('tukhoa'),
            "xuatxu"=> postInput('xuatxu'),
        ];
        $error=[];
        if(postInput('maloai')=='' or postInput('mahang')==''or postInput('name')==''
        or postInput('gia')==''or postInput('mota')==''or postInput('anhurl')=='' or postInput('tukhoa')==''or postInput('xuatxu')=='')
        {
            $error['name']="mời bạn nhập vào tên sản phẩm";
            $error['mahang']="mời bạn nhập vào mã hãng";
            $error['name']="mời bạn nhập vào tên sản phẩm";
            $error['gia']="mời bạn nhập vào giá sản phẩm";
            $error['mota']="mời bạn nhập vào mô tả sản phẩm";
            $error['anhurl']="mời bạn chọn ảnhurl sản phẩm";
            $error['tukhoa']="mời bạn nhập vào từ khóa sản phẩm";
            $error['xuatxu']="mời bạn nhập vào xuất xứ sản phẩm";
        }
        if(empty($error))
        {
                $id_update =$db->update('sanpham', $data,array("MaSanPham"=>$masp));
                if($id_update >0)
                {
                    $_SESSION['success']="Cập nhật thành công"; ?>
                    <script> window.location = "index.php"; </script><?php
                }
                else
                {
                    $_SESSION['error']="Dữ liệu không thay đỗi"; ?>
                    <script> window.location = "index.php"; </script> <?php
                }
        }
      //echo $POST['name'];
    }
    // sai link import file roi. Goi ham no bao ko tim thay kia. noi chung xong roi do.
    // me, em chua add file fuction.php vao, sao no cahy
    function postInput($string)
    {
        $xxx = $string.'';
        return isset($_POST[$string]) ? $_POST[$string] : '';
    }
     
        function  getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }
        function xss_clean($data)
        {
            // Fix &entity\n;
            $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
            $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
            $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
            $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

            // Remove any attribute starting with "on" or xmlns
            $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

            // Remove javascript: and vbscript: protocols
            $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
            $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
            $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

            // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
            $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
            $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
            $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

            // Remove namespaced elements (we do not need them)
            $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

            do
            {
                // Remove really unwanted tags
                $old_data = $data;
                $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
            }
            while ($old_data !== $data);

            // we are done...
            return $data;
    }
?>
<?php require_once __DIR__."/../../layouts/header.php";
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Sửa sản phẩm
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                </li>
                                <li>
                                    <i></i>  <a href="#">Sản phẩm</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> Sửa sản phẩm
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
                            <select class="form-control" id="exampleFormControlSelect1" name="maloai" >
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
                            <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder="HuaWei Mate 20 black" name="name" value="<?php echo $editsanpham['TenSanPham'];?>">
                            <?php if(isset($error['name'])): ?>        
                            <p class="text-danger"><?php echo $error['name']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="gia" value="<?php echo $editsanpham['GiaSanPham'];?>">
                            <?php if(isset($error['gia'])): ?>        
                            <p class="text-danger"><?php echo $error['gia']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô tả</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"><?php echo $editsanpham['MoTa'];?></textarea>
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
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pro grean" name="tukhoa" value="<?php echo $editsanpham['TuKhoa'];?>">
                            <?php if(isset($error['tukhoa'])): ?>        
                            <p class="text-danger"><?php echo $error['tukhoa']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Xuất Xứ</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Trung Quốc" name="xuatxu" value="<?php echo $editsanpham['XuatXu'];?>">
                            <?php if(isset($error['xuatxu'])): ?>        
                            <p class="text-danger"><?php echo $error['xuatxu']?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
                        </div>
                        </form>
                        </div>
                    </div>
 <?php require_once __DIR__."/../../layouts/footer.php" ?>