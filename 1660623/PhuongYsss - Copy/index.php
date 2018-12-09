

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./GUI/css/style.css">
</head>
<body>
	 
	   <div class="container">
                    
                  <?php
                  require_once "DTO/SanPham.php";
                  require_once "DTO/LoaiSanPham.php";
                   require_once "DTO/TaiKhoan.php";
			   	  	       require_once "DTO/HangSanXuat.php";
			   	  	        require_once "DTO/QuanTri.php";
			   	  	        require_once "DTO/GioHang.php";

			   	  	       require_once "DAO/db.php";
			   	  	      require_once "DAO/SanPhamDAO.php";
			   	  	      require_once "DAO/HangSanXuatDAO.php";
			   	  	        require_once "DAO/LoaiSanPhamDAO.php";
			   	  	         require_once "DAO/TaiKhoanDAO.php";
			   	  	         require_once "DAO/QuanTriDAO.php";
			   	  	          require_once "DAO/GioHangDAO.php";

			   	  	      require_once "BUS/SanPhamBUS.php";
			   	  	       require_once "BUS/HangSanXuatBUS.php";
			   	  	        require_once "BUS/LoaiSanPhamBUS.php";
			   	  	        require_once "BUS/TaiKhoanBUS.php";
			   	  	         require_once "BUS/QuanTriBUS.php";
			   	  	          require_once "BUS/GioHangBUS.php";
			   	   include_once ("GUI/module/header_chung.php");
			   	    ?>
			   	     <?php include_once ("GUI/module/cha.php"); ?>
			   <div class="content">
			   	  	  <?php 
			   	  	       
			   	  	  		$a = isset($_GET['b'])&&$_GET['b']?$_GET['b']:'home';
			   	  	  		$path = 'GUI/page/'.$a.'.php';
			   	  	  		if(file_exists($path))
			   	  	  		{
			   	  	  			include $path;
			   	  	  			 
			   	  	  		}
			   	  	  		else
			   	  	  		{
			   	  	  			include "GUI/page/404.php";
			   	  	  		}

			   	  	   ?>
			   	  </div>
                   
                 
			   	 

	 			
			   	 
			   	  	
			   	  <?php include ("GUI/module/footer.php") ?>
	   </div>
	     
</body>
</html>