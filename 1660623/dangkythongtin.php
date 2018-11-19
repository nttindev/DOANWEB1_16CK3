<?php
  if(isset($_POST['dangky']))
 {
     //echo $_POST['dangky'];
    include_once "db.php";
    $hoten = mysqli_real_escape_string($con,$_POST['hoten']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $sdt = mysqli_real_escape_string($con,$_POST['sdt']);
    $diachi = mysqli_real_escape_string($con,$_POST['diachi']);
    $matkhau = mysqli_real_escape_string($con,$_POST['password']);
     
    if(empty($hoten) || empty($email) ||empty($sdt) ||empty($diachi) ||empty($matkhau) )
    {
        header("location: dangky.php?dangkythongtin=empty");
        exit();
    
    }
    else 
    { 
       if(!filter_var($email,FILTER_VALIDATE_EMAIL))
             {
                 header("location: dangky.php?dangkythongtin=email");
                 exit();
			 }
			 else
			 {
				 $sql = "SELECT * from nguoidung where email=$email";
				 $result = mysqli_query($con,$sql);
				 $resultCheck = mysqli_num_rows($result);
				 if($resultCheck > 0)
				 {
					 header("location: dangky.php?signup=emailtontai");
					 exit();
				 }
				 else{
					 $matkhau_mahoa = password_hash($matkhau, PASSWORD_DEFAULT);
				 
					 $sql = "INSERT into nguoidung(hoten,email,matkhau,sdt,diachi) values ('$hoten','$email','$matkhau_mahoa','$sdt','$diachi');";
					 mysqli_query($con,$sql);
					 header("location:dangky.php?dangky=success");
					 exit();
				 }
			 }
         
    }
 }
        
    else
    {
        header("location: dangkythongtin.php");
        exit();
    }
?>