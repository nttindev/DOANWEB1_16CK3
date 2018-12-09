<?php
         if(isset($_POST['logout']))
         {
               @session_start();
              session_unset();
             session_destroy();
      //      include_once ('DAO/db.php');
    		// DB::ChangeURL('index.php');
    		 echo "<script>window.open('index.php','_self')</script>";
    	
    		exit();
              
         }
?>