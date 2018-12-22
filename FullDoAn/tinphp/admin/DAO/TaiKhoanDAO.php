<?php
require_once "db.php";
 class TaiKhoanDAO extends DB
   {
   	   public function fetchAll()
   	   {
	   	   	$sql = "SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from TaiKhoan";
	   	   	$result = $this->ExecuteQuery($sql);
	   	   	$lstTaiKhoan = array();
   	   	    while($row = mysqli_fetch_array($result))
   	   	    {
   	   	        $taiKhoan = new TaiKhoan();
   	   	        $taiKhoan->MaNguoiDung  = $row['MaNguoiDung'];
   	   	        $taiKhoan->TenNguoiDung = $row['TenNguoiDung'];
   	   	        $taiKhoan->TenDangNhap  = $row['TenDangNhap'];
   	   	        $taiKhoan->NgaySinh     = $row['NgaySinh'];
   	   	        $taiKhoan->NoiSinh      = $row['NoiSinh'];
   	   	        $taiKhoan->MatKhau      = $row['MatKhau'];
   	   	        $taiKhoan->SDT          = $row['SDT'];
   	   	        $taiKhoan->BiXoa  		  = $row['BiXoa'];
   	   	        $lstTaiKhoan[]          = $taiKhoan;

   	   	    }
   	   	    return $lstTaiKhoan;
   	   }
		  public function fetchID($MaHangSanXuat )
		  {
			$sql = "SELECT  MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa FROM taikhoan WHERE MaNguoiDung = $MaHangSanXuat ";
			$rs=$this->ExecuteQuery($sql);
			if($rs==null)
				return null;

			  $row = mysqli_fetch_array($rs);
			  extract($row);

			  $sanPham= new TaiKhoan();
			  $sanPham->MaNguoiDung=$MaNguoiDung;
			  $sanPham->TenNguoiDung= $TenNguoiDung;
			  $sanPham->TenDangNhap= $TenDangNhap;
			  $sanPham->NgaySinh=$NgaySinh;
			  $sanPham->NoiSinh=$NoiSinh;
			  $sanPham->MatKhau=$MatKhau;
			  $sanPham->SDT=$SDT;
			  $sanPham->BiXoa=$BiXoa;
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
			$sql = "INSERT INTO taikhoan(TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT)
			values('$loaisanpham->TenNguoiDung','$loaisanpham->TenDangNhap','$loaisanpham->NgaySinh','$loaisanpham->NoiSinh','$loaisanpham->MatKhau','$loaisanpham->SDT')";
			$result = $this->ExecuteQuery($sql);
		}
		  public function delete ($MaLoaiSanPham )
		  {

			  $sql = "DELETE FROM taikhoan WHERE MaNguoiDung = $MaLoaiSanPham  ";
			  $this->ExecuteQuery($sql);
		  }
		  public function update($loaisanpham)
		  {
			 $sql="UPDATE taikhoan SET TenNguoiDung='$loaisanpham->TenNguoiDung',TenDangNhap='$loaisanpham->TenDangNhap',NgaySinh='$loaisanpham->NgaySinh',NoiSinh='$loaisanpham->NoiSinh',SDT='$loaisanpham->SDT' WHERE MaNguoiDung=$loaisanpham->MaNguoiDung";
			 $this->ExecuteQuery($sql);
		  }
		  public function timkiem($seach)
   	   {
	   	   	$sql = "SELECT MaNguoiDung,TenNguoiDung,TenDangNhap,NgaySinh,NoiSinh,MatKhau,SDT,BiXoa from TaiKhoan where TenNguoiDung like '%$seach%'";
	   	   	$result = $this->ExecuteQuery($sql);
	   	   	$lstTaiKhoan = array();
   	   	    while($row = mysqli_fetch_array($result))
   	   	    {
   	   	        $taiKhoan = new TaiKhoan();
   	   	        $taiKhoan->MaNguoiDung  = $row['MaNguoiDung'];
   	   	        $taiKhoan->TenNguoiDung = $row['TenNguoiDung'];
   	   	        $taiKhoan->TenDangNhap  = $row['TenDangNhap'];
   	   	        $taiKhoan->NgaySinh     = $row['NgaySinh'];
   	   	        $taiKhoan->NoiSinh      = $row['NoiSinh'];
   	   	        $taiKhoan->MatKhau      = $row['MatKhau'];
   	   	        $taiKhoan->SDT          = $row['SDT'];
   	   	        $taiKhoan->BiXoa  		  = $row['BiXoa'];
   	   	        $lstTaiKhoan[]          = $taiKhoan;

   	   	    }
   	   	    return $lstTaiKhoan;
   	   }
   }

 ?>