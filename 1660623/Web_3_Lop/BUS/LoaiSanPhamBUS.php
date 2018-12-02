<?php 
	  class LoaiSanPhamBUS
	  {
	  	 var $loaiSanPhamDAO;
	  	 public function __construct()
	  	 {
	  	 	$this->loaiSanPhamDAO = new LoaiSanPhamDAO();
	  	 }
	  	 public function GetAllAvailable()
	  	 {
	  	 	return $this->loaiSanPhamDAO->GetAllAvailable();
	  	 }
	  }
 ?>