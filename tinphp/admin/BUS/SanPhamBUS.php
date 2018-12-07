<?php 
 class SanPhamBUS
	  {
	  	 var $sanPhamDAO;
	  	 public function __construct()
	  	 {
	  	 	$this->sanPhamDAO = new SanPhamDAO();
	  	 }
	  	 public function fetchAll()
   	   {
	   	
		return $this->sanPhamDAO->fetchAll();
   	   }
		  public function fetchID($MaSanPham )
		  {
			  
			return $this->sanPhamDAO->fetchID($MaSanPham);
			}
		  public function postInput($string)
		  {
			  
			return $this->sanPhamDAO->postInput($string);
		  }
	   
		  public function  getInput($string)
		  {
			  return $this->sanPhamDAO->getInput($string);
			}
			public function insert($sanpham)
        {
						$this->sanPhamDAO->insert($sanpham);
		}
		
		  public function Insert_With_SanPham($tenSanPham,$anhURL,$giaSanPham,$ngayNhap,$moTa,$xuatXu,$maLoaiSanPham,$maHangSanXuat,$biXoa)
			{
				$sanpham = new SanPham();
				$sanpham->TenSanPham = $tenSanPham;
				$sanpham->AnhURL = $anhURL;
				$sanpham->GiaSanPham = $giaSanPham;
				$sanpham->MoTa = $moTa;
				$sanpham->NgayNhap = $ngayNhap;
				$sanpham->XuatXu = $xuatXu;
				$sanpham->MaLoaiSanPham = $maLoaiSanPham;
				$sanpham->MaHangSanXuat = $maHangSanXuat;
				$sanpham->BiXoa = $biXoa;
				$this->sanPhamDAO->Insert($sanpham);
			}			
		  public function delete ($sanpham )
		  {
			return $this->sanPhamDAO->delete($sanpham);
			}
			public function update($sanpham)
		  {
			 return $this->sanPhamDAO->update($sanpham);
		  }
			public function Update_With_SanPham($tenSanPham,$anhURL,$giaSanPham,$moTa,$ngayNhap,$xuatXu,$maLoaiSanPham,$maHangSanXuat,$biXoa,$masp)
			{
				$sanpham = new SanPham();
				$sanpham->TenSanPham = $tenSanPham;
				$sanpham->AnhURL = $anhURL;
				$sanpham->GiaSanPham = $giaSanPham;
				$sanpham->MoTa = $moTa;
				$sanpham->NgayNhap = $ngayNhap;
				$sanpham->XuatXu = $xuatXu;
				$sanpham->MaLoaiSanPham = $maLoaiSanPham;
				$sanpham->MaHangSanXuat = $maHangSanXuat;
				$sanpham->BiXoa = $biXoa;
				$sanpham->MaSanPham=$masp;
				$this->sanPhamDAO->Update($sanpham);
			}		
	  }
 ?>