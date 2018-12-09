<?php 
	class HangSanXuatBUS
	{
		 var $hangSanXuatDAO;
		 public function __construct()
		 {
		 	$this->hangSanXuatDAO = new HangSanXuatDAO();

		 }
		 public function GetAllAvailable()
		 {
		 	return $this->hangSanXuatDAO->GetAllAvailable();
		 }
		 public function GetByID($maHangSanXuat)
		 {
		 	return $this->hangSanXuatDAO->GetByID($maHangSanXuat);
		 }
	}

 ?>