<?php
    class LoaiSanPhamBus
    {
        var $LoaiSanPhamDAO;
        public function __construct()
        {
            $this->LoaiSanPhamDAO=new LoaiSanPhamDAO();
        }
        public function fetchAll()
        {
            return $this->LoaiSanPhamDAO->fetchAll();
        }
        public function postInput($string)
        {
            return $this->LoaiSanPhamDAO->postInput($string);
        }
     
        public function  getInput($string)
        {
            return $this->LoaiSanPhamDAO->getInput($string);
        }
        
        public function insert(array $data)
        {
            return $this->LoaiSanPhamDAO->insert($data);
        }
        public function delete($masp )
        {
            return $this->LoaiSanPhamDAO->delete($masp);
        }
        public function update(array $data, array $conditions)
        {
            return $this->LoaiSanPhamDAO->update($data,$conditions);
        }
        public function fetchID($id )
        {
            return $this->LoaiSanPhamDAO->fetchID($id);
        }
    }
?>