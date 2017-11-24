<!DOCTYPE html>
<html>
<head>
<title>Summatives</title>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="content">
  <div>
    <h1>Nazarbayev Intellectual school</h1>
    <h2>Aktobe</h2>
  </div>
  <div id="menu">
    <ul>
      <li><a href="index.php">Main page</a></li>
      <li><a href="?a=2">Teachers</a></li>
      <li><a href="?a=3">Rules</a></li>
      <li><a href="?a=5">Grades</a></li>
      <li><a href="?a=7">My page</a></li>
    </ul>
  </div>
  <div id="together">

    <?php
    $a=$_GET ['a'];
    if ($a==1) {
    include ("reg.php");
  }
   else if ($a==2) {
    include ("teachers.php");
  }
  else if ($a==3) {
    include ("rules.php");
  }
  else if ($a==5) {
    include ("grades.php");
  }


?>
    
  <div id="left">
    <h1>Welcome to our web-site!</h1>
    <h2>What do we do?</h2>

    <p>This is site for summative assesment, that is essential part of education system at Nazarbayev Intellectual school . Summative assessment is examination work that will check students' knowledge at the end of each term. Students must take summatives for each subject and this work will affect on their term mark. This site is useful for students to get ready for examination.</p>
    <h2>How to use that site?</h2>
    <p>This site is created for students and teachers of NIS. If you are students, you can use this site for preparing to summative assesment. Here you can find all the information that you have learnt during the term. They will be uploaded by your teachers. If you are teacher, your mission is to upload materials. Before the starting to use the site, <strong>everyone should be registred,</strong> This is free.</p>
    <ul>
      <li class = "first">
      <img src="Images/logo.jpg" style="width:150px"> <p>This is the emblem of school which shows the young tree.</p>
      <li>
      <img src="Images/students.jpg"style="width:150px"><p>There are 20 NIS in Kazakhstan that are located in different cities. They keep working together.</p>
      </li>
      <li>
      <img src="Images/world.jpg"style="width:150px"><p>NIS cooperate with another countries on educating. There more than 20 international teachers in each school.</p>
      </li>
     </ul>
    </div>
  <div id="right">
    <center><h3>welcome to your homepage</h3></center>
  </div>

  </div>
  <?php 
  ?>

  <div>
    <p>&nbsp;</p>
  </div>

  <div id="footer">
    <p><a href="http://nis.edu.kz/">Official site of school</a></p>
  </div>
</div>
</body>
</html>
