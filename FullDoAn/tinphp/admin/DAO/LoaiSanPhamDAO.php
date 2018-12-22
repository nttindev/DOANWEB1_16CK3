<?php
require_once "db.php";
	 class LoaiSanPhamDAO extends DB
	 {
	 	public function fetchAll()
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
		 public function fetchID($MaLoaiSanPham )
		  {
			$sql = "SELECT  MaLoaiSanPham,TenLoaiSanPham,BiXoa FROM loaisanpham WHERE MaLoaiSanPham = $MaLoaiSanPham ";
			$rs=$this->ExecuteQuery($sql);
			if($rs==null)
				return null;

			  $row = mysqli_fetch_array($rs);
			  @extract($row);

			  $sanPham= new LoaiSanPham();
			  $sanPham->TenLoaiSanPham= $TenLoaiSanPham;
			  $sanPham->BiXoa= $BiXoa;
			  $sanPham->MaLoaiSanPham=$MaLoaiSanPham;
			  return $sanPham;
		  }
		  public function postInput($string)
		  {
			  $xxx = $string.'';
			  return isset($_POST[$string]) ? $_POST[$string] : '';
		  }
	   
		  public function  getInput($string)
		  {
			  return isset($_GET[$string]) ? $_GET[$string] : '';
		  }
		  public function insert($loaisanpham)
        {
			$sql = "INSERT INTO loaisanpham(TenLoaiSanPham,BiXoa)
			values('$loaisanpham->TenLoaiSanPham','$loaisanpham->BiXoa')";
			$result = $this->ExecuteQuery($sql);
		}
		  public function delete ($MaLoaiSanPham )
		  {

			  $sql = "DELETE FROM loaisanpham WHERE MaLoaiSanPham = $MaLoaiSanPham  ";
			  $this->ExecuteQuery($sql);
		  }
		  public function update($loaisanpham)
		  {
			 $sql="UPDATE loaisanpham SET TenLoaiSanPham='$loaisanpham->TenLoaiSanPham', BiXoa = $loaisanpham->BiXoa where MaLoaiSanPham = $loaisanpham->MaLoaiSanPham";
			 $this->ExecuteQuery($sql);
		  }
		  public function timkiem($seach)
	 	{
	 		$sql = "SELECT MaLoaiSanPham, TenLoaiSanPham,BiXoa from LoaiSanPham where TenLoaiSanPham like '%$seach%'";
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