<?php 
  class SanPhamDAO extends DB
	  {
	  	public function GetAllAvailable()
	  	{
	  		$sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham";
	  		$result = $this->ExecuteQuery($sql);
	  		$lstSanPham = array();
	  		while($row = mysqli_fetch_array($result))
	  		{
	  			$sanPham = new SanPham();
	  			$sanPham->MaSanPham     = $row["MaSanPham"];
	  			$sanPham->TenSanPham    = $row['TenSanPham'];
	  			$sanPham->AnhURL        = $row['AnhURL'];
	  			$sanPham->GiaSanPham    = $row['GiaSanPham'];
	  			$sanPham->SoLuongBan    = $row['SoLuongBan'];
	  			$sanPham->SoLuotXem     = $row['SoLuotXem'];
	  			$sanPham->MoTa          = $row['MoTa'];
	  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
	  			$sanPham->NgayNhap      = $row['NgayNhap'];
	  			$sanPham->BiXoa         = $row['BiXoa'];
	  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
	  			$lstSanPham[]           = $sanPham;
	  		}
	  		return $lstSanPham;
	  	}

	  	public  function GetProductSelling()
	  	{

	  		$sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat 
	  		from SanPham 
	  		ORDER by SoLuongBan DESC
	  		   ";
	  		   // $count = 0;
	  		   $result = $this->ExecuteQuery($sql);
	  		  $lstSanPhamBanChay = array();
	  		  while($row = mysqli_fetch_array($result))
	  		  {

	  		  	 	$sanPham = new SanPham();
		  		  	$sanPham->MaSanPham     = $row['MaSanPham'];
		  			$sanPham->TenSanPham    = $row['TenSanPham'];
		  			$sanPham->AnhURL        = $row['AnhURL'];
		  			$sanPham->GiaSanPham    = $row['GiaSanPham'];
		  			$sanPham->SoLuongBan    = $row['SoLuongBan'];
		  			$sanPham->SoLuotXem     = $row['SoLuotXem'];
		  			$sanPham->MoTa          = $row['MoTa'];
		  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
		  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
		  			$sanPham->NgayNhap      = $row['NgayNhap'];
		  			$sanPham->BiXoa         = $row['BiXoa'];
		  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
		  			$lstSanPhamBanChay[]           = $sanPham;
	  		  }
	  		  return $lstSanPhamBanChay;

	  	}

       public function GetProductNew()
       {
       	  $sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat 
	  		from SanPham 
	  		ORDER by NgayNhap DESC";
	  		$result = $this->ExecuteQuery($sql);
	  		$lstSanPhamNew = array();
	  		while($row = mysqli_fetch_array($result))
	  		{
	  			$sanPham = new SanPham();
		  		  	$sanPham->MaSanPham     = $row['MaSanPham'];
		  			$sanPham->TenSanPham    = $row['TenSanPham'];
		  			$sanPham->AnhURL        = $row['AnhURL'];
		  			$sanPham->GiaSanPham    = $row['GiaSanPham'];
		  			$sanPham->SoLuongBan    = $row['SoLuongBan'];
		  			$sanPham->SoLuotXem     = $row['SoLuotXem'];
		  			$sanPham->MoTa          = $row['MoTa'];
		  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
		  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
		  			$sanPham->NgayNhap      = $row['NgayNhap'];
		  			$sanPham->BiXoa         = $row['BiXoa'];
		  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
		  			$lstSanPhamNew[]           = $sanPham;
	  		}
	  		return $lstSanPhamNew;
       }

	  	public function GetByID_ChiTiet($maSanPham) //chi Tiết Sản Phẩm
	  	{
              $sql ="SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat,XuatXu from SanPham where MaSanPham = $maSanPham";
              $result = $this->ExecuteQuery($sql);
              if($result == null)
              	return null;
              $row = mysqli_fetch_array($result);
              $sanPham = new SanPham();
              $sanPham->MaSanPham          = $row['MaSanPham'];
	  			$sanPham->TenSanPham       = $row['TenSanPham'];
	  			$sanPham->AnhURL           = $row['AnhURL'];
	  			$sanPham->GiaSanPham       = $row['GiaSanPham'];
	  			$sanPham->SoLuongBan       = $row['SoLuongBan'];
	  			$sanPham->SoLuotXem        = $row['SoLuotXem'];
	  			$sanPham->MoTa             = $row['MoTa'];
	  			$sanPham->MaLoaiSanPham    = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat    =$row['MaHangSanXuat'];
	  			$sanPham->NgayNhap         = $row['NgayNhap'];
	  			$sanPham->BiXoa            = $row['BiXoa'];
	  			$sanPham->SoLuongTon       = $row['SoLuongTon'];
	  			$sanPham->XuatXu           = $row['XuatXu'];
	  			return $sanPham;

	  	}
	  	public function GetByID_Loai($maLoaiSanPham)
	  	{
	  		$sql ="SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where MaLoaiSanPham = $maLoaiSanPham";
              $result = $this->ExecuteQuery($sql);
              // if($result == null)
              // 	return null;
              $lstSanPhamTheoLoai = array();

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
	  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
	  			$sanPham->NgayNhap      = $row['NgayNhap'];
	  			$sanPham->BiXoa         = $row['BiXoa'];
	  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
	  			$lstSanPhamTheoLoai[] = $sanPham;
           }
              
	  		  return $lstSanPhamTheoLoai;
	  	}
	  	public function GetByID_Hang($maHangSanXuat)
	  	{
	  		$sql ="SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where MaHangSanXuat = $maHangSanXuat";
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
	  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat =$row['MaHangSanXuat'];
	  			$sanPham->NgayNhap      = $row['NgayNhap'];
	  			$sanPham->BiXoa         = $row['BiXoa'];
	  			$sanPham->SoLuongTon    = $row['SoLuongTon'];
	  			$lstSanPhamTheoHang[] = $sanPham;
           }
              
	  		  return $lstSanPhamTheoHang;
	  	}

	  	public function TimKiem($Search)
	  	{
	  		$sql = "SELECT MaSanPham,TenSanPham,AnhURL,GiaSanPham,NgayNhap,SoLuongTon,SoLuongBan,SoLuotXem,MoTa,BiXoa,MaLoaiSanPham,MaHangSanXuat from SanPham where TenSanPham like '%$Search%'";
	  		$result = $this->ExecuteQuery($sql);
              if($result == null)
              	return null;
              $row = mysqli_fetch_array($result);
              $sanPham = new SanPham();
              $sanPham->MaSanPham = $row['MaSanPham'];
	  			$sanPham->TenSanPham = $row['TenSanPham'];
	  			$sanPham->AnhURL = $row['AnhURL'];
	  			$sanPham->GiaSanPham= $row['GiaSanPham'];
	  			$sanPham->SoLuongBan = $row['SoLuongBan'];
	  			$sanPham->SoLuotXem = $row['SoLuotXem'];
	  			$sanPham->MoTa = $row['MoTa'];
	  			$sanPham->MaLoaiSanPham = $row['MaLoaiSanPham'];
	  			$sanPham->MaHangSanXuat=$row['MaHangSanXuat'];
	  			$sanPham->NgayNhap = $row['NgayNhap'];
	  			$sanPham->BiXoa = $row['BiXoa'];
	  			$sanPham->SoLuongTon = $row['SoLuongTon'];
	  			return $sanPham;
	  	}
	  	
	  }
 ?>