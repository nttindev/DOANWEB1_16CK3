<?php 
 class TaiKhoanDAO extends DB
   {
   	   public function GetAllAvailable()
   	   {
	   	   	$sql = "SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from TaiKhoan";
	   	   	$result = $this->ExecuteQuery($sql);
	   	   	$lstTaiKhoan = array();
   	   	    while($row = mysqli_fetch_array($result))
   	   	    {
   	   	        $taiKhoan = new TaiKhoan();
   	   	        $taiKhoan->MaNguoiDung  = $row['MaNguoiDung'];
   	   	        $taiKhoan->TenNguoiDung = $row['TenNguoiDung'];
   	   	        $taiKhoan->TenDangNhap  = $row['TenDangNhap'];
   	   	        $taiKhoan->NgaySinh     = $row['NgaySinh'];
   	   	        $taiKhoan->NoiSinh      = $row['NoiSinh'];
   	   	        $taiKhoan->MatKhau      = $row['MatKhau'];
   	   	        $taiKhoan->SDT          = $row['SDT'];
   	   	        $taiKhoan->BiXoa  		  = $row['BiXoa'];
   	   	        $lstTaiKhoan[]          = $taiKhoan;

   	   	    }
   	   	    return $lstTaiKhoan;
   	   }
   	   public function GetUserName($tenDangNhap)
   	   {
   	   	   $sql ="SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from TaiKhoan where TenDangNhap = '$tenDangNhap' ";
   	   	   $result = $this->ExecuteQuery($sql);
   	   	   if($result == null)
   	   	   	return null;
   	   	   $row = mysqli_fetch_array($result);
   	   	   $taiKhoan = new TaiKhoan();
   	   	        $taiKhoan->MaNguoiDung  = $row['MaNguoiDung'];
   	   	        $taiKhoan->TenNguoiDung = $row['TenNguoiDung'];
   	   	        $taiKhoan->TenDangNhap  = $row['TenDangNhap'];
   	   	        $taiKhoan->NgaySinh     = $row['NgaySinh'];
   	   	        $taiKhoan->NoiSinh      = $row['NoiSinh'];
   	   	        $taiKhoan->MatKhau      = $row['MatKhau'];
   	   	        $taiKhoan->SDT          = $row['SDT'];
   	   	        $taiKhoan->BiXoa  		  = $row['BiXoa'];
   	   	        return $taiKhoan;

   	   }

         public function GetID($maNguoiDung)
         {
               $sql ="SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from TaiKhoan where MaNguoiDung = '$maNguoiDung' ";
               $result = $this->ExecuteQuery($sql);
               if($result == null)
                  return null;
               $row = mysqli_fetch_array($result);
               $taiKhoan = new TaiKhoan();
                    $taiKhoan->MaNguoiDung  = $row['MaNguoiDung'];
                    $taiKhoan->TenNguoiDung = $row['TenNguoiDung'];
                    $taiKhoan->TenDangNhap  = $row['TenDangNhap'];
                    $taiKhoan->NgaySinh     = $row['NgaySinh'];
                    $taiKhoan->NoiSinh      = $row['NoiSinh'];
                    $taiKhoan->MatKhau      = $row['MatKhau'];
                    $taiKhoan->SDT          = $row['SDT'];
                    $taiKhoan->BiXoa        = $row['BiXoa'];
                    return $taiKhoan;

         }
         public function Count_row_so($tenDangNhap)
         {
             $sql ="SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from TaiKhoan where TenDangNhap = '$tenDangNhap' ";
               $result = $this->ExecuteQuery($sql);
               $SoDong = mysqli_num_rows($result);
               return $SoDong;
         }
   	   public function Insert($taiKhoan)
   	   {
   	   	    $sql = "INSERT into TaiKhoan(TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa) values('$taiKhoan->TenNguoiDung','$taiKhoan->TenDangNhap','$taiKhoan->NgaySinh','$taiKhoan->NoiSinh','$taiKhoan->MatKhau','$taiKhoan->SDT','$taiKhoan->BiXoa')";
   	   	    $result = $this->ExecuteQuery($sql);
   	   }
   }

 ?>