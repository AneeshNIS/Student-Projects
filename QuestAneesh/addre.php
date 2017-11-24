<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shynar";

$response=$_POST['response'];
$id=$_POST['idoo'];

$status= 'Replied';






// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE data SET answer='$response',status='Replied'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for adding your response";
?>
<br><br><a href="index.html">Click here to retun to home page</a>
<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>