<?php   if($_SERVER["REQUEST_METHOD"] == "POST") {


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mymusicdb";

$musicname=$_POST['musicname'];
$Album=$_POST['Album'];
$Length=$_POST['Length'];
$Description=$_POST['Description'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "INSERT INTO mastermusic (musicname, musicalbum  , musiclength,  musicdesc)
VALUES ('$musicname', '$Album', '$Length', '$Description')";

if ($conn->query($sql) === TRUE) {
            $message = "New Music Added";
echo "<script type='text/javascript'>alert('$message');</script>";
}




}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add Music</title>
  <link rel="stylesheet" href="css/styleaneesh.css">
</head>

<body>
  <section id="loginBox">
  <h2>Add New Music Data</h2>
  <form method="post" class="minimal" >
    <label for="username">
      Music Name:
      <input type="text" name="musicname" id="musicname" placeholder="Please Enter Music Name"  required="required" />
    </label>

    <label for="email">
      Album Name:
      <input type="text" name="Album" id="Album" placeholder="Enter Album Name"required="required" />
    </label>


    <label for="pnumber">
Music Length:
      <input type="text" name="Length" id="Length" placeholder="Enter Length of the music in seconds"required="required" />
    </label>

    <label for="username">
Music Description:

      <textarea id="Description" class="text" cols="86" rows ="15" name="question" required="required" placeholder="Write your question here" ></textarea>

    </label>

    <button type="submit" class="btn-minimal">Submit</button>
  </form>
</section>

<section id="loginBox">
  <h2>Music Search</h2>
  <form method="post" class="minimal" action="addqu.php">
    <label for="username">
      Enter Data:
      <input type="text" name="username" id="username" placeholder="Please enter your name"  required="required" />
    </label>



    <button type="submit" class="btn-minimal">Submit</button>
  </form>
</section>


  
  
</body>
</html>
