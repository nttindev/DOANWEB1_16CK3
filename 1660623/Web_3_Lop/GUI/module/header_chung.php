


<div class="header">
	<a href="index.php"><img src="GUI/images/logoweb.png" alt="" class="logo"></a>
	   	    <div class="header-tim-kiem">
	   	    	<div class="navigate">
	   	    		 <!-- <div class="navi na"><a class="a a1" href="">SAVE MORE ON APP</a></div>
	   	    		 <div class="navi na1"><a class="a a2" href="">CUSTOMER CARE</a></div>
	   	    		 <div class="navi"><a class="a" href="">TRACK MY ORDER</a></div> -->
	   	    		 <!-- <div class="navi"><a class="a" href="dangnhap.php">LOGIN</a></div>
	   	    		 <div class="navi"><a class="a" href="dangky.php">SIGNUP</a></div> 
						-->
						 <div class="main-wrapper">
						 
							  <!-- <div class="nav-login">
							  <div class="navi"><a class="a" href="index.php">HOME</a></div>
							  <div class="navi"><a class="a" href="dangky.php">SIGN UP</a></div>
							  	<form action="dangnhap.php" class="form" method="post">
								  <input type="text" name="email" placeholder="Username/e-mail">
								  <input type="password" name="password" placeholder="password">
								  <button type="submit" name="submit">Login</button>
								  </form>
							  </div> -->
							  <?php
							   include "header.php";
							   // ThemVaoGioHang();
							   if(isset($_GET['addcart']))
							   {
							   	  if(isset($_SESSION['id_nguoidung']))
							   	  {
							   	  	 $maSanPham = $_GET['addcart'];
							   	  	 $maNguoiDung = $_SESSION['id_nguoidung'];
							   	  	 $gioHangBUS = new GioHangBus();
							   	  	 $SoDong = $gioHangBUS->DemSoDong($maNguoiDung, $maSanPham);
							   	  	 if($SoDong > 0)
							   	  	 {
							   	  	 		  echo "<script>alert('Sản phẩm đã được tồn tại trong giỏ hàng')</script>";
											echo "<script>window.open('index.php','_self')</script>";
							   	  	 }
							   	  	 else
							   	  	 {
							   	  	 	    $gioHangBUS->Insert_With_DangNhap($maSanPham,$maNguoiDung);
							   	  	 	    echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng thành công')</script>";
						 		           echo "<script>window.open('?b=chitiet&pro_id=$maSanPham','_self')</script>";
							   	  	 }

							   	  }
							   	  else
							   	  {
							   	  	// $gioHangBUS->

							   	  }
							   }
							  ?>
							 
							 
						 </div>
	   	    		<form action="?b=timkiem" method="post" accept-charset="utf-8">
	   	    			 <input type="search" name="search" placeholder="search here">
							<button type="submit" class="button_1" name="btn-search">search</button>
	   	    		</form>
	   	    		 
	   	    	</div> <!-- ket thuc navigate -->
				<!-- <div class="tim-kiem">
					<img src="http://laz-img-cdn.alicdn.com/images/ims-web/TB1f6tgdAfb_uJjSsD4XXaqiFXa.png" alt="">
					<div class="tim">
						<img src="" alt="">
					</div>
					<div class="tim form">
						<form action="" class="form">
					    	<input  type="" name="">
						</form>
						<img src="" alt="">
					</div>
					<div class="tim">
						<img src="" alt="">
					</div>
				</div> -->
				 
	   	    </div> <!-- ket thuc header tim kiem -->
	   	    <div class="div-menu-bu">
   	    	 	
	   	    	<div class="img-chay">
	   	    		  
	   	    		 	<img class="maithi" src="GUI/images/oppo.png" alt="">
	   	    		 	 <ul>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 	<li class="ul"></li>
	   	    		 	 </ul>
	   	    		 
	   	    	</div>
	   	    	
	   	    </div> <!-- ket thuc div menu bu -->
	   	   
	   	</div> <!-- ket thuc header -->