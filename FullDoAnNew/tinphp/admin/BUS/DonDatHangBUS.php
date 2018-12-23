<?php 
 class DonDatHangBus
	 {
	 	var $donDatHangDAO;
	 	 public function __construct()
	 	 {
	 	 	$this->donDatHangDAO = new DonDatHangDAO();
	 	 }
	 	 public function fetchAll()
   	   {
	   	
		return $this->donDatHangDAO->fetchAll();
				}
				public function fetchAll1($ma)
			  {
			
			  	 return $this->donDatHangDAO->fetchAll1($ma);

			  }
		  public function fetchID($id)
		  {
			  
			return $this->donDatHangDAO->fetchID($id);
		  }
		  public function postInput($string)
		  {
			  
			return $this->donDatHangDAO->postInput($string);
		  }
	   
		  public function  getInput($string)
		  {
			  return $this->donDatHangDAO->getInput($string);
		  }
		  public function delete($MaDonDatHang)
		  {
				return $this->donDatHangDAO->delete($MaDonDatHang);
		  }
			public function duyet($MaDonDatHang)
		  {
			  return $this->donDatHangDAO->duyet($MaDonDatHang);
			}
			public function timkiem($seach)
			{
				 
				return $this->donDatHangDAO->timkiem($seach);
			}
			public function thongkedoanhthu()
		  {
			  return $this->donDatHangDAO->thongkedoanhthu();
			}
			public function insert($dondathang)
        {
					return $this->donDatHangDAO->insert($dondathang);
		}
		public function Insert_With_SanPham($a,$b,$c,$d,$e,$f)
		{
			$loaisanpham = new DonDatHang();
			$loaisanpham->MaDonDatHang = $a;
			$loaisanpham->MaNguoiDung = $b;
			$loaisanpham->NgayLap=$c;
			$loaisanpham->TongThanhTien=$d;
			$loaisanpham->TinhTrang=$e;
			$loaisanpham->BiXoa=$f;
			$this->donDatHangDAO->Insert($loaisanpham);
		}
		public function update($dondathang)
		  {
				return $this->donDatHangDAO->update($dondathang);
			 
			}
			public function Update_With_SanPham($a,$b,$c,$d,$e,$f)
		{
			$loaisanpham = new DonDatHang();
			$loaisanpham->MaDonDatHang = $a;
			$loaisanpham->MaNguoiDung = $b;
			$loaisanpham->NgayLap=$c;
			$loaisanpham->TongThanhTien=$d;
			$loaisanpham->TinhTrang=$e;
			$loaisanpham->BiXoa=$f;
			$this->donDatHangDAO->update($loaisanpham);
		}


	 }
 ?>