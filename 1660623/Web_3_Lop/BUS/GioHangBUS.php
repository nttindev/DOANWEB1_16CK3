<?php 
  class GioHangBus
  {
  	var $gioHangDAO;
  	public function __construct()
 
  	{
  		$this->gioHangDAO = new GioHangDAO();
  	}
    public function GetAllAvailable()
    {
    return $this->gioHangDAO->GetAllAvailable();
    }
    public function GetByID($maNguoiDung)
    {
    	return $this->gioHangDAO->GetByID($maNguoiDung);
    }
    public  function GetGioHangLogin($maNguoiDung, $maSanPham)
    {
        return  $this->gioHangDAO->GetGioHangLogin($maNguoiDung, $maSanPham);
    }
    public function DemSoDong($maNguoiDung, $maSanPham)
    {
        return $this->gioHangDAO->DemSoDong($maNguoiDung, $maSanPham);
    }
    public function  Insert_DangNhap($gioHang)
    {
    	$this->gioHangDAO->Insert_DangNhap($gioHang);
    }//dùng chung cho insert Không Đăng nhập
    public function  Insert_With_DangNhap($maSanPham,$maNguoiDung)
    {
        $gioHang = new GioHang();
        $gioHang->MaSanPham = $maSanPham;
        $gioHang->MaNguoiDung = $maNguoiDung;
        $this->gioHangDAO->Insert_DangNhap($gioHang);
    }
    public function Insert_With_NoDangNhap($maSanPham)
    {
    	$gioHang = new GioHang();
        $gioHang->MaSanPham = $maSanPham;
        
        $this->gioHangDAO->Insert_DangNhap($gioHang);
    }
    public function Delete_DangNhap($maSanPham,$maNguoiDung)
    {
    	$gioHang = new GioHang();
    	$gioHang->MaSanPham = $maSanPham;
    	$gioHang->MaNguoiDung = $maNguoiDung;
    	$this->gioHangDAO->Delete($gioHang);
    }
    public function Delete_NoDangNhap($maSanPham)
    {
    	$gioHang= new GioHang();

    	$gioHang->MaSanPham = $maSanPham;
    	// $gioHang->SoLuong  = $soLuong;
       $this->gioHangDAO->Delete_NoDangNhap($gioHang);
    }
    public  function Update_With_DangNhap($soLuong){
    	$gioHang = new GioHang();
    	$gioHang->SoLuong = $soLuong;
    	// $gioHang->MaNguoiDung = $maNguoiDung;
     //    $gioHang->MaSanPham = $maSanPham;
    	$this->gioHangDAO->Update($gioHang);
    }
    public function Update_NoDangNhap($soLuong)
    {
    	$gioHang = new GioHang();
    	$gioHang->SoLuong = $soLuong;
    	 $this->gioHangDAO->Update_NoDangNhap($gioHang);
    }
    
     
  }

 ?>