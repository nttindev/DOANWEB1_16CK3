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
		  public function delete ($masp )
		  {
			return $this->donDatHangDAO->delete($masp);
		  }
		  public function update(array $data, array $conditions)
		  {
			  return $this->donDatHangDAO->update($data,$conditions);
		  }
	 }
 ?>