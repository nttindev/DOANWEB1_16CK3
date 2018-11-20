<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style.css">
<title>Untitled Document</title>
</head>

<body>
<?php
			require("dbconnect.inc");
			if(isset($_SESSION['username']))
			{
				$u=$_SESSION['username'];
				$sql="select * from thanhvien where username='$u' && quyen='1'";
				$result=mysqli_query($link,$sql);
			}

?>
<img src="./images/header.jpg" alt="header">
<div id="menu-cha">
	<div class="menu"><a href="index.php">Trang chủ</a></div>
	<div class="menu"><a href="index.php?action=1">Đăng nhập</a></div>
	<div class="menu"><a href="index.php?action=2">Đăng ký</a></div>
	<div class="menu"><a href="linkthoat.php?action=8">Thoát</a></div>
	<div class="menu"><a href="index.php?action=4">Giỏ hàng</a></div>
	<div class="menu"><a href="index.php?action=5">Tìm kiếm</a></div>
	<div class="menu"><a href="index.php?action=6">Tính toán</a></div>
	<div class="menu"><a href="index.php?action=3">Cập nhật </a></div>
	<div class="menu"><a href="index.php?action=10">Sửa xóa</a></div>
</div>
	<?php
	if(@mysqli_num_rows($result)==1)
	{
	?>
	<div width="500px"></div>	
  <?php
  } ?>
</body>
</html>
