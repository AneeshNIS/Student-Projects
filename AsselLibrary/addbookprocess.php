<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarysystem";


$BookName=$_POST['BookName'];
$Author=$_POST['Author'];
$ISBN=$_POST['ISBN'];
$Issue=$_POST['Issue'];
$Numbers=$_POST['Numbers'];
$Genre=$_POST['Genre'];
$Publisher=$_POST['Publisher'];
$Year=$_POST['Year'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO bookmastertable (bookname, bookauthor, 	bookISBN, bookissuenumber, bookpagenumbers, bookgenre,	bookpublisher, bookyear)
VALUES ('$BookName', '$Author', '$ISBN', '$Issue', '$Numbers', '$Genre', '$Publisher','$Year')";

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