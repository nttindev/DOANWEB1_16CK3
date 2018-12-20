<?php
require_once "db.php";
class DonDatHangDAO extends DB
{
	  public function fetchAll()
	  {
	  	 $sql ="SELECT MaDonDatHang, MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang";
	  	 $result = $this->ExecuteQuery($sql);
	  	 $lstDonDatHang = array();
	  	 while($row = mysqli_fetch_array($result))
	  	 {
	  	 	$donDatHang = new DonDatHang();
	  	 	$donDatHang->MaDatHang = $row['MaDonDatHang'];
	  	 	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	 	$donDatHang->NgayLap = $row['NgayLap'];
			$donDatHang->TongThanhTien =$row['TongThanhTien'];
			$donDatHang->TinhTrang =$row['TinhTrang'];
			$donDatHang->BiXoa =$row['BiXoa'];
	  	 	$lstDonDatHang[] = $donDatHang;
	  	 }
	  	 return $lstDonDatHang;

	  }
	  public function fetchAll1($ma)
	  {
	  	 $sql ="SELECT MaChiTietDonDatHang, MaSanPham, SoLuong, GiaBan, MaDonDatHang FROM chitietdondathang WHERE MaDonDatHang=$ma";
	  	 $result = $this->ExecuteQuery($sql);
	  	 $lstDonDatHang = array();
	  	 while($row = mysqli_fetch_array($result))
	  	 {
	  	 	$donDatHang = new ChiTietDonDatHang();
	  	 	$donDatHang->MaChiTietDonDatHang = $row['MaChiTietDonDatHang'];
	  	 	$donDatHang->MaSanPham = $row['MaSanPham'];
	  	 	$donDatHang->SoLuong = $row['SoLuong'];
			$donDatHang->GiaBan =$row['GiaBan'];
			$donDatHang->MaDonDatHang =$row['MaDonDatHang'];
	  	 	$lstDonDatHang[] = $donDatHang;
	  	 }
	  	 return $lstDonDatHang;

	  }
	  public function fetchID($id )
		  {
			  
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
		  public function delete($MaDonDatHang)
		  {
				$sql="DELETE chitietdondathang, dondathang FROM chitietdondathang, dondathang WHERE chitietdondathang.MaDonDatHang = dondathang.MaDonDatHang AND chitietdondathang.MaDonDatHang=$MaDonDatHang";
				$this->ExecuteQuery($sql);
		  }
		  public function duyet($MaDonDatHang)
		  {
			  $sql="UPDATE dondathang set tinhtrang=1 where MaDonDatHang=$MaDonDatHang";
			  $this->ExecuteQuery($sql);
		  }
		  public function thongkedoanhthu()
		  {
			  $sql="SELECT sum(TongThanhTien) FROM dondathang WHERE dondathang.Ngaylap >= CURDATE() AND dondathang.Ngaylap < CURDATE() + INTERVAL 1 DAY";
			 $result =  $this->ExecuteQuery($sql);
			 return $result;
		  }
		  public function timkiem($seach)
	  {
	  	 $sql ="SELECT MaDonDatHang, MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaNguoiDung like '%$seach%'";
	  	 $result = $this->ExecuteQuery($sql);
	  	 $lstDonDatHang = array();
	  	 while($row = mysqli_fetch_array($result))
	  	 {
	  	 	$donDatHang = new DonDatHang();
	  	 	$donDatHang->MaDatHang = $row['MaDonDatHang'];
	  	 	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	 	$donDatHang->NgayLap = $row['NgayLap'];
			$donDatHang->TongThanhTien =$row['TongThanhTien'];
			$donDatHang->TinhTrang =$row['TinhTrang'];
			$donDatHang->BiXoa =$row['BiXoa'];
	  	 	$lstDonDatHang[] = $donDatHang;
	  	 }
	  	 return $lstDonDatHang;

	  }
}

 ?>