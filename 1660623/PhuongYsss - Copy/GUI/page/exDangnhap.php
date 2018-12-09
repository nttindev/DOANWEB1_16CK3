<?php 



    // session_start();
   if(isset($_POST['submit']))
   {
	   // include "DataProvider/db.php";
	   // global $con;
		    $tenDangNhap = $_POST['username'];
	      $password =$_POST['password'];

	   if(empty($tenDangNhap) || empty($password))
			{
				echo "<script>alert('Tài Khoản hoặc Mật Khẩu Trống')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
           else
           {
           	
           	  // $query_admin = "SELECT * from admin where tendangnhap = '$username'";
           	  $quanTriBUS = new QuanTriBUS();
           	      $kiemtra_admin   =  $quanTriBUS->Count_UserName($tenDangNhap);

             
           	   // $kiemtra_admin = mysqli_num_rows($result_admin);
           	   if($kiemtra_admin < 1)
           	   {
           	        // $sql_user = "SELECT * from nguoidung where tendangnhap ='$username'";
           	        // $ketqua_user = mysqli_query($con,$sql_user);
           	        $taiKhoanBUS = new TaiKhoanBUS();
           	        $user_check = $taiKhoanBUS->Count_row_so($tenDangNhap);
           	        if($user_check < 1)
           	        {
						echo "<script>alert('Tài Khoản Không Tồn Tại')</script>";
						echo "<script>window.open('index.php','_self')</script>";
           	        }
           	        else
           	        {
           	        			$taiKhoanBUS = $taiKhoanBUS->GetUserName($tenDangNhap);
						    
								$check_mahoa_password = password_verify($password,$taiKhoanBUS->MatKhau);
								if($check_mahoa_password == false)
								{
									echo "<script>alert('Mật Khẩu Không Đúng')</script>";
									echo "<script>window.open('index.php','_self')</script>";
								}
								else if($check_mahoa_password == true)
								{
									
									$_SESSION['id_nguoidung']= $taiKhoanBUS->MaNguoiDung;
									$_SESSION['ten_nguoidung']= $taiKhoanBUS->TenNguoiDung;
									//$_SESSION['mail_nguoidung']= $row['Email'];
									//$_SESSION['nguoidung_id'] = $row['MaNguoiDung'];
									// header("location: index.php?login=success");
									echo "<script>alert('Đăng Nhập Thành Công')</script>";
									echo "<script>window.open('index.php','_self')</script>";
								 
									// exit();
								}
						  
           	        	
           	        }
           	   }
           	   else //khi là admin
           	   {
           	   	  // $query_user = "SELECT * from nguoidung where tendangnhap ='$username'";
           	   	  // $result_user = mysqli_query($con,$query_user);
           	   	              $taiKhoanBUS = new TaiKhoanBUS();
           	   	            $kiemtra_user =  $taiKhoanBUS->Count_row_so($tenDangNhap);
           	   	             
           	   	            @$_SESSION['admin'] = $quanTriBUS->TenDangNhap;
           	   	  // $kiemtra_user = mysqli_num_rows($result_user);
           	   	  if($kiemtra_user < 0)
           	   	  {
					echo "<script>alert('Người dùng không tồn tại')</script>";
                    echo "<script>window.open('index.php','_self')</script>";
           	   	  }
           	   	  else
           	   	  {
							// if($row = mysqli_fetch_assoc($result_user))
							// {
							// 	$check_mahoa_matkhau = password_verify($password,$row['MatKhau']);
							// 	if($check_mahoa_matkhau == false)
							// 	{
							// 		echo "<script>alert('Mật Khẩu Không Giống')</script>";
							// 		echo "<script>window.open('dangkythu.php','_self')</script>";
							// 	}
							// 	else if($check_mahoa_matkhau == true)
							// 	{
									 
							// 		$_SESSION['id_nguoidung']= $row['MaNguoiDung'];
							// 		$_SESSION['ten_nguoidung']= $row['TenNguoiDung'];
							// 		//$_SESSION['mail_nguoidung']= $row['Email'];
							// 		//$_SESSION['nguoidung_id'] = $row['MaNguoiDung'];
							// 		header("location: admin.php");
							// 		exit();
							// 	}
							// }
							// 
							// 
							 $taiKhoanBUS = $taiKhoanBUS->GetUserName($tenDangNhap);
						    
								$check_mahoa_password = password_verify($password,$taiKhoanBUS->MatKhau);
								if($check_mahoa_password == false)
								{
									echo "<script>alert('Mật Khẩu Không Đúng')</script>";
									echo "<script>window.open('index.php','_self')</script>";
								}
								else if($check_mahoa_password == true)
								{
									
									$_SESSION['id_nguoidung']= $taiKhoanBUS->MaNguoiDung;
									$_SESSION['ten_nguoidung']= $taiKhoanBUS->TenNguoiDung;

									//$_SESSION['mail_nguoidung']= $row['Email'];
									//$_SESSION['nguoidung_id'] = $row['MaNguoiDung'];
									// header("location: index.php?login=success");
									echo "<script>alert('Đăng Nhập admin Thành Công')</script>";
									echo "<script>window.open('tinphp/admin/GUI/index.php','_self')</script>";
								 
									// exit();
								}
           	   	  	
           	   	  }
           	   }
           }



			 
   }



 ?>