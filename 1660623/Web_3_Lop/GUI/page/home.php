

 
<div class="div-most-popular">
				 
				 
			<div class="most-popular" id="cha-di-chuyen">
						
					<?php
					//layLoaiSanPham();
				    $loaiSanPhamBUS = new LoaiSanPhamBUS();
				     $lstSanPham = $loaiSanPhamBUS->GetAllAvailable();
				     foreach($lstSanPham as $loaiSanPhamBUS)
				     {
				     	echo '<div class="most xe-may">
			   <a href="?b=danhmuc_loaisanpham&cat='.$loaiSanPhamBUS->MaLoaiSanPham.'" cid="">
				   
							 '.$loaiSanPhamBUS->TenLoaiSanPham.'
						   
				   
			  </a>
		   </div>';
				     }
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
				  
				  <div class="ban-chay">
				 	  CÁC SẢN PHẨM BÁN CHẠY NHẤT
				 </div>



                <?php
     
                //    global $con;
                    
                //        $query = "SELECT * from sanpham";
                //        $result = mysqli_query($con,$query);
                      
                      
                    //    $row['MaSanPham'];
                    //    $row['AnhURL'];
                    //      $row['TenSanPham'];
                    //     $row['GiaSanPham'];

                   

                         // laysanpham();
                          $sanPhamBUS = new SanPhamBUS();
   	      $lstSanPhamBanChay = $sanPhamBUS->GetProductSelling();
   	      $count = 0;

   	      foreach($lstSanPhamBanChay as $sanPhamBUS)
   	      {
 		      
 		       if($count < 10)
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
                   
                ?>
                        
        
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
				 
	 
			</div> <!-- ket thuc most-popular -->

			<div class="ban-chay-nhat" id="cha-di-chuyen">
						
				 <div class="cung-loai">
				 	  SẢN PHẨM MỚI NHẤT
				 </div>
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
				  <?php
				  // laySanPhamMoi();
				     $sanPhamBUS = new SanPhamBUS();
				    $lstSanPham =  $sanPhamBUS->GetProductNew();
				   $count = 0;
				   foreach ($lstSanPham as $sanPhamBUS)
				   {
				   	    
				   	     if($count < 10)
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
	 
			</div> <!-- 1180 --> <!-- ket thuc ban chay nhat -->
		 </div> <!-- ket thuc div- most-popular -->
			
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