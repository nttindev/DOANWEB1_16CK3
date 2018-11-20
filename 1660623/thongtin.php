<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>Untitled Document</title>
</head>
<body>
<marquee><h3>CHÀO ADMIN</h3></marquee>
<?php
include "db.php";
$sql="select * from sanpham";
$result=mysqli_query($con,$sql);
?>
<table width="1020" border="1" background="anhphp/theme8.jpeg">
  <tr>
    <td width="90"><div align="left">Mã Sản phẩm</div></td>
    <td width="90"><div align="left">Mã Loại sản phẩm</div></td>
    <td width="90"><div align="left">Mã hãng sản xuất</div></td>
    <td width="90"><div align="left">Tên sản phẩm</div></td>
    <td width="90"><div align="left">Giá sản phẩm</div></td>
    <td width="90"><div align="left">Mô tả</div></td>
    <td width="90"><div align="left">Ảnh URL</div></td>
    <td width="90"><div align="left">Từ khóa</div></td>
    <td width="90"><div align="left">Số lượt xem</div></td>
    <td width="90"><div align="left">Số lượng bán</div></td>
    <td width="90"><div align="left">Xuất xứ</div></td>
    <td width="90"><div align="left">Thao Tác</div></td>
  </tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
  <tr>
    <td><div align="left"><?php echo "$rows[0]";?></div></td>
    <td><div align="left"><?php echo "$rows[1]";?></div></td>
    <td><div align="left"><?php echo "$rows[2]";?></div></td>
    <td><div align="left"><?php echo "$rows[3]";?></div></td>
    <td><div align="left"><?php echo "$rows[4]";?></div></td>
    <td><div align="left"><?php echo "$rows[5]";?></div></td>
    <td><div align="left"><?php echo "$rows[6]";?></div></td>
    <td><div align="left"><?php echo "$rows[7]";?></div></td>
    <td><div align="left"><?php echo "$rows[8]";?></div></td>
    <td><div align="left"><?php echo "$rows[9]";?></div></td>
    <td><div align="left"><?php echo "$rows[10]";?></div></td>
    <td><div align="left"><a href="indexadmin.php?sua=<?php echo "$rows[0]";?>">Edit</a>&nbsp;&nbsp;<a href="indexdmin.php?xoa=<?php echo "$rows[0]";?>">Delete</a></div></td>
  </tr>
 <?php
 }
 ?>
</table>
</body>
</html>
