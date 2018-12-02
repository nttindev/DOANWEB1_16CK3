<?php 

include "DataProvider/db.php";


function getip(){

		$ip = $_SERVER['REMOTE_ADDR'];
	 
	 
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		  
		  $ip = $_SERVER['HTTP_CLIENT_IP'];
	 
	 
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	 
		  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	 
	 
		}
	 
		 return $ip;
	 }
  if(isset($_POST['update-s'])){
   						//$ip = getip();
   			// foreach($_POST['remove'] as $remove){
   			 global $con;
   			     $query = "select * from giohang";
   			     $result  = mysqli_query($con,$query);

   			     while ($row= mysqli_fetch_array($result)) {
   			     	$id = $row['MaSanPham'];
   			     	  
                 
					   $sl = $_POST["soluong_$id"];
						$delete_product = "UPDATE giohang set soluong = '$sl'  where masanpham='$id' ";
						$run_delete = mysqli_query($con, $delete_product);
						// echo $ip;
						if($run_delete){
						 
						  // echo "<script>window.open('giohang.php?thanhcong','_self')</script>"    ;  
						  header("location:index.php?b=giohang");
						
						}
   			     }
					  
					
					}


					$ip = getip();
	                if(isset($_POST['xoa-s'])){
	 
						foreach($_POST['remove'] as $remove){
						
							$delete_product = "DELETE from giohang where masanpham='$remove' AND ip_add='$ip'";
							$run_delete = mysqli_query($con, $delete_product);
							echo $ip;
							if($run_delete){
							
							  // echo "<script>window.open('giohang.php','_self')</script>"    ;  
							  header("location:index.php?b=giohang");
							
							}
						
						}
					  
					  } 
				

 ?>