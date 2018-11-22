<?php 



    session_start();
   if(isset($_POST['submit']))
   {
	   include "db.php";
	   global $con;
		    $username = mysqli_real_escape_string($con,$_POST['username']);
	      $password = mysqli_real_escape_string($con,$_POST['password']);

	   if(empty($username) || empty($password))
			{
                        echo 'no';
			}
           else
           {
           	
           	  $query_admin = "SELECT * from admin where tendangnhap = '$username'";
           	   $result_admin = mysqli_query($con,$query_admin);
           	   $kiemtra_admin = mysqli_num_rows($result_admin);
           	   if($kiemtra_admin < 1)
           	   {
           	        $sql_user = "SELECT * from nguoidung where tendangnhap ='$username'";
           	        $ketqua_user = mysqli_query($con,$sql_user);
           	        $user_check = mysqli_num_rows($ketqua_user);
           	        if($user_check < 1)
           	        {
           	        	header("location: index.php?login=erro");
           	        	exit();
           	        }
           	        else
           	        {
						   if($row = mysqli_fetch_assoc($ketqua_user))
						   {
								$check_mahoa_password = password_verify($password,$row['MatKhau']);
								if($check_mahoa_password == false)
								{
									header("location: index.php?login=error");
									exit();
								}
								else if($check_mahoa_password == true)
								{
									
									$_SESSION['id_nguoidung']= $row['MaNguoiDung'];
									$_SESSION['ten_nguoidung']= $row['TenNguoiDung'];
									//$_SESSION['mail_nguoidung']= $row['Email'];
									//$_SESSION['nguoidung_id'] = $row['MaNguoiDung'];
									header("location: index.php?login=success");
									exit();
								}
						   }
           	        	
           	        }
           	   }
           	   else
           	   {
           	   	  $query_user = "SELECT * from nguoidung where tendangnhap ='$username'";
           	   	  $result_user = mysqli_query($con,$query_user);
           	   	  $kiemtra_user = mysqli_num_rows($result_user);
           	   	  if($kiemtra_user < 0)
           	   	  {
           	   	  	header("location: index.php?thongbao=nguoidungkhongtontai");
           	   	  }
           	   	  else
           	   	  {
							if($row = mysqli_fetch_assoc($result_user))
							{
								$check_mahoa_matkhau = password_verify($password,$row['MatKhau']);
								if($check_mahoa_matkhau == false)
								{
									header("location: index.php?login=error");
									exit();
								}
								else if($check_mahoa_matkhau == true)
								{
									 
									$_SESSION['id_nguoidung']= $row['MaNguoiDung'];
									$_SESSION['ten_nguoidung']= $row['TenNguoiDung'];
									//$_SESSION['mail_nguoidung']= $row['Email'];
									//$_SESSION['nguoidung_id'] = $row['MaNguoiDung'];
									header("location: admin.php");
									exit();
								}
							}
           	   	  	
           	   	  }
           	   }
           }



			 
   }



 ?>