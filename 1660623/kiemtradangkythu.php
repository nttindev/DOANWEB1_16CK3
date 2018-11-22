<?php


 if(isset($_POST['dangky'])) //
 {
     //echo $_POST['dangky'];
    include_once "db.php";
    $hoten = mysqli_real_escape_string($con,$_POST['hoten']);
    $ngay =   mysqli_real_escape_string($con,$_POST['ngay']);
    $thang =   mysqli_real_escape_string($con,$_POST['thang']);
    $nam =   mysqli_real_escape_string($con,$_POST['nam']);
    $diachi = mysqli_real_escape_string($con,$_POST['thanhpho']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $matkhau = mysqli_real_escape_string($con,$_POST['password']);
    $xacnhan_password = mysqli_real_escape_string($con,$_POST['xacnhan_password']);
    $sdt = mysqli_real_escape_string($con,$_POST['sdt']);
    // $email = mysqli_real_escape_string($con,$_POST['email']);
    // $sdt = mysqli_real_escape_string($con,$_POST['sdt']);
    // $diachi = mysqli_real_escape_string($con,$_POST['diachi']);
    // $matkhau = mysqli_real_escape_string($con,$_POST['password']);
     
    if(empty($hoten) || empty($ngay) ||empty($thang) ||empty($nam) ||empty($diachi) || empty($username) ||empty($matkhau) || empty($xacnhan_password) || empty($sdt))
    {
        header("location: dangkythu.php?dangkythongtin=empty");
        exit();
    
    }
    else 
    { 
          
            
          
                $sql_kiemtra = "SELECT * from nguoidung where tendangnhap=$username";
                $result_kiemtra = mysqli_query($con,$sql_kiemtra);
                $resultCheck = mysqli_num_rows($result_kiemtra);
                if($resultCheck > 0)
                {
                    header("location: dangkythu.php?signup=taikhoantontai");
                    exit();
                }
                if($matkhau!=$xacnhan_password)
                {
                    echo "loi";
                    header("location: dangkythu.php?signup=matkhaukhonggiong");
                    exit();
                }
                else{
                    $ngaysinh = $nam.'-'.$thang.'-'.$ngay;
                    $matkhau_mahoa = password_hash($matkhau, PASSWORD_DEFAULT);
                
                    $sql = "INSERT into nguoidung(tennguoidung,tendangnhap,ngaysinh,noisinh,matkhau,sdt) values ('$hoten','$username','$ngaysinh','$diachi','$matkhau_mahoa','$sdt');";
                    mysqli_query($con,$sql);
                    header("location: dangkythu.php?dangky=success");
                    exit();
                }
            
       
      
    }
}
  else
  {
    header("location: dangkythu.php");
    exit();
  }
?>