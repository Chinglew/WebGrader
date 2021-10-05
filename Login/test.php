<?php
    ob_start();
    session_start();
    if($_SESSION==NULL){
      header("location:Login.php");
     }
    echo $_SESSION['User_ID'];
    echo $_SESSION['User_Status'];
    

?>



<html>
  <body>
  <form action = "logout_process.php" method="POST">
        


        <!-- Login Buttom -->
        <button class="w-100 btn btn-lg btn-primary lgn-btn" type="submit" name="logout" value="logout"><b>Logout</b></button>
        
        </form>





  </body>
</html>