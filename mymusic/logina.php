<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $loginemail = mysqli_real_escape_string($db,$_POST['loginemail']);
      $loginpass = mysqli_real_escape_string($db,$_POST['loginpass']); 
      

      $sql = "SELECT id FROM userdetails WHERE uname = '$loginemail' and password = '$loginpass'";
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
<!DOCTYPE html>
<html>
  <head>


<style> 

#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 200px;
    height: 9px;    

    #rcorners1 {
    border-radius: 25px;
    background: #73AD21;
    padding: 20px; 
    width: 200px;
    height: 9px; 

        #rcorners2 {
    border-radius: 25px;
    background: #73AD21;
    padding: 20px; 
    width: 200px;
    height: 9px; 
    
    

}

.btn:hover {
  text-decoration: none;
}     
}
}

</style>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Bred Traversy">
    <title>My music | Welcome</title>
    <link rel="stylesheet" href="./css/style.css ">
  </head>
  <body>
    <header>
      <div class="container">
      	<div id="branding">
      	  <h1> My music </h1>
      	</div>
      	<nav>
      		<ul>
             <li><a href="index.php">Home</a> </li>
             <li><a href="albums.php">Albums</a> </li>
             <li><a href="Catalog.php">Catalog</a> </li>
             <li><a href="News.php">News</a> </li>
             <li><a href="Contact.php">Contact</a> </li>

             <li><a href="signup.php">Signup</a></li>
           </ul>
      	</nav>
      </div>

   
    </header>

    <div class="content">

<section id="showcase">
      <div class="container">
        <h2>
	<form method="post">

Username:<br>
  <input type="text" name="loginemail" placeholder="Please enter your user name" style="width: 200px" id="rcorners2">
  <br><br>
Password:<br>
  <input type="password" name="loginpass" placeholder="Please enter your user password" style="width: 200px" id="rcorners2">
  <br><br>
  <input type="submit" value="Login" id="rcorners2">
</form> </h2>

      </div>  
    </section>

    
   
      </div>  

      
    </div>
  	
  

    <footer>
      <p>My music, Copyright &copy; 2017</p>
    </footer>
      </body>
 </html>
        
  