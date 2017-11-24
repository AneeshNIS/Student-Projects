<?php

   include("config.php");
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = mysqli_real_escape_string($db,$_POST['fname']);
      $emailaddress = mysqli_real_escape_string($db,$_POST['emailaddress']); 
      $phonenumber = mysqli_real_escape_string($db,$_POST['phonenumber']);
      $message = mysqli_real_escape_string($db,$_POST['message']); 

$sql = "INSERT INTO contacts (name, email, phone, message)
VALUES ('$fname', '$emailaddress', '$phonenumber', '$message')";

if ($db->query($sql) === TRUE) {
    
         $message = "We have received your message, we will contact you asap :)";
echo "<script type='text/javascript'>alert('$message');</script>";

   }
      
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Future - Find your own way</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">FUTURE</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Subjects-Universities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <section id="сщтефсе">
    <h2>Contact Us</h2>
 <form method="post" class="minimal">
          First name<br>
           <input type "text" name="fname" id="fname" placeholder="enter your name" required="required" /><br>

           Email Address<br>
            <input type="text" name ="emailaddress" id="emailaddress" placeholder="enter your valid email" required="required" /><br>


Phone Number<br>
             <input type="text" name ="phonenumber" id="phonenumber" placeholder="enter your phone number" required="required" /><br>


 Message<br>
 <textarea name ="message" id="message" placeholder="enter your message" cols="40" rows="3"></textarea><br>

 <button type ="submit" class ="btn-minimal">Send</buttom><br>
   </form>

</body>
</html>
  