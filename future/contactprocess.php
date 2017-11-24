<?php
$servername = "localhost";
$username = "root";
$passworda = "";
$dbname = "future";

$first_name=$_POST['fname'];
$emailaddress=$_POST['emailaddress'];
$phonenumber=$_POST['phonenumber'];
$message=$_POST['message'];

echo $first_name;

// Create connection
$conn = new mysqli($servername, $username, $passworda, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contacts (name, email, phone, message)
VALUES ('$first_name', '$emailaddress', '$phonenumber', '$message')";

if ($conn->query($sql) === TRUE) {
    
         $message = "We have received your message, we will contact you asap :)";
echo "<script type='text/javascript'>alert('$message');</script>";


?>

<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>