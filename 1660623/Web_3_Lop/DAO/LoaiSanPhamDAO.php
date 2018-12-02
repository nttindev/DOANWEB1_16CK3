<?php 
	 class LoaiSanPhamDAO extends DB
	 {
	 	public function GetAllAvailable()
	 	{
	 		$sql = "SELECT MaLoaiSanPham, TenLoaiSanPham,BiXoa from LoaiSanPham";
	 		$result = $this->ExecuteQuery($sql);
	 		 $lstLoaiSanPham = array();
	 		 while($row = mysqli_fetch_array($result))
	 		 {
	 		 	$loaiSanPham = new LoaiSanPham();
	 		 	$loaiSanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	 		 	$loaiSanPham->TenLoaiSanPham = $row['TenLoaiSanPham'];
	 		 	$loaiSanPham->BiXoa = $row['BiXoa'];
	 		 	$lstLoaiSanPham[] = $loaiSanPham;
	 		 }
	 		 return $lstLoaiSanPham;

	 	}
	 }


 ?>