<?php
require_once "db.php";
  class SanPhamDAO extends DB
	  {
		public $link;
		public function __construct()
        {
            $this->link = mysqli_connect("localhost","root","","mobi_shop") or die ();
            mysqli_set_charset($this->link,"utf8");
        }
	  	public function fetchAll()
	  	{
	  		$sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham";
	  		$result = $this->ExecuteQuery($sql);
	  		$lstSanPham = array();
	  		while($row = mysqli_fetch_array($result))
	  		{
	  			$sanPham = new SanPham();
	  			$sanPham->MaSanPham     = $row["MaSanPham"];
	  			$sanPham->TenSanPham    = $row['TenSanPham'];
	  			$sanPham->AnhURL        = $row['AnhURL'];
				$sanPham->GiaSanPham    = $row['GiaSanPham'];
				$sanPham->NgayNhap      = $row['NgayNhap'];
	  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
				$sanPham->SoLuongBan     = $row['SoLuongBan'];
				$sanPham->SoLuotXem     = $row['SoLuotXem'];
				$sanPham->MoTa          = $row['MoTa'];
				$sanPham->XuatXu        = $row['XuatXu'];
	  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];		
	  			$sanPham->BiXoa         = $row['BiXoa'];
	  			$lstSanPham[]           = $sanPham;
	  		}
	  		return $lstSanPham;
		}
		  

		  public function fetchID($MaSanPham)
		  {
			  $sql = "SELECT  MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,MoTa,XuatXu,MaLoaiSanPham,MaHangSanXuat,BiXoa FROM sanpham WHERE MaSanPham = $MaSanPham ";
			  $rs=$this->ExecuteQuery($sql);
			  if($rs==null)
				  return null;

				$row = mysqli_fetch_array($rs);
				extract($row);

				$sanPham= new SanPham();
				$sanPham->MaSanPham=$MaSanPham;
				$sanPham->AnhURL=$AnhURL;
				$sanPham->TenSanPham= $TenSanPham;
				$sanPham->NgayNhap= $NgayNhap;
				$sanPham->SoLuongTon= $SoLuongTon;
				$sanPham->GiaSanPham= $GiaSanPham;
				$sanPham->XuatXu= $XuatXu;
				$sanPham->BiXoa= $BiXoa;
				$sanPham->MoTa= $MoTa;
				$sanPham->MaLoaiSanPham=$MaLoaiSanPham;
				$sanPham->MaHangSanXuat=$MaHangSanXuat;
				return $sanPham;
		  }
		  public function postInput($string)
		  {
			  return isset($_POST[$string]) ? $_POST[$string] : '';
		  }
		  public function fileInput($string)
		  {
			  return isset($_FILES[$string]['name']) ? $_FILES[$string]['name'] : '';
		  }
		  public function tfileInput($string)
		  {
			  return isset($_FILES[$string]['tmp_name']) ? $_FILES[$string]['tmp_name'] : '';
		  }
		  public function  getInput($string)
		  {
			  return isset($_GET[$string]) ? $_GET[$string] : '';
		  }
		  public function insert($sanpham)
        {
			$sql = "INSERT INTO sanpham(TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,MoTa,XuatXu,MaLoaiSanPham,MaHangSanXuat,BiXoa)
			values('$sanpham->TenSanPham','$sanpham->AnhURL','$sanpham->GiaSanPham','$sanpham->NgayNhap','$sanpham->SoLuongTon','$sanpham->MoTa','$sanpham->XuatXu','$sanpham->MaLoaiSanPham','$sanpham->MaHangSanXuat','$sanpham->BiXoa')";
			$result = $this->ExecuteQuery($sql);
		}
		  public function delete ($MaSanPham )
		  {

			  $sql = "DELETE FROM sanpham WHERE MaSanPham = $MaSanPham  ";
			  $this->ExecuteQuery($sql);
		  }
		  public function update($sanpham)
		  {
			$sql="UPDATE sanpham SET TenSanPham='$sanpham->TenSanPham',AnhURL='$sanpham->AnhURL',GiaSanPham='$sanpham->GiaSanPham',NgayNhap='$sanpham->NgayNhap',SoLuongTon=$sanpham->SoLuongTon,MoTa='$sanpham->MoTa','$sanpham->XuatXu',MaLoaiSanPham=$sanpham->MaLoaiSanPham,MaHangSanXuat=$sanpham->MaHangSanXuat,BiXoa=$sanpham->BiXoa WHERE MaSanPham=$sanpham->MaSanPham,";
			 $this->ExecuteQuery($sql);
		  }
		  public function TimKiem($Search)
	  	{
	  		$sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,XuatXu,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
	  		$result = $this->ExecuteQuery($sql);
               $lstSanPhamTheoHang = array();

           while( $row = mysqli_fetch_array($result))  
           {
           		$sanPham = new SanPham();
              	$sanPham->MaSanPham       = $row['MaSanPham'];
	  			$sanPham->TenSanPham    = $row['TenSanPham'];
	  			$sanPham->AnhURL        = $row['AnhURL'];
	  			$sanPham->GiaSanPham    = $row['GiaSanPham'];
	  			$sanPham->SoLuongBan    = $row['SoLuongBan'];
	  			$sanPham->SoLuotXem     = $row['SoLuotXem'];
				  $sanPham->MoTa          = $row['MoTa'];
				  $sanPham->XuatXu          = $row['XuatXu'];
	  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
	  			$sanPham->NgayNhap      = $row['NgayNhap'];
	  			$sanPham->BiXoa         = $row['BiXoa'];
	  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
	  			$lstSanPhamTheoHang[] = $sanPham;
           }
              
	  		  return $lstSanPhamTheoHang;
	  	}
		  
	  }
 ?>