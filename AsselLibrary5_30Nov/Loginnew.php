<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $loginemail = mysqli_real_escape_string($db,$_POST['loginemail']);
      $loginpass = mysqli_real_escape_string($db,$_POST['loginpass']); 
      

      $sql = "SELECT idno FROM userdetails WHERE emailadd = '$loginemail' and pass = '$loginpass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

		
      if($count == 1) {
         
         header("location: welcome.php?email=$loginemail");
      }else {

         $message = "Your Email or Password is invalid";
echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }
?>
<html >
<head>
<meta charset="UTF-8">
<title>Log In</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section id="loginBox">

	<h2>Log In</h2>
	<form method="post" class="minimal">


    <label for="username">
Email Address
      <input type="text" name="loginemail" id="loginemail" placeholder="Please enter your Email"  required="required" />
    </label>

    <label for="username">
Password
      <input type="password" name="loginpass" id="loginpass" placeholder="Please enter your Password"  required="required" />
    </label>


		<button type="submit" class="btn-minimal">Log In</button><br>

	</form>
</section>
<center><p>Library System</p></center>



  
  
</body>
</html>