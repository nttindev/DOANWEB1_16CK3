<?php 
   function laysanpham()
   {
   	// global $con;
   	     $sanPhamBUS = new SanPhamBUS();
   	      $lstSanPhamBanChay = $sanPhamBUS->GetAllAvailable();
   	      $count = 0;
   	      foreach($lstSanPhamBanChay as $sanPhamBUS)
   	      {
 		       
 		      	echo '<div class="most most1">
                <a href="?b=chitiet&pro_id='.$sanPhamBUS->MaSanPham.'">
                <div class="most-nho">
                    <div class="nho"><img class="img1" src="GUI/images/$sanPhamBUS->AnhURL" alt=""></div>
                    <div class="nho">
                        <div class="ten-san-pham">
                        $sanPhamBUS->TenSanPham
                        </div>
                        <p class="the-p">number_format($sanPhamBUS->GiaSanPham) đ</p>
                    </div>
                </div>
                </a>
                </div>';
 		       
   	      }
   }

     function  laySanPhamMoi()
     {
     	 $sanPhamBUS = new SanPhamBUS();
     	  $lstSanPhamMoi = $sanPhamBUS->GetAllAvailable();
     	  foreach($lstSanPhamMoi as $sanPhamBUS)
     	  {
     	  	echo "<p>$sanPhamBUS->MaSanPham</p>";
     	  }
     }
 ?>