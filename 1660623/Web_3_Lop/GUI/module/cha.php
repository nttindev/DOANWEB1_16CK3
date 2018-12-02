<div class="cha">
	   		<div class="cha-di-chuyen" id="cha-di-chuyen">
               <?php
                 // layHangSanPham();

                   $hangSanXuatBUS = new HangSanXuatBUS();
                   $lstHang  = $hangSanXuatBUS->GetAllAvailable();
                   foreach($lstHang as $hangSanXuatBUS)
                   {
			                   	    echo '<a href="?b=danhmuc_nhasanxuat&brand='.$hangSanXuatBUS->MaHangSanXuat.'" bid="">
						<div class="con">
							<img class="anh1 anh" src="GUI/images/'.$hangSanXuatBUS->LogoURL.'" alt="">
							
						</div>
						</a>';
                   }
               ?>
	   				<!-- <a href="index.php?brand=$brand_id" bid="">
	   				<div class="con">
	   					<img class="anh1 anh" src="images/Huawei42-b_16.jpg" alt="">
	   					
	   				</div>
	   				</a>
	   				<a href="index.php?brand=$brand_id" bid="">
	   					<div class="con">
	   	    			<img class="anh1 anh" src="images/OPPO42-b_23.jpg" alt="">
	   			
	   	    		</div>
	   				</a>
	   	    		<a href="index.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/Samsung42-b_25.jpg" alt="">
	   					 
	   	    		</div>
	   	    		</a>
	   	    		<a href="index.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/Xiaomi42-b_33.png" alt="">
	   					
	   	    		</div>
	   	    		</a>
	   	    		<a href="index.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/iPhone-(Apple)42-b_16.jpg" alt="">
	   				
	   	    		</div>
	   	    		</a>
	   	    		<a href="index.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/Nokia42-b_21.jpg" alt="">
	   				
	   	    		</div>
	   	    		</a> -->
	   	    		
	   		</div>
	   	    		
	   	  </div>