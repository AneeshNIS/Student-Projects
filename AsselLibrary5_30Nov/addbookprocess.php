<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarysystem";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$uploadOk = 0;

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





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