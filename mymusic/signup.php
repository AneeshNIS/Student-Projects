<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Bred Traversy">
    <title>My music | Contact  </title>
    <link rel="stylesheet" href="./css/style.css ">
<title>Sign up</title>
 <meta charset="utf-8">
</head>

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
             <li><a href="Login.php">Login</a></li>
      		 <li class="current"><a href="signup.php">Signup</a> </li>		
      		</ul>
      	</nav>
      </div>
    	
    </header>

    <section id="newsletter">
  		<div class="container">
  		  <h1>Search music</h1>
  		  <form>
  		  	<input type="text" placeholder="Search music...">
  		  	<button type="submit" class="button_1">Find</button>
  		  </form>
  		</div>
  	</section>


<body>

<section id="main">
      <div class="container">
       <img src="./img/Sign.png">
        
        <aside id="sidebar">
        <form action = "process.php" method="POST">
         <h1 class="page-title"> SIGN UP</h1>
         <div>
         	<label>First name</label><br>
         	<input type = "text"  placeholder="Enter  first name" autocomplete="off" name="fname" required>
         </div>
         <div>
         	<div>
         		<label>Last name name</label><br>
         		<input type = "text" name="lname" placeholder="Enter last name" required>
         	</div>
          <div>
          	   <label>Username</label><br>
               <input type = "text" name="uname" placeholder="Enter username" required>
          </div>
         <div>
         	<label>Password</label><br>
         	<input type = "password" name="parola" placeholder="Enter password" required>
         </div>

     <button type="submit" class="button_1">Sign up</button>
              </form>
         
      </aside>
         </div>
      </section>


	
	
	
	
	
	
	<footer>
  		<p>My music, Copyright &copy; 2017</p>
  	</footer>
  </body>
 </html>

</body>
</html>