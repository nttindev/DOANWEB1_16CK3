<?php
    session_start();
?>


 
 
  <?php
  
          if(isset($_SESSION['id_nguoidung']))
          {
               $maNguoiDung = $_SESSION['id_nguoidung'];
               $gioHangBUS = new GioHangBUS();
               $lst = $gioHangBUS->GetByID($maNguoiDung);
               $tong = 0;
               foreach($lst as $gioHangBUS)
               {
                  $tong += $gioHangBUS->SoLuong;
               }

                echo ' 
                <div class="navi"><a class="a" href="index.php">Hi '.$_SESSION['ten_nguoidung'].' !</a></div>
                <div class="navi"><a class="a" href="?b=giohang" name="giohang"><img class="giohang" src="GUI/images/giohang.png" alt=""></a>
                <a href="?b=giohang"><span class="span-soluong">'.$tong.'</span></a>
                </div>
                <div class="navi"><a class="a" href="index.php">HOME</a></div>
                
                <form action="index.php?b=exDangxuat" method="POST">
                 
                          <button type="submit" name="logout" class="logout" >Logout</button>
                </form> 
                
                ';
          }
          else{

              echo ' 
              <div class="nav-login">
              
              <div class="navi"><a class="a" href="index.php">HOME</a></div>
              <div class="navi"><a class="a" href="index.php?b=dangky">SIGN UP</a></div>
              <div class="navi"><a class="a" href="?b=dangnhap">SIGN IN</a></div>
              </div>
              ';
          }
          
         
  ?>
         

        <!--  <form action="?b=dangnhap" class="form" method="post">
              <input type="text" name="username" placeholder="Username/e-mail">
                    <input type="password" name="password" placeholder="password">
                    <button type="submit" name="submit">Login</button>
              </form> -->  
    
    
 
