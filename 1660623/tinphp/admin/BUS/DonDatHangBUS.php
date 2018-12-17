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
		  public function fetchID($id )
		  {
			  
			return $this->donDatHangDAO->fetchID();
		  }
		  public function postInput($string)
		  {
			  
			return $this->donDatHangDAO->postInput($string);
		  }
	   
		  public function  getInput($string)
		  {
			  return $this->donDatHangDAO->getInput($string);
		  }
		  public function insert(array $data)
		  {
			return $this->donDatHangDAO->insert($data);
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
	 }
 ?>