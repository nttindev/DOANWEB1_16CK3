<?php
    class SanPham
    {
             var $MaSanPham;
             var $MaLoaiSanPham;
             var $MaHangSanXuat;
             var  $TenSanPham;
             var  $GiaSanPham;
             var  $MoTa;
             var  $AnhURL;
             var  $TuKhoa;         
             var  $SoLuongXem;
             var  $SoLuongBan;
             var  $XuatXu;
             var  $NgayDang;

             public function __construct()
             {
                 $this->MaSanPham=0;
                 $this->MaLoaiSanPham=0;
                 $this->MaHangSanXuat=0;
                 $this->TenSanPham='';
                 $this->GiaSanPham=0;
                 $this->MoTa='';
                 $this->AnhURL='';
                 $this->TuKhoa='';
                 $this->SoLuongXem='';
                 $this->SoLuongBan='';
                 $this->XuatXu='';
                 $this->NgayDang=getdate();
             }
    }
?>