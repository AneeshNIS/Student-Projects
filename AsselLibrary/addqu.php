<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarysystem";

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$userid=$_POST['userid'];
$emailid=$_POST['emailid'];
$parol=$_POST['parol'];
$phonenumba=$_POST['phonenumba'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userdetails (fname, lname, userid, emailadd, pass, pnumber)
VALUES ('$first_name', '$last_name', '$userid', '$emailid', '$parol', '$phonenumba')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for registering your details.";
?>
<br><br><a href="index.html">Click here to retun to home page</a>
<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>