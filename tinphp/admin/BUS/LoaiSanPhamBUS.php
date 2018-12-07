<?php 
	  class LoaiSanPhamBUS
	  {
	  	 var $loaiSanPhamDAO;
	  	 public function __construct()
	  	 {
	  	 	$this->loaiSanPhamDAO = new LoaiSanPhamDAO();
	  	 }
	  	 public function fetchAll()
   	   {
	   	
					return $this->loaiSanPhamDAO->fetchAll();
   	   }
		  public function fetchID($MaLoaiSanPham)
		  {
			  
			return $this->loaiSanPhamDAO->fetchID($MaLoaiSanPham);
		  }
		  public function postInput($string)
		  {
			  
			return $this->loaiSanPhamDAO->postInput($string);
		  }
	   
		  public function  getInput($string)
		  {
			  return $this->loaiSanPhamDAO->getInput($string);
		  }
		  public function insert($loaisanpham)
        {
						$this->loaiSanPhamDAO->insert($loaisanpham);
		}
		
		  public function Insert_With_SanPham($tenLoaiSanPham,$biXoa)
			{
				$loaisanpham = new LoaiSanPham();
				$loaisanpham->TenLoaiSanPham = $tenLoaiSanPham;
				$loaisanpham->BiXoa = $biXoa;
				$this->loaiSanPhamDAO->Insert($loaisanpham);
			}			
		  public function delete ($loaisanpham )
		  {
			return $this->loaiSanPhamDAO->delete($loaisanpham);
		  }
		  public function update($loaisanpham)
		  {
			  return $this->loaiSanPhamDAO->update($loaisanpham);
			}
			public function Update_With_LoaiSanPham($tenLoaiSanPham,$biXoa,$id)
			{
				$loaisanpham = new LoaiSanPham();
				$loaisanpham->TenLoaiSanPham = $tenLoaiSanPham;
				$loaisanpham->BiXoa = $biXoa;
				$loaisanpham->MaLoaiSanPham=$id;
				$this->loaiSanPhamDAO->update($loaisanpham);
			}
	  }
 ?>