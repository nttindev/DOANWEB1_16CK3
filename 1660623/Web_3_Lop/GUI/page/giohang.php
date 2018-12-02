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
	   	     <form action="capnhat.php" enctype="multipart/form-data" method="POST" class="form-cart">
                     
                     <div class="bao-tieude">
                     	<div class="tieude">
                     	 	<span class="xoa">Cập Nhật</span>
                     	 	 
                     	 </div>
                     	 <div class="tieude">
                     	 	 
                     	 	<span class="xoa">Xóa</span>
                     	 </div>
                     	 <div class="tieude-sanpham">
                     	 	<span class="sanpham">Sản Phẩm</span>
                     	 </div>
                     	 <div class="tieude-soluong">
                     	 	 <span class="soluong">Số Lượng</span>
                     	 </div>
                     	<div class="tieude-tongtien">
                     		 <span class="gia">Tổng Tiền</span>
                 	     </div>
                     	 
                     </div>


  

			<?php

			if(isset($_SESSION['id_nguoidung']))
			{
			global $con;
			$user = $_SESSION['id_nguoidung'];
			$query = "SELECT * from giohang where manguoidung = '$user'";
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
                       
                      	<input type="checkbox" name="remove_<?php echo $id;?>" class="i" value="<?php echo $id;?>">
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
                      	 	<select name="soluong_<?php echo $id;?>" id="" class="sl" >
						<option>
						   [Số lượng]
						</option>
						<?php

						for($i=1; $i < 1000;++$i)
						{
						?>
						      <option value="<?php echo $i; ?>" >
						      	<?php echo $i; ?>
						      </option>
						<?php
						}
						?>
				</select>
                      	 	  
                      	 </div>
                      	  <div class="giasp">
                      	 	   <?php echo number_format($gia*$soluong); echo 'đ'?>
                      	 </div>
                     </div>

			
                      
                    

						<?php
					  }
				}
				 
			}
		 
			else
			{
				 
				global $con;
			//	$user = $_SESSION['id_nguoidung'];
				$query = "SELECT * from giohang where manguoidung = -1";
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
						   
							  <input type="checkbox" name="remove_<?php echo $id;?>" class="i" value="<?php echo $id;?>">
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
								   <select name="soluong_<?php echo $id;?>" id="" class="sl" >
							<option>
							   [Số lượng]
							</option>
							<?php
	
							for($i=1; $i < 1000;++$i)
							{
							?>
								  <option value="<?php echo $i; ?>" >
									  <?php echo $i; ?>
								  </option>
							<?php
							}
							?>
					</select>
									 
							   </div>
								<div class="giasp">
									  <?php echo number_format($gia*$soluong); echo 'đ'?>
							   </div>
						 </div>
						 <?php
						}	 
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
               	<input type="submit" name="update-s" value="Cập Nhật" class="bam">
	   	     	<input type="submit" name="muasam" value="Thanh Toán" class="bam">

              <!--  </div> -->
	   	     	
	   	     </form>
	   	      
				
				 
	   	      
		 
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