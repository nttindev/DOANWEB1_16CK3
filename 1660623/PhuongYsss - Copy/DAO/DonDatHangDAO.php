<?php 

class DonDatHangDAO extends DB
{
	  public function GetAllAvailable()
	  {
	  	 $sql ="SELECT MaDatHang, MaNguoiDung, NgayLap,TongThanhTien from DonDatHang";
	  	 $result = $this->ExecuteQuery($sql);
	  	 $lstDonDatHang = array();
	  	 while($row = mysqli_fetch_array($result))
	  	 {
	  	 	$donDatHang = new DonDatHang();
	  	 	$donDatHang->MaDatHang = $row['MaDatHang'];
	  	 	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	 	$donDatHang->NgayLap = $row['NgayLap'];
	  	 	$donDatHang->TongThanhTien =$row['TongThanhTien'];
	  	 	$lstDonDatHang[] = $donDatHang;
	  	 }
	  	 return $lstDonDatHang;

	  }
	  public function GetByID($maNguoiDung)
	  {
	  	$sql = "SELECT MaDatHang , MaNguoiDung , NgayLap,TongThanhTien from DonDatHang where MaNguoiDung = $maNguoiDung";
	  	$result = $this->ExecuteQuery($sql);
	  	if($result == null)
	  		return null;
	  	$row = mysqli_fetch_array($result);
	  	$donDatHang = new DonDatHang();
	  	$donDatHang->MaDatHang = $row['MaDatHang'];
	  	$donDatHang->MaNguoiDung = $row['MaNguoiDung'];
	  	$donDatHang->NgayLap = $row['NgayLap'];
	  	$donDatHang->TongThanhTien = $row['TongThanhTien'];
	  	return $donDatHang;
	  }
	  public function Insert($donDatHang)
	  {
	  	$sql="INSERT into DonDatHang(MaNguoiDung,NgayLap,TongThanhTien) values('$donDatHang->MaNguoiDung','$donDatHang->NgayLap','$donDatHang->TongThanhTien')";
	  	$this->ExecuteQuery($sql);
	  }
}

 ?>