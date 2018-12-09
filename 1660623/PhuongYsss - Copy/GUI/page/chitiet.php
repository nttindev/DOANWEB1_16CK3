
 
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
		 // laychitietsanpham();
		      if(isset($_GET['pro_id']))
		      {


		      	$maSanPham = $_GET['pro_id'];
		      	   $sanPhamBUS = new SanPhamBUS();

		      $sanPhamBUS = $sanPhamBUS->GetByID_ChiTiet($maSanPham);
		       
		      
		        $sanPhamBUSS = new SanPhamBUS();
		      $sanPhamBUSS->Update($maSanPham);
		      	//    $sanPhamBUS->Update($soLuotXem,$maSanPham);
		      	    $maHangSanXuat = $sanPhamBUS->MaHangSanXuat;
		      	     	 // $soLuotXem = $sanPhamBUSS->SoLuotXem;
                         
		      	     	   
		      	     	 
		      	     	$hangSanXuatBUS = new HangSanXuatBUS();
		      	     	$hangSanXuatBUS =  $hangSanXuatBUS->GetByID($maHangSanXuat);
		      	         

		      	     		
		      	     	 
		      	     	// echo ''
		       
		      	        
		      	   	    

		      	   	     // $hangSanXuatBUS = new HangSanXuatBUS();
		      	   	     // $lstHang = $hangSanXuatBUS ->GetByID($maHangSanXuat);
		      	   	      
                  //            $tenHang = $hangSanXuatBUS->TenHangSanXuat;
		      	   	     
		      	   
		      	   echo '<div class="sanpham">
             <div class="img-right">
                     <img src="GUI/images/'.$sanPhamBUS->AnhURL.'" alt="" class="img-sanpham">
             </div>
             <div class="thong-tin">
                   <div class="tensanpham">
                        <a href="" class="a-nha-san-xuat">Tên Sản phẩm: '.$sanPhamBUS->TenSanPham.'</a>
                   </div>
                   <div class="gia-ban">
                       <p class="p-gia-ban">Giá:  '.number_format($sanPhamBUS->GiaSanPham).' đ</p>
                   </div>
                   <div class="so-luot-xem">
                        <div>
                            <p class="p-luot-xem">Lươt Xem: '.$sanPhamBUS->SoLuotXem.' Lượt Xem</p>
                        </div>
                        <div>
                            <img src="" alt="" class="img-con-mat">
                        </div>
                   </div>
                   <div class="so-luot-ban">
                       <p class="p-so-luot-ban">Lượt bán: '.$sanPhamBUS->SoLuongBan.' Lượt Bán</p>
                   </div>
                   <div class="mo-ta">
                       
                       <div class="tieu-de">
                             <h1>Mô Tả</h1>
                             <div class="thong-tin-sp">
                                 <p class="p-mota">'.$sanPhamBUS->MoTa.'</p>
                             </div>
                       </div>
                   </div>
                   <div class="xuat-xu">
                       <p class="p-xuat-xu">Xuất xứ: '.$sanPhamBUS->XuatXu.'</p>
                   </div>
                   <div class="nha-san-xuat">
                        <p class="p-xuat-xu">Nhà sản xuất: '.$hangSanXuatBUS->TenHangSanXuat.'</p>
                   </div>
                   <div class="mua-ngay">
                       <a href="" class="nut-nhan" name="shopping">MUA NGAY</a>
                   </div>
                    <div class="them-vao-gio-hang">
                        <a href="index.php?addcart='.$sanPhamBUS->MaSanPham.'" class="nut-nhan1" name="AddtoCart">THÊM VÀO GIỎ HÀNG</a>
                    </div>
             </div>
        </div>';
		      }
		 ?>
		 
					<!-- <div class="most xe-may">
				 	 CÁC SẢN PHẨM CÙNG LOẠI
				 </div> -->
				
    		<div class="nam-san-pham-cung-loai">
    			 <div class="cung-loai">
				 	  CÁC SẢN PHẨM CÙNG LOẠI
				 </div>
				 <?php
				  // sanphamtuongtu();
       if(isset($_GET['pro_id'])){
       	   $maSanPham = $_GET['pro_id'];
       	   $sanPhamBUS = new SanPhamBUS();
       	   $sanPhamBUSS =  $sanPhamBUS->GetByID_ChiTiet($maSanPham);
       	   $maLoaiSanPham = $sanPhamBUSS->MaLoaiSanPham;
       	   $lstSanPham   = $sanPhamBUS->GetByID_Loai($maLoaiSanPham);
       	   $count = 0;
       	   foreach($lstSanPham as $sanPhamBUS)
       	   {
	       	   	if($count < 5)
	       	   	{
	       	   		 echo '<div class="most most1">
	                         <a href="?b=chitiet&pro_id='.$sanPhamBUS->MaSanPham.'">
	                         <div class="most-nho">
	                             <div class="nho"><img class="img1" src="GUI/images/'.$sanPhamBUS->AnhURL.'" alt=""></div>
	                             <div class="nho">
	                                 <div class="ten-san-pham">
	                                     '.$sanPhamBUS->TenSanPham.'
	                                 </div>
	                                 <p class="the-p">'.number_format($sanPhamBUS->GiaSanPham).' đ</p>
	                             </div>
	                         </div>
	                     </a>
	                 </div>';
	       	   	}
	               $count ++;
       	   }

       }
       
         

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
  
	