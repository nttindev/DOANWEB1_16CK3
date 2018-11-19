<?php
    //  header("Content-type: text/html; charset=utf-8");
    //  $con = mysqli_connect("localhost","root","","shop_online");
    //  mysqli_set_charset($con, 'UTF8');
    include_once "db.php";
    function laychitietsanpham()
    {

      if(isset($_GET['pro_id']))

            {
				$id = $_GET['pro_id'];
				global $con;
				$tenhang;
				$query_ten = "SELECT * from sanpham where masanpham='$id'";
				$result_ten = mysqli_query($con,$query_ten);
				while($row = mysqli_fetch_array($result_ten))
				{
					
				 $anh = $row['AnhURL'];
				 $tensanpham = $row['TenSanPham'];
				 $gia = $row['GiaSanPham'];
				 $luotxem = $row['SoLuongXem'];
				 $luotban = $row['SoLuongBan'];
				 $mota = $row['MoTa'];
				 $xuatxu = $row['XuatXu'];
				 $nhasanxuat = $row['MaHangSanXuat'];

                      
                 
				$query_hang = "SELECT * from hangsanxuat where mahangsanxuat='$nhasanxuat'";
				$result_hang = mysqli_query($con,$query_hang);
				while($row1 = mysqli_fetch_array($result_hang))
				   {
				   $tenhang = $row1['TenHangSanXuat'];
					  
				     
				   }
				  
				  
				}
			}
			echo  '<div class="sanpham">
			<div class="img-right">
					<img src="images/'.$anh.'" alt="" class="img-sanpham">
			</div>
			<div class="thong-tin">
				  <div class="tensanpham">
					   <a href="" class="a-nha-san-xuat">Tên Sản phẩm: '.$tensanpham.'</a>
				  </div>
				  <div class="gia-ban">
					  <p class="p-gia-ban">Giá:  '.number_format($gia).' đ</p>
				  </div>
				  <div class="so-luot-xem">
					   <div>
						   <p class="p-luot-xem">Lươt Xem: '.$luotxem.' Lượt Xem</p>
					   </div>
					   <div>
						   <img src="" alt="" class="img-con-mat">
					   </div>
				  </div>
				  <div class="so-luot-ban">
					  <p class="p-so-luot-ban">Lượt bán: '.$luotban.' Lượt Bán</p>
				  </div>
				  <div class="mo-ta">
					  
					  <div class="tieu-de">
							<h1>Mô Tả</h1>
							<div class="thong-tin-sp">
								<p class="p-mota">'.$mota.'</p>
							</div>
					  </div>
				  </div>
				  <div class="xuat-xu">
					  <p class="p-xuat-xu">Xuất xứ: '.$xuatxu.'</p>
				  </div>
				  <div class="nha-san-xuat">
					   <p class="p-xuat-xu">Nhà sản xuất: '.$tenhang.'</p>
				  </div>
				  <div class="mua-ngay">
					  <a href="" class="nut-nhan" name="shopping">MUA NGAY</a>
				  </div>
				   <div class="them-vao-gio-hang">
					   <a href="" class="nut-nhan1" name="AddtoCart">THÊM VÀO GIỎ HÀNG</a>
				   </div>
			</div>
	   </div>';
		}

   function sanphamtuongtu()
   {
	 
	if(isset($_GET['pro_id']))

	{
		$id = $_GET['pro_id'];
		global $con;
		$tenhang;
		$query = "SELECT * from sanpham where masanpham='$id'";
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result))
		{
			
			 
			$maloai = $row['MaLoaiSanPham'];
			$query_maloai= "select * from sanpham where maloaisanpham = '$maloai'";
			$result_maloa = mysqli_query($con,$query_maloai);
			while($row_maloai = mysqli_fetch_array($result_maloa))
			{
				$anh = $row_maloai['AnhURL'];
				$tensanpham = $row_maloai['TenSanPham'];
				$gia =  $row_maloai['GiaSanPham'];
				$product_id = $row_maloai['MaSanPham'];
				echo '
						<div class="most most1">
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
				</div>
				';
			}

		}
    
   }
       
}
     
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
	   	    		<form action="" method="post" accept-charset="utf-8">
	   	    			 <input type="search" name="search" placeholder="search here">
							<button type="submit" class="button_1" name="btn-search">search</button>
	   	    		</form> -->
					   <div class="main-wrapper">
					   <?php
					   include_once "header.php";
					   ?>
	   	    		 </div>
					<form action="" method="post" accept-charset="utf-8">
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
	   	    		<!-- <div class="sanpham">
	   	    			 <div class="img-right">
	   	    			 	    <img src="images/huawei-nova-3-2-600x600.jpg" alt="" class="img-sanpham">
	   	    			 </div>
	   	    			 <div class="thong-tin">
	   	    			 	  <div class="tensanpham">
	   	    			 	  	 <a href="" class="a-nha-san-xuat">Tên Sản phẩm: NoKia</a>
	   	    			 	  </div>
	   	    			 	  <div class="gia-ban">
	   	    			 	  	<p class="p-gia-ban">Giá:  1000000 đ</p>
	   	    			 	  </div>
	   	    			 	  <div class="so-luot-xem">
	   	    			 	  	 <div>
	   	    			 	  	 	<p class="p-luot-xem">Lươt Xem: 25000 Lượt Xem</p>
	   	    			 	  	 </div>
	   	    			 	  	 <div>
	   	    			 	  	 	<img src="" alt="" class="img-con-mat">
	   	    			 	  	 </div>
	   	    			 	  </div>
	   	    			 	  <div class="so-luot-ban">
	   	    			 	  	<p class="p-so-luot-ban">Lượt bán: 25000 Lượt Bán</p>
	   	    			 	  </div>
	   	    			 	  <div class="mo-ta">
	   	    			 	  	
	   	    			 	  	<div class="tieu-de">
	   	    			 	  		  <h1>Mô Tả</h1>
	   	    			 	  		  <div class="thong-tin-sp">
	   	    			 	  		  	<p class="p-mota">industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
	   	    			 	  		  </div>
	   	    			 	  	</div>
	   	    			 	  </div>
	   	    			 	  <div class="xuat-xu">
	   	    			 	  	<p class="p-xuat-xu">Xuất xứ: Trung Quốc</p>
	   	    			 	  </div>
	   	    			 	  <div class="nha-san-xuat">
	   	    			 	  	 <p class="p-xuat-xu">Nhà sản xuất: SamSung</p>
	   	    			 	  </div>
	   	    			 	  <div class="mua-ngay">
	   	    			 	  	<a href="" class="nut-nhan" name="shopping">MUA NGAY</a>
	   	    			 	  </div>
	   	    			 	   <div class="them-vao-gio-hang">
	   	    			 	   	<a href="" class="nut-nhan1" name="AddtoCart">THÊM VÀO GIỎ HÀNG</a>
	   	    			 	   </div>
	   	    			 </div>
	   	    		</div> -->
					   <?php
		 laychitietsanpham();
		 ?>
					<!-- <div class="most xe-may">
				 	 CÁC SẢN PHẨM CÙNG LOẠI
				 </div> -->
				
    		<div class="nam-san-pham-cung-loai">
    			 <div class="cung-loai">
				 	  CÁC SẢN PHẨM CÙNG LOẠI
				 </div>
				 <?php
				  sanphamtuongtu();
				 ?>
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
				 </div> -->
	    		</div>
	   		</div>
	   	    		
	   	  </div>
		<div class="content">
			 
	    </div>
   		<div class="footer">
   			    1660623-1660618-1660709
   		</div>
	 </div>
</body>
</html>