<?php 
	if(isset($_GET['xoa']))
{
		include ("db.php");
		$mahang=$_GET['xoa'];
		$sql="delete from sanpham where MaSanPham='$mahang'";
		$result=mysqli_query($con,$sql);
	if($result)
	{
?>
		<script language="javascript">
		window.alert("ban da xoa thanh cong");
		window.location="indexadmin.php";
		</script>	
	<?php
	}
	else
	{
	?>
		<script language="javascript">
		window.alert("ban chua xoa dc");
		window.location="indexadmin.php";
		</script>	
	<?php	
	}
}
	?>