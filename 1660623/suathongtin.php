<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sửa Thông Tin</title>
</head>
<style type="text/css">
.TTsua{
    float: left;
  }
</style>
<body >

<?php
include "db.php";
$mahang=isset($_GET['sua'])? $_GET['sua']:"";
$sql="select * from sanpham where MaSanPham='$mahang'";
$result=mysqli_query($con,$sql);
$rows=@mysqli_fetch_array($result);
?>
<div class="container">
<form id="form1" name="form1" method="post" action="thucthisua.php">
<table width="500" border="1">
  	<tr>
      <td width="150">Mã sản phẩm</td>
	  <td><input name="txtma" type="text"  readonly="" value="<?php echo $rows['MaSanPham'];?>" /></td>
    </tr>
	<tr>
      <td>Mã loại sản phẩm</td>
	  <td><input name="txtloai" type="text" value="<?php echo $rows['MaLoaiSanPham'];?>" /></td>
    </tr>
    <tr>
      <td>Mã hãng sản xuất</td>
	  <td><input name="txthang" type="text" value="<?php echo $rows['MaHangSanXuat']; ?>" /></td>
    </tr>
    <tr>
      <td>Tên sản phẩm</td>
	  <td><input name="txtten" type="text" value="<?php echo $rows['TenSanPham'];?>" /></td>
    </tr>
    <tr>
      <td>Giá sản phẩm</td>
	  <td><input name="txtgia" type="text" value="<?php echo $rows['GiaSanPham'];?>" /></td>
    </tr>
    <tr>
      <td>Mô tả</td>
	  <td><input name="txtmota" type="text" value="<?php echo $rows['MoTa'];?>" maxlength="1000"/></td>
    </tr>
    <tr>
      <td>Ảnh URL</td>
	  <td><input name="txtanh" type="text" value="<?php echo $rows['AnhURL'];?>" /></td>
    </tr>
    <tr>
      <td>Từ khóa</td>
	  <td><input name="txttukhoa" type="text" value="<?php echo $rows['TuKhoa'];?>" /></td>
    </tr>
    <tr>
      <td>Số lượng xem</td>
	  <td><input name="txtslx" type="text" value="<?php echo $rows['SoLuongXem'];?>" /></td>
    </tr>
    <tr>
      <td>Số lượng bán</td>
	  <td><input name="txtslb" type="text" value="<?php echo $rows['SoLuongBan'];?>" /></td>
    </tr>
    <tr>
      <td>Xuất xứ</td>
	  <td><input name="txtxx" type="text" value="<?php echo $rows['XuatXu'];?>" /></td>
    </tr>
    <tr>
      <td><label>
        <input name="Smsua" type="submit" value="Sua" />
      </label></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
