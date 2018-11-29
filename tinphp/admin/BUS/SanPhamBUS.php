<?php
    class SanPhamBus
    {
        var $SanPhamDAO;
        public function __construct()
        {
            $this->SanPhamDAO=new SanPhamDAO();
        }
        public function fetchAll()
        {
            return $this->SanPhamDAO->fetchAll();
        }
        public function postInput($string)
        {
            return $this->SanPhamDAO->postInput($string);
        }
     
        public function  getInput($string)
        {
            return $this->SanPhamDAO->getInput($string);
        }
        
        public function insert(array $data)
        {
            return $this->SanPhamDAO->insert($data);
        }
        public function delete($masp )
        {
            return $this->SanPhamDAO->delete($masp);
        }
        public function update(array $data, array $conditions)
        {
            return $this->SanPhamDAO->update($data,$conditions);
        }
        public function fetchID($id )
        {
            return $this->SanPhamDAO->fetchID($id);
        }
    }
?>