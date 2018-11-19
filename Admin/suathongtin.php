<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <title>Sửa Thông Tin</title>
</head>
<style type="text/css">
.TTsua{
    float: left;
  }
</style>
<body >

<?php
include("dbconnect.inc");
$mahang=isset($_GET['sua'])? $_GET['sua']:"";
$sql="select * from sanpham where mahang='$mahang'";
$result=mysqli_query($link,$sql);
$rows=@mysqli_fetch_array($result);
?>
<div class="container">
<form id="form1" name="form1" method="post" action="thucthisua.php">
<table width="500" border="1">
  	<tr>
      <td width="150">Ma Hang</td>
	  <td><input name="txtma" type="text"  readonly="" value="<?php echo $rows['mahang'];?>" /></td>
    </tr>
	<tr>
      <td>Ten Hang</td>
	  <td><input name="txtname" type="text" value="<?php echo $rows['tenhang'];?>" /></td>
    </tr>
    <tr>
      <td>Gia Tien</td>
	  <td><input name="txtgia" type="text" value="<?php echo $rows['giatien']; ?>" /></td>
    </tr>
    <tr>
      <td>Kieu</td>
	  <td><input name="txtkieu" type="text" value="<?php echo $rows['kieu'];?>" /></td>
    </tr>
    <tr>
      <td>Ma loai</td>
	  <td><input name="txtml" type="text" value="<?php echo $rows['kieu'];?>" /></td>
    </tr>
    <tr>
      <td>M&ocirc; t&#7843;</td>
	  <td><input name="txtgr" type="text" value="<?php echo $rows['sogr1sp'];?>" /></td>
    </tr>
    <tr>
      <td>Chi ti&#7871;t</td>
	  <td><input name="txtsp" type="text" value="<?php echo $rows['sosp1thung'];?>" /></td>
    </tr>
    <tr>
      <td>Hinh anh </td>
	  <td><input name="txthinhanh" type="text" value="<?php echo $rows['hinhanh'];?>" /></td>
    </tr>
    <tr>
      <td rol-span=2><label>
        <input name="Smsua" type="submit" value="Sua" />
      </label></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
