<?php 
 class DonDatHangBus
	 {
	 	var $donDatHangDAO;
	 	 public function __construct()
	 	 {
	 	 	$this->donDatHangDAO = new DonDatHangDAO();
	 	 }
	 	 public function GetAllAvailable()
	 	 {
	 	 	return $this->donDatHangDAO->GetAllAvailable();
	 	 }
	 	 public function GetByID($maNguoiDung)
	 	 {
	 	 	return $this->donDatHangDAO->GetByID($maNguoiDung);
	 	 }
	 	 public function Insert($donDatHang)
	 	 {
	 	 	$this->donDatHangDAO->Insert($donDatHang);
	 	 }
	 	public function Insert_With_donDatHang($maNguoiDung,$ngayLap,$tongThanhTien)
	 	{
                 $donDatHang = new DonDatHang();
                 $donDatHang->MaNguoiDung = $maNguoiDung;
                 $donDatHang->NgayLap     = $ngayLap;
                 $donDatHang->TongThanhTien = $tongThanhTien;
                 $this->donDatHangDAO->Insert($donDatHang);
	 	}
	 }
 ?>