<?php
   include("config.php");
   session_start();
$loginemail = mysqli_real_escape_string($db,$_POST['Usernamee']);
$loginpass = mysqli_real_escape_string($db,$_POST['Passworde']); 

echo $loginemail;
echo $loginpass;

      $sql = "SELECT ID FROM user_teacher WHERE Username = '$loginemail' and Password = '$loginpass'";
	  $result = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);


      if($count == 1) {
           header("location: afterreg?email=$loginemail");
      }

      else

      {
      	   $message = "Your Email or Password is invalid";
echo "<script type='text/javascript'>alert('$message');</script>";

      }

?>