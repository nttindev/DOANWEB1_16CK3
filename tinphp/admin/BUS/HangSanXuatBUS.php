<?php 
	class HangSanXuatBUS
	{
		 var $hangSanXuatDAO;
		 public function __construct()
		 {
		 	$this->hangSanXuatDAO = new HangSanXuatDAO();

		 }
		 public function fetchAll()
   	   {
	   	
					return $this->hangSanXuatDAO->fetchAll();
   	   }
				public function fetchID($MaLoaiSanPham)
				{
					
				return $this->hangSanXuatDAO->fetchID($MaLoaiSanPham);
				}
				public function postInput($string)
				{
					
				return $this->hangSanXuatDAO->postInput($string);
				}
			 
				public function  getInput($string)
				{
					return $this->hangSanXuatDAO->getInput($string);
				}
				public function insert($loaisanpham)
					{
						return	$this->hangSanXuatDAO->insert($loaisanpham);
			}
			
				public function Insert_With_SanPham($tenHangSanXUat,$loGoURL,$biXoa)
				{
					$loaisanpham = new HangSanXuat();
					$loaisanpham->TenHangSanXuat = $tenHangSanXUat;
					$loaisanpham->LogoURL = $loGoURL;
					$loaisanpham->BiXoa=$biXoa;
					$this->hangSanXuatDAO->Insert($loaisanpham);
				}			
				public function delete ($loaisanpham )
				{
				return $this->hangSanXuatDAO->delete($loaisanpham);
				}
				public function update($loaisanpham)
				{
					return $this->hangSanXuatDAO->update($loaisanpham);
				}
				public function Update_With_LoaiSanPham($tenHangSanXUat,$biXoa,$id)
				{
					$loaisanpham = new LoaiSanPham();
					$loaisanpham->TenLoaiSanPham = $tenLoaiSanPham;
					$loaisanpham->BiXoa = $biXoa;
					$loaisanpham->MaLoaiSanPham=$id;
					$this->hangSanXuatDAO->update($loaisanpham);
				}
	}

 ?>