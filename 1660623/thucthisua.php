<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a=$_POST['txtma'];
	$b=$_POST['txtloai'];
	$c=$_POST['txthang'];
	$d=$_POST['txtten'];
	$e=$_POST['txtgia'];
	$f=$_POST['txtmota'];
	$g=$_POST['txtanh'];
	$h=$_POST['txttukhoa'];
	$i=$_POST['txtslx'];
	$k=$_POST['txtslb'];
	$l=$_POST['txtxx'];
	include "db.php";
	$sql="UPDATE sanpham SET MaSanPham='$a',MaLoaiSanPham='$b',MaHangSanXuat='$c',TenSanPham='$d',GiaSanPham='$e',MoTa='$f',AnhURL='$g',TuKhoa='$h',SoLuongXem='$i',SoLuongBan='$k',XuatXu='$l' WHERE MaSanPham='$a'";
	$result=mysqli_query($con,$sql);
	echo $d;
	if($result)
	{
?>
		<script language="javascript">
		window.alert("ban da sua thanh cong");
		window.location="indexadmin.php?action=10";
		</script>	
	<?php
	}
	else
	{
	?>
		<script language="javascript">
		window.alert("ban chua sua dc");
		window.location="thongtin.php";
		</script>	
	<?php	
	}
	?>
</body>
</html>
