<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" type="text/css" href="./css/style.css"> -->
    
</head>
<body>      
	<div class="form_i">
		<form action="?a=12" class="frmdangky" align="center" method="POST">
		<h2 class="h2">Thông tin cá nhân</h2>
	<span class="sphoten">Họ tên của bạn </span><input type="text" name="hoten" class="hoten"> <br>
	<span class="spsdt">Số Điện Thoại</span><input type="text" name="sdt" class="sdt"> <br>
	<span class="spngaysinh">Ngày sinh</span><select name="ngay" id="" class="ngaysinh">
						<option>
						   [Ngày]
						</option>
						<?php

						for($i=1; $i < 32;++$i)
						{
						?>
						      <option value="<?php echo $i; ?>" >
						      	<?php echo $i; ?>
						      </option>
						<?php
						}
						?>
				</select>


				<select name="thang" id="" class="ngaysinh">
						<option>
						   [Tháng]
						</option>
						<?php

						for($i=1; $i < 13;++$i)
						{
						?>
						      <option value="<?php echo $i; ?>" class="">
						      	<?php echo $i; ?>
						      </option>
						<?php
						}
						?>
				</select>


                       <?php
                        $nam = date("Y");
                       ?>
				<select name="nam" id="" class="ngaysinh">
						<option>
						   [Năm]
						</option>
						<?php

						for($i=$nam; $i >=1900;--$i)
						{
						?>
						      <option value="<?php echo $i; ?>">
						      	<?php echo $i; ?>
						      </option>
						<?php
						}
						?>
				</select><br>


		<span class="spbansongtai">Bạn sống tại</span> <select name="thanhpho"  class="noisinh">
			            <option value="">--Chọn thành phố--</option>
			           
						<option value="Hồ Chí Minh">Hồ Chí Minh</option>
			             <option value="An Giang">An Giang</option>
			             <option value="Bạc Liêu">Bạc Liêu</option>
			             <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
			             <option value="Bắc Giang">Bắc Giang</option>
			             <option value="Bắc Cạn">Bắc Cạn</option>
			             <option value="Bắc Ninh">Bắc Ninh</option>
			             <option value="Bến Tre">Bến Tre</option>
			             <option value="Bình Dương">Bình Dương</option>
			             <option value="Bình Định">Bình Định</option>
			             <option value="Bình Phước">Bình Phước</option>
			             <option value="Bình Thuận">Bình Thuận</option>
			             <option value="Cà Mau">Cà Mau</option>
			             <option value="Cao Bằng">Cao Bằng</option>
			             <option value="Cần Thơ">Cần Thơ</option>
			             <option value="Đà Nẵng">Đà Nẵng</option>
			             <option value="Đăk Lăk">Đăk Lăk</option>
			             <option value="Đăk Nông">Đăk Nông</option>
			             <option value="Điện Biên">Điện Biên</option>
			             <option value="Đồng Nai">Đồng Nai</option>
			             <option value="Đồng Tháp">Đồng Tháp</option>
			             <option value="Gia Lai">Gia Lai</option>
			             <option value="Hà Giang">Hà Giang</option>
			             <option value="Hải Dương">Hải Dương</option>
			             <option value="Hải Phòng">Hải Phòng</option>
			             <option value="Hà Nam">Hà Nam</option>
			             <option value="Hà Nội">Hà Nội</option>
			             <option value="Hà Tĩnh">Hà Tĩnh</option>
			             <option value="Hậu Giang">Hậu Giang</option>
			             <option value="Hòa Bình">Hòa Bình</option>
			             <option value="Hưng Yên">Hưng Yên</option> 
			             <option value="Khánh Hòa">Khánh Hòa</option>
			             <option value="Kiên Giang">Kiên Giang</option>
			             <option value="Kon Tum">Kon Tum</option>
			             <option value="Lai Châu">Lai Châu</option>
			             <option value="Lạng Sơn">Lạng Sơn</option>
			             <option value="Lào Cai">Lào Cai</option>
			             <option value="Lâm Đồng">Lâm Đồng</option>
			             <option value="Long An">Long An</option>
			             <option value="Nam Định">Nam Định</option>

			             <option value="Nghệ An">Nghệ An</option>
			             <option value="Ninh Bình">Ninh Bình</option> 
			             <option value="Ninh Thuận">Ninh Thuận</option>
			             <option value="Phú Thọ">Phú Thọ</option>
			             <option value="Phú Yên">Phú Yên</option>

			             <option value="Quảng Bình">Quảng Bình</option>
			             <option value="Quảng Nam">Quảng Nam</option>
			             <option value="Quảng Ngãi">Quảng Ngãi</option>
			             <option value="Quảng Ninh">Quảng Ninh</option>
			             <option value="Quảng Trị">Quảng Trị</option>
			             <option value="Sóc Trăng">Sóc Trăng</option>
			             <option value="Sơn La">Sơn La</option>
			             <option value="Tây Ninh">Tây Ninh</option>
			             <option value="Thái Bình">Thái Bình</option>
			             <option value="Thái Nguyên">Thái Nguyên</option>
			             <option value="Thanh Hóa">Thanh Hóa</option>
			             <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
			             <option value="Tiền Giang">Tiền Giang</option>
			             <option value="Trà Vinh">Trà Vinh</option>
			             <option value="Kiên Giang">Kiên Giang</option>
			             <option value="Vĩnh Long">Vĩnh Long</option>
			             <option value="Vĩnh Phúc">Vĩnh Phúc</option>
			             <option value="Yên Bái">Yên Bái</option>

					</select>

 <h2 class="h2">Thông tin tài khoản</h2>
          
             <span class="sptendangnhap">Tên đăng nhập</span><input type="text" name="username" class="ten-dang-nhap"> 
             <!-- <button type="submit" name="submit" value="xác nhận" class="xac-nhan" id="kiemtra" >kiểm tra</button> --><br>
             
       
       	 <span class="spmatkhau">Mật Khẩu</span><input type="password" name="password" class="mat-khau" id="password"><br>
            <progress max="100" value="0" id="strength"   class="do-manh"></progress>
       	<span class="spxacnhan">Xác Nhận Mật Khẩu</span><input type="password" name="xacnhan_password" class="lai-mat-khau">

       
       <button type="submit" name="dangky" class="dangky">Đăng ký</button>
	 				 
</form>
	</div>
      <script>
         var pass = document.getElementById("password");
         pass.addEventListener('keyup',function(){
             checkPassword(pass.value)
         })
         function checkPassword(password)
         {
             var strengthBar = document.getElementById("strength");
             var strength = 0;
             if(password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/))
             {
                 strength +=1
             }
             if(password.match(/[~<>?]+/))
             {
                 strength +=1
             }
             if(password.match(/[!@$%^&*()]+/))
             {
                 strength +=1
             }
             if(password.length >5)
             {
                 strength +=1
             }
             switch(strength)
             {
                 case 0: strengthBar.value = 20;
                 break
                 case 1: strengthBar.value = 40;
                 break
                 case 2: strengthBar.value = 60;
                 break
                 case 3: strengthBar.value = 80;
                 break
                 case 4: strengthBar.value = 100;
                 break
             }
         }
      </script>
</body>
</html>