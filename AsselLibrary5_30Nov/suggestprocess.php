<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarysystem";


$Sugg=$_POST['Sugg'];
$email=$_POST['email'];
$phone=$_POST['phone'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO suggestb (suggestiondata, suggestionemail, suggestionphone)
VALUES ('$Sugg', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for sending your valuable suggestions";
?>
<br><br><a href="index.html">Click here to retun to home page</a>
<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>