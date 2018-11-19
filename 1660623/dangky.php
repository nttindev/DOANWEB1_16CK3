<?php
 header("Content-type: text/html; charset=utf-8");
 $con = mysqli_connect("localhost","root","","shop_online");
 mysqli_set_charset($con, 'UTF8');

//  function getIpAdd()
// {
//     if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
//     {
//       $ip=$_SERVER['HTTP_CLIENT_IP'];
//     }
//     else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
//     {
//       $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
//     }
//     else
//     {
//       $ip=$_SERVER['REMOTE_ADDR'];
//     }
//     return $ip;
// }
?>








 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="wrap">
		<h2>Sign up Here</h2>
        
		<form action="dangkythongtin.php"  method="post">
			<input type="text" name="hoten"  placeholder="Họ tên..."  class="text" >
			<input type="text" name="email"  placeholder="Email..."   class="text" >
			<input type="text" name="sdt"  placeholder="Số điện thoại.."   class="text" >
			<input type="text" name="diachi" placeholder="Địa chỉ..."    class="text" >
			<input type="password" name="password" placeholder="Password.."   class="pw" >
			 
			<input type="submit" name="dangky"  value="Đăng Ký" class="nhan">
		</form>
	</div>

    
    
     
</body>
</html>
 