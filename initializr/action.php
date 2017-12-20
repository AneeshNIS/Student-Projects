<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey";

$teacher=$_GET['teacher'];
$timez=$_GET['timez'];
$LessonO=$_GET['LessonO'];
$timemanage=$_GET['timemanage'];
$Comment=$_GET['Comment'];
$observer=$_GET['observer'];

if ($LessonO == "Good") {
    $t=10;}
    if ($LessonO == "Average") {
    $t=7;}
    if ($LessonO == "Basic") {
    $t=5;}
    if ($LessonO == "Not-Acheived") {
    $t=3;}



    if ($timemanage == "Good") {
    $tm=10;}
    if ($timemanage == "Average") {
    $tm=7;}
    if ($timemanage == "Basic") {
    $tm=5;}
    if ($timemanage == "Not-Acheived") {
    $tm=3;}



$total=$t+$tm;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO surveydata (teacher, date, lessonobjective, timemanagement, comment, observer, score)
VALUES ('$teacher', '$timez', '$LessonO', '$timemanage', '$Comment', '$observer', '$total')";

if ($conn->query($sql) === TRUE) {
    echo "Data Uploaded Successfully";
?>
<br><br><a href="index.html">Click here to retun to home page</a>
<?php    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>