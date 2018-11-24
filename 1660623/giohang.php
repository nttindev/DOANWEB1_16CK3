<?php
    //  header("Content-type: text/html; charset=utf-8");
    //  $con = mysqli_connect("localhost","root","","shop_online");
    //  mysqli_set_charset($con, 'UTF8');
    include_once "db.php";
    function laysanpham()
    {
        global $con;
        $query = " SELECT *
         FROM sanpham
        --  limit 4
        ORDER BY soluongban desc ";
        $count = 0;
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)  )
        {
            $product_id = $row['MaSanPham'];
            $anh = $row['AnhURL'];
            $tensanpham = $row['TenSanPham'];
            $gia = $row['GiaSanPham'];
            if($count < 6)
            { 
               
                echo  '<div class="most most1">
                <a href="details.php?pro_id='.$product_id.'">
                <div class="most-nho">
                    <div class="nho"><img class="img1" src="images/'.$anh.'" alt=""></div>
                    <div class="nho">
                        <div class="ten-san-pham">
                        '.$tensanpham.'
                        </div>
                        <p class="the-p">'.number_format($gia).' đ</p>
                    </div>
                </div>
                </a>
                </div>';
            }
       
          $count ++;
        }
	}
	function layHangSanPham()
	{
		global $con;
		$query_hang = "SELECT * from hangsanxuat ";
		$result_hang = mysqli_query($con,$query_hang);
		while($row_hang = mysqli_fetch_array($result_hang))
		{
			$anhhang = $row_hang['LogoURL'];
			$brand_id = $row_hang['MaHangSanXuat'];
			echo '<a href="danhmuc.php?brand='.$brand_id.'" bid="">
			<div class="con">
				<img class="anh1 anh" src="images/'.$anhhang.'" alt="">
				
			</div>
			</a>';
		}
	}
	// function laySanPhamMoi()
	// {
	// 	 global $con;
	// 	 $query_moi = "SELECT * 
	// 	 from sanpham"
	// }
	function layLoaiSanPham()
	{
		  global $con;
		  $query_loai = "SELECT * from loaisanpham";
		  $result_loai = mysqli_query($con,$query_loai);
		  while($row = mysqli_fetch_array($result_loai))
		  {
			   $cat_id = $row['MaLoaiSanPham'];
			   $tenloai = $row['TenLoaiSanPham'];
			   echo '<div class="most xe-may">
			   <a href="danhmuc.php?cat='.$cat_id.'" cid="">
				   
							 '.$tenloai.'
						   
				   
			  </a>
		   </div>';
		  }
    }
    function timkiem()
    {
        if(isset($_POST['btn-search']))
        {
            $timkiem = $_POST['search'];
            global $con;
            $query = "select * from sanpham where tensanpham like '%$timkiem%'";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result))
            {
                $product_id = $row['MaSanPham'];
                $anh = $row['AnhURL'];
                $tensanpham = $row['TenSanPham'];
                $gia = $row['GiaSanPham'];
                 
                   
                    echo  '<div class="most most1">
                    <a href="details.php?pro_id='.$product_id.'">
                    <div class="most-nho">
                        <div class="nho"><img class="img1" src="images/'.$anh.'" alt=""></div>
                        <div class="nho">
                            <div class="ten-san-pham">
                            '.$tensanpham.'
                            </div>
                            <p class="the-p">'.number_format($gia).' đ</p>
                        </div>
                    </div>
                    </a>
                    </div>';
                
            }
        }
	}
	
	function getip(){

		$ip = $_SERVER['REMOTE_ADDR'];
	 
	 
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		  
		  $ip = $_SERVER['HTTP_CLIENT_IP'];
	 
	 
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	 
		  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	 
	 
		}
	 
		 return $ip;
	 } 
	// function LaySanPham()
	// {
		 
	// 		global $con;
	// 		$query = "SELECT * from giohang";
	// 		$result = mysqli_query($con, $query);
			
	// 		while($row = mysqli_fetch_array($result))
	// 		{
	// 				 $id = $row['MaSanPham'];
	// 				 $soluong = $row['soluong'];
	// 				 $query_sp = "SELECT * from sanpham where masanpham='$id'";
	// 				 $result_sp = mysqli_query($con,$query_sp);
	// 				  while($row_sp = mysqli_fetch_array($result_sp))
	// 				  {
	// 					  $tensp = $row_sp['TenSanPham'];
	// 					  $gia =  $row_sp['GiaSanPham'];
	// 					  $anh = $row_sp['AnhURL'];
						   
	// 				  }
	
					
	// 		}
			 
	// 	}
		

 

                
	
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phương Xinh Gái</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	 <div class="container">
	   	<div class="header">
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
							   include_once "header.php";
							  ?>
							 
							 
						 </div>
	   	    		<form action="timkiem.php" method="post" accept-charset="utf-8">
	   	    			 <input type="search" name="search" placeholder="search here">
							<button type="submit" class="button_1" name="btn-search">search</button>
	   	    		</form>
	   	    		 
	   	    	</div>
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
				 
	   	    </div>
	   	    <div class="div-menu-bu">
   	    	 	
	   	    	<div class="img-chay">
	   	    		  
	   	    		 	<img class="maithi" src="images/2.jpg" alt="">
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
	   	    	
	   	    </div>
	   	   
	   	</div>
	   	<div class="cha">
	   		<div class="cha-di-chuyen" id="cha-di-chuyen">
			   <?php
			   layHangSanPham();
			   ?>
	   				<!-- <a href="danhmuc.php?brand=$brand_id" bid="">
	   				<div class="con">
	   					<img class="anh1 anh" src="images/Huawei42-b_16.jpg" alt="">
	   					
	   				</div>
	   				</a>
	   				<a href="danhmuc.php?brand=$brand_id" bid="">
	   					<div class="con">
	   	    			<img class="anh1 anh" src="images/OPPO42-b_23.jpg" alt="">
	   			
	   	    		</div>
	   				</a>
	   	    		<a href="danhmuc.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/Samsung42-b_25.jpg" alt="">
	   					 
	   	    		</div>
	   	    		</a>
	   	    		<a href="danhmuc.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/Xiaomi42-b_33.png" alt="">
	   					
	   	    		</div>
	   	    		</a>
	   	    		<a href="danhmuc.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/iPhone-(Apple)42-b_16.jpg" alt="">
	   				
	   	    		</div>
	   	    		</a>
	   	    		<a href="danhmuc.php?brand=$brand_id" bid="">
	   	    			<div class="con">
	   	    			<img class="anh1 anh" src="images/Nokia42-b_21.jpg" alt="">
	   				
	   	    		</div>
	   	    		</a> -->
	   	    		
	   		</div>
	   	    		
	   	  </div>
		<div class="content">
			 
			 
				 
				 
			 
						
					<?php
					layLoaiSanPham();
					?>
					
				 <!-- <div class="most xe-may">
				 	<a href="index.php?cat=$cat_id" cid="">
						 
									Điện thoại
								 
						 
					</a>
				 </div>
				 <div class="most xe-may">
				 	<a href="index.php?cat=$cat_id" cid="">
						 
							 
									Máy tính bảng
							 
							
						 
					</a>
				 </div> -->
				  
				  
         <div class="boc">
	   	     <form action="" enctype="multipart/form-data" method="POST" class="form-cart">
                     
                     <div class="bao-tieude">
                     	 <div class="tieude">
                     	 	<span class="xoa">Xóa</span>
                     	 </div>
                     	 <div class="tieude">
                     	 	<span class="sanpham">Sản Phẩm</span>
                     	 </div>
                     	 <div class="tieude">
                     	 	 <span class="soluong">Số Lượng</span>
                     	 </div>
                     	<div class="tieude">
                     		 <span class="gia">Giá</span>
                 	     </div>
                     	 
                     </div>




			<?php
			global $con;
			$query = "SELECT * from giohang";
			$result = mysqli_query($con, $query);
			
			while($row = mysqli_fetch_array($result))
			{
					 $id = $row['MaSanPham'];
					 $soluong = $row['soluong'];
					 $query_sp = "SELECT * from sanpham where masanpham='$id'";
					 $result_sp = mysqli_query($con,$query_sp);
					  while($row_sp = mysqli_fetch_array($result_sp))
					  {
						  $tensp = $row_sp['TenSanPham'];
						  $gia =  $row_sp['GiaSanPham'];
						  $anh = $row_sp['AnhURL'];
			?>
                     <div class="boc-sp">
                       
                      	<input type="checkbox" name="remove[]" class="i" value="<?php echo $id;?>">
                      
                      <div class="sanpham-img">
                      	 <div class="div-img">
                      	 	<img src="images/<?php echo $anh;?>" alt="" class="img">
                      	 </div>
                      	 <div class="thongtinsp">
                      	 	<div class="tensp">
                      	 		<?php echo $tensp;?>
                      	 	</div>

                      	 </div>
                  	 </div>
                      	
                      	 <div class="soluong">
                      	 	<input type="text" name="soluong" class="sl">
                      	 </div>
                      	  <div class="giasp">
                      	 	   <?php echo number_format($gia); echo 'đ'?>
                      	 </div>
                     </div>

			
                      
                    

						<?php
				}
			}
				?>     
                    <!-- <div class="boc-sp">
                       
                      	<input type="checkbox" name="remove[]" class="i">
                      
                      <div class="sanpham-img">
                      	 <div class="div-img">
                      	 	<img src="images/10.jpg" alt="" class="img">
                      	 </div>
                      	 <div class="thongtinsp">
                      	 	<div class="tensp">
                      	 		SAMSUNG GALAXY J7 PRO
                      	 	</div>

                      	 </div>
                  	 </div>
                      	
                      	 <div class="soluong">
                      	 	<input type="text" name="soluong" class="sl">
                      	 </div>
                      	  <div class="giasp">
                      	 	   70,000,000 đ
                      	 </div>
                     </div>

                     
                      
                    </div>
                    <div class="boc-sp">
                       
                      	<input type="checkbox" name="remove[]" class="i">
                      
                      <div class="sanpham-img">
                      	 <div class="div-img">
                      	 	<img src="images/10.jpg" alt="" class="img">
                      	 </div>
                      	 <div class="thongtinsp">
                      	 	<div class="tensp">
                      	 		SAMSUNG GALAXY J7 PRO
                      	 	</div>

                      	 </div>
                  	 </div>
                      	
                      	 <div class="soluong">
                      	 	<input type="text" name="soluong" class="sl">
                      	 </div>
                      	  <div class="giasp">
                      	 	   70,000,000 đ
                      	 </div>
                     </div> -->

                     
                      
                    <!-- </div> -->
                    


                 

	   	     	  <!--  trong while -->
                     <!-- trong while -->
               <!-- <div class="tac-vu"> -->
               	<input type="submit" name="xoa-s" value="Xóa" class="bam">
	   	     	<input type="submit" name="muasam" value="Thanh Toán" class="bam">

              <!--  </div> -->
	   	     	
	   	     </form>
				<?php
				$ip = getip();
                if(isset($_POST['xoa-s'])){
 
					foreach($_POST['remove'] as $remove){
					
						$delete_product = "DELETE from giohang where masanpham='$remove' AND ip_add='$ip'";
						$run_delete = mysqli_query($con, $delete_product);
						echo $ip;
						if($run_delete){
						
						  echo "<script>window.open('giohang.php','_self')</script>"    ;  
						
						}
					
					}
				  
				  }
				?>
	   	    
				 
	   	      
		 
	   </div>
	    



               
     
               
                   
                
                        
        
				 <!-- <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Laptop Dell
								</div>
								<p class="the-p">21,899 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Cap Hoc Sinh
								</div>
								<p class="the-p">2,252 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				<div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Hinh Xam Dan
								</div>
								<p class="the-p">219 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">

								<div class="ten-san-pham">
									Hinh Xam Dan
								</div>
								<p class="the-p">219 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/samsung-galaxy-s9-plus-128gb-600x600-600x600-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Hinh Xam Dan
								</div>
								<p class="the-p">219 products</p>
							</div>
						</div>
					</a>
				 </div> -->
				 
	 
		 

			<div class="ban-chay-nhat" id="cha-di-chuyen">
						
				  
				 <!-- <div class="most xe-may">
				 	<a href="index.php?cat=$cat_id" cid="">
						 
									Điện thoại
								 
						 
					</a>
				 </div>
				 <div class="most xe-may">
				 	<a href="index.php?cat=$cat_id" cid="">
						 
							 
									Máy tính bảng
							 
							
						 
					</a>
				 </div> -->
				 <!-- <div class="most most1">
				 		<a href="details.php?pro_id=$product_id">
							<div class="most-nho">
								<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
								<div class="nho">
									<div class="ten-san-pham">
										Loa Karaoke
									</div>
									<p class="the-p">57,248 đ</p>
								</div>
							</div>
						</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Laptop Dell
								</div>
								<p class="the-p">21,899 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Cap Hoc Sinh
								</div>
								<p class="the-p">2,252 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				<div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Tu lanh
								</div>
								<p class="the-p">9,465 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Hinh Xam Dan
								</div>
								<p class="the-p">219 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/huawei-nova-3-2-600x600.jpg" alt=""></div>
							<div class="nho">

								<div class="ten-san-pham">
									Hinh Xam Dan
								</div>
								<p class="the-p">219 đ</p>
							</div>
						</div>
					</a>
				 </div>
				 <div class="most most1">
				 	<a href="details.php?pro_id=$product_id">
						<div class="most-nho">
							<div class="nho"><img class="img1" src="images/samsung-galaxy-s9-plus-128gb-600x600-600x600-600x600.jpg" alt=""></div>
							<div class="nho">
								<div class="ten-san-pham">
									Hinh Xam Dan
								</div>
								<p class="the-p">219 products</p>
							</div>
						</div>
					</a>
				 </div> -->
	 
			</div> <!-- 1180 -->
		 </div> <!-- ket thuc most-popular -->
			
			<div class="collections">
				 	 
			</div> <!-- ket thuc collections -->
			<div class="flash-sale">
				
			</div> <!-- ket thuc flash-sale -->
			<div class="lazMall">
				
			</div><!-- ket thuc lazMall -->
			<div class="categories">
				
			</div> <!-- ket thuc categories -->
			<div class="just-for-you">
				
			</div> <!-- ket thuc just-for-you -->
		</div>
   		<div class="footer">
   			    1660623-1660618-1660709
   		</div>
	 </div>
</body>
</html>