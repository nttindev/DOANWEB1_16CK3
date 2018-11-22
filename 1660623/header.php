<?php
    session_start();
?>


 
 
  <?php
  
          if(isset($_SESSION['id_nguoidung']) && isset($_SESSION['ten_nguoidung']))
          {
                echo ' 
                <div class="navi"><a class="a" href="index.php">Hi '.$_SESSION['ten_nguoidung'].' !</a></div>
                <div class="navi"><a class="a" href="giohang.php" name="giohang"><img class="giohang" src="images/giohang.png" alt=""></a></div>
                <div class="navi"><a class="a" href="index.php">HOME</a></div>
                
                <form action="dangxuat.php" method="POST">
                 
                          <button type="submit" name="submit" class="logout" >Logout</button>
                </form> 
                
                ';
          }
          else{
              echo ' 
              <div class="nav-login">
              <div class="navi"><a class="a" href="giohang.php"><img class="giohang" src="images/giohang.png" alt=""></a></div>
              <div class="navi"><a class="a" href="index.php">HOME</a></div>
              <div class="navi"><a class="a" href="dangkythu.php">SIGN UP</a></div>
              <form action="dangnhap.php" class="form" method="post">
              <input type="text" name="username" placeholder="Username/e-mail">
                    <input type="password" name="password" placeholder="password">
                    <button type="submit" name="submit">Login</button>
              </form>
              </div>
              ';
          }
          
         
  ?>
           
    
    
 
