<?php 
    class TaiKhoanBUS
    {
    	 var $taiKhoanDAO;
    	 public function  __construct()
    	 {
    	 	$this->taiKhoanDAO = new TaiKhoanDAO();
    	 }
    	 public function GetAllAvailable()
    	 {
    	 	return $this->taiKhoanDAO->GetAllAvailable();
    	 }
    	 public function GetUserName($tenDangNhap)
    	 {
    	 	return $this->taiKhoanDAO->GetUserName($tenDangNhap);
    	 }
    	 public function Insert($taiKhoan)
    	 {
    	 	  
    	 	 $this->taiKhoanDAO->Insert($taiKhoan);
    	 }
         public function Count_row_so($tenDangNhap)
         {
            return $this->taiKhoanDAO->Count_row_so($tenDangNhap);
         }
    	 public function Insert_With_TaiKhoan($tenNguoiDung,$tenDangNhap,$ngaySinh,$noiSinh,$matKhau,$SDT)
    	 {
    	 	$taiKhoan = new TaiKhoan();
    	 	$taiKhoan->TenNguoiDung = $tenNguoiDung;
    	 	$taiKhoan->TenDangNhap = $tenDangNhap;
    	 	$taiKhoan->NgaySinh = $ngaySinh;
    	 	$taiKhoan->NoiSinh = $noiSinh;
    	 	$taiKhoan->MatKhau = $matKhau;
    	 	$taiKhoan->SDT = $SDT;
            
    	 	$this->taiKhoanDAO->Insert($taiKhoan);
    	 }
    }
 ?>