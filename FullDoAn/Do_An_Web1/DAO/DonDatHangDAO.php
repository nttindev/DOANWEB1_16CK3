<?php 

class DonDatHangDAO extends DB
{
	  public function GetAllAvailable()
	  {
	  	 $sql ="SELECT MaDonDatHang, MaNguoiDung, NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang";
	  	 $result = $this->ExecuteQuery($sql);
	  	 $lstDonDatHang = array();
	  	 while($row = mysqli_fetch_array($result))
	  	 {
	  	 	$donDatHang = new DonDatHang();
	  	 	$donDatHang->MaDonDatHang = $row['MaDonDatHang'];
	  	 	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	 	$donDatHang->NgayLap = $row['NgayLap'];
	  	 	$donDatHang->TongThanhTien =$row['TongThanhTien'];
	  	 	$donDatHang->TinhTrang = $row['TinhTrang'];
	  	 	$donDatHang->BiXoa = $row['BiXoa'];
	  	 	$lstDonDatHang[] = $donDatHang;
	  	 }
	  	 return $lstDonDatHang;

	  }
	  public function GetByID($maNguoiDung)
	  {
	  	$sql = "SELECT MaDonDatHang , MaNguoiDung , NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaNguoiDung = $maNguoiDung";
	  	$result = $this->ExecuteQuery($sql);
	  	if($result == null)
	  		return null;
	  	$row = mysqli_fetch_array($result);
	  	$donDatHang = new DonDatHang();
	  	$donDatHang->MaDatHang = $row['MaDatHang'];
	  	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	$donDatHang->NgayLap = $row['NgayLap'];
	  	$donDatHang->TongThanhTien = $row['TongThanhTien'];
	  	$donDatHang->TinhTrang = $row['TinhTrang'];
	  	$donDatHang->BiXoa = $row['BiXoa'];
	  	return $donDatHang;
	  }
	  public function GetDonHang($maNguoiDung)
	  {
	  	$sql = "SELECT MaDonDatHang , MaNguoiDung , NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang where MaNguoiDung = '$maNguoiDung'";
	  	$result = $this->ExecuteQuery($sql);
	  	$lstDonDatHang = array();
	  	 while($row = mysqli_fetch_array($result))
	  	 {
	  	 	$donDatHang = new DonDatHang();
	  	 	$donDatHang->MaDonDatHang = $row['MaDonDatHang'];
	  	 	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	 	$donDatHang->NgayLap = $row['NgayLap'];
	  	 	$donDatHang->TongThanhTien =$row['TongThanhTien'];
	  	 	$donDatHang->TinhTrang = $row['TinhTrang'];
	  	 	$donDatHang->BiXoa = $row['BiXoa'];
	  	 	$lstDonDatHang[] = $donDatHang;
	  	 }
	  	 return $lstDonDatHang;
	  }
	  public function Insert($donDatHang)
	  {
	  	$sql="INSERT into DonDatHang(MaDonDatHang,MaNguoiDung,NgayLap,TongThanhTien,TinhTrang,BiXoa) values('$donDatHang->MaDonDatHang','$donDatHang->MaNguoiDung','$donDatHang->NgayLap','$donDatHang->TongThanhTien','$donDatHang->TinhTrang','$donDatHang->BiXoa')";
	  	$this->ExecuteQuery($sql);
	  }
	  public function DemSoDong()
	  {
	  	$sql = "SELECT MaDonDatHang, MaNguoiDung,NgayLap,TongThanhTien,TinhTrang,BiXoa from DonDatHang";
	  	$result = $this->ExecuteQuery($sql);
	  	 $SoDong = mysqli_num_rows($result);
	  	 return  $SoDong;
	  }
	  public function Update($donDatHang)
			{

				$sql ="UPDATE DonDatHang set BiXoa = 1 where  MaDonDatHang = $donDatHang->MaDonDatHang";
				$this->ExecuteQuery($sql);
			} 

}

 ?>