<?php 
    class TaiKhoanBUS
    {
    	 var $taiKhoanDAO;
    	 public function  __construct()
    	 {
    	 	$this->taiKhoanDAO = new TaiKhoanDAO();
    	 }
			 public function fetchAll()
			 {
			
				 return $this->taiKhoanDAO->fetchAll();
			 }
		 public function fetchID($MaLoaiSanPham)
		 {
			 
		 return $this->taiKhoanDAO->fetchID($MaLoaiSanPham);
		 }
		 public function postInput($string)
		 {
			 
		 return $this->taiKhoanDAO->postInput($string);
		 }
		
		 public function  getInput($string)
		 {
			 return $this->taiKhoanDAO->getInput($string);
		 }
		 public function insert($loaisanpham)
			 {
					 $this->taiKhoanDAO->insert($loaisanpham);
	 }
	 
		 public function Insert_With_SanPham($tenNguoiDung,$tenDangNhap,$ngaySinh,$noiSinh,$matKhau,$sDT)
		 {
			 $loaisanpham = new TaiKhoan();
			  $loaisanpham->TenNguoiDung= $tenNguoiDung;
			  $loaisanpham->TenDangNhap= $tenDangNhap;
			  $loaisanpham->NgaySinh=$ngaySinh;
			  $loaisanpham->NoiSinh=$noiSinh;
			  $loaisanpham->MatKhau=$matKhau;
			  $loaisanpham->SDT=$sDT;
			 $this->taiKhoanDAO->Insert($loaisanpham);
		 }			
		 public function delete ($loaisanpham )
		 {
		 return $this->taiKhoanDAO->delete($loaisanpham);
		 }
		 public function update($loaisanpham)
		 {
			 return $this->taiKhoanDAO->update($loaisanpham);
		 }
		 public function Update_With_LoaiSanPham($tenLoaiSanPham,$biXoa,$id)
		 {
			 $loaisanpham = new LoaiSanPham();
			 $loaisanpham->TenLoaiSanPham = $tenLoaiSanPham;
			 $loaisanpham->BiXoa = $biXoa;
			 $loaisanpham->MaLoaiSanPham=$id;
			 $this->taiKhoanDAO->update($loaisanpham);
		 }
   }

 ?>