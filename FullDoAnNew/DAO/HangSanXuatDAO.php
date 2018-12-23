<?php 
	  class HangSanXuatDAO extends DB
	  {
	  	 public function GetAllAvailable()
	  	 {
	  	 	$sql ="SELECT MaHangSanXuat,TenHangSanXuat,LogoURL,BiXoa from HangSanXuat";
	  	 	$result = $this->ExecuteQuery($sql);
	  	 	$lstHangSanXuat = array();
	  	 	while($row = mysqli_fetch_array($result))
	  	 	{
	  	 		$hangSanXuat = new HangSanXuat();
	  	 		$hangSanXuat->MaHangSanXuat = $row['MaHangSanXuat'];
	  	 		$hangSanXuat->TenHangSanXuat = $row['TenHangSanXuat'];
	  	 		$hangSanXuat->LogoURL = $row['LogoURL'];
	  	 		$hangSanXuat->BiXoa = $row['BiXoa'];
	  	 		$lstHangSanXuat[] = $hangSanXuat;
	  	 	}
	  	 	return $lstHangSanXuat;
	  	 }
	  	 public function GetByID($maHangSanXuat)//chi tiet san pham
	  	 {
             $sql ="SELECT MaHangSanXuat , TenHangSanXuat , LogoURL,BiXoa from HangSanXuat where MaHangSanXuat = $maHangSanXuat";
             $result = $this->ExecuteQuery($sql);
             if($result == null)
             	return null;
             $row = mysqli_fetch_array($result);
             $hangSanXuat = new HangSanXuat();
             $hangSanXuat->MaHangSanXuat = $row['MaHangSanXuat'];
             $hangSanXuat->TenHangSanXuat = $row['TenHangSanXuat'];
             $hangSanXuat->LogoURL = $row['LogoURL'];
             $hangSanXuat->BiXoa = $row['BiXoa'];
             return $hangSanXuat;
	  	 }
	  }
 ?>