<?php
   session_start();
   if(isset($_POST['submit']))
   {
	   include "db.php";
	   $email = mysqli_real_escape_string($con,$_POST['email']);
	   $password = mysqli_real_escape_string($con,$_POST['password']);

	   if(empty($email) || empty($password))
			{
                        echo 'no';
			}
			else
			{
				$sql = "SELECT * from nguoidung where email = '$email'";
				$result = mysqli_query($con,$sql);
				$result_g = mysqli_num_rows($result);
				if($result_g < 1)
				{
					echo "khong ton tai";
					// header("location: index.php?login=error");
					// exit();

				}
				else{
					if($row = mysqli_fetch_assoc($result))
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
							$_SESSION['ten_nguoidung']= $row['HoTen'];
							$_SESSION['mail_nguoidung']= $row['Email'];
							$_SESSION['nguoidung_id'] = $row['MaNguoiDung'];
							header("location: index.php?loginsucess");
							exit();
						}
					}
				}
			}
   }
?>