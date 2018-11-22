<?php
include_once "db.php";

function getip(){

	$ip = $_SERVER['REMOTE_ADDR'];
 
 
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	  
	  $ip = $_SERVER['HTTP_CLIENT_IP'];
 
 
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
 
	  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 
 
	}
 
	 return $ip;
 } 
 
 
function ThemVaoGioHang()
{
	
	if(isset($_GET['themgiohang']) ) {

		 echo "YESS";
     $ip = getip();
		$pro_id = $_GET['themgiohang'];
		if(isset($_SESSION['id_nguoidung']))
			{
			$ma_nguoidung = $_SESSION['id_nguoidung'];
			 
			$checkpro = "SELECT ip_add,masanpham from giohang where ip_add = '$ip' AND masanpham = '$pro_id'";
		$run_checkpro = mysqli_query($con,$checkpro);
   
   
		if(mysqli_num_rows($run_checkpro)>0){
   
   
		  echo "NOOOOO";
         
   
		}else{
   
   
				  $insertpro = "INSERT into giohang (masanpham,ip_add,manguoidung,soluong) values ('$pro_id','$ip','$ma_nguoidung','1');";  
   
   
				  $run_insertpro = mysqli_query($con,$insertpro);
				  echo $ip;
                   header("location:index.php?isertthanhcong");
                //   echo "<script>window.open('','_self')</script>";  
                if(!$run_insertpro)
                {
                    header("location:index.php");
                }
		}
			}
       // $ma_nguoidung = "1";
		
	}  
	else
	{
		$ip = getip();
		echo $_SESSION['id_nguoidung'];
		 
	}
}
?>