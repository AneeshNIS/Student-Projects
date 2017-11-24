<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shynar";

$first_name=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['pnumber'];
$question=$_POST['question'];

echo $phone;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO data (name, email, phonenu, question)
VALUES ('$first_name', '$email', '$phone', '$question')";

if ($conn->query($sql) === TRUE) {
    echo "We have received your Question , Shynar will reply to you soon. Thank you";
?>
<br><br><a href="index.html">Click here to retun to home page</a>
<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>