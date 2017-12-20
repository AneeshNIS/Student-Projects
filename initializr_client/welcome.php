<?php
session_start();
   include("config.php");
?>

<!DOCTYPE html>

<html>
<body>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />

    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    
</head>

<body>
    
    <div class="container-fluid">
        <div class="row">

     
                <div class="container-fluid shadow">
            
                        
                                    <div class="row">
                                        <div class="col-md-12"><div class="form-group brdbot">
			    <h5>Welcome <?php 

			    header("Content-Type:text/html; charset=utf-8");
$sessioshow = $_SESSION["sessionname"] ;


			    echo  $_SESSION["sessionname"] . ".    ".$_SESSION["sessionemail"]."<br>";

?></h5>
			    <div class="controls col-sm-9">
                    
                <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span></div>
                
		</div></div>
                                    </div>
                                <div class="row"><div class="col-md-4"></div><div class="col-md-4"><div class="form-group">
			    <label class="control-label" for="field2"><b>Lesson Observations Details</b><span class="req"> *</span></label>
			    <div class="controls">
                 <?php

$sessionid = $_SESSION["sessionid"];

$dsn = 'localhost';
$user = 'root';
$password = '';
$db_name = 'survey';
$db = new PDO("mysql:host=$dsn;dbname=$db_name", $user, $password);

$sql = $db->query("SELECT COUNT(*) FROM surveydata WHERE teacher = '$sessionid'");
$row = $sql->fetch();
$count = $row[0];

                echo "Total Observations - " .$count. ".<br><br>";

$con=mysqli_connect("localhost","root","","survey");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM surveydata WHERE teacher = '$sessionid'");

echo "<table border='1' >
<tr>
<th>Date(MM.DD.YYY)</th>
<th>Score .</th>
<th>Oserver .</th>

<th></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['score'] . "</td>";
echo "<td>" . $row['observer'] . "</td>";
$toreply = $row['slno'];

echo "<td><form name='frmDelete' action=download.php method='get'><input type='hidden' name='idz' value='$toreply'><input type='submit' value='Results'></form></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);


?>
    
                
		</div></div><div class="col-md-4"></div></div>


                    </div>
                </div>
            </form>
        </div>
    </div>
    



    <script src="http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js"></script>
    <script src="http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js" type="text/javascript"></script>

    <script src="http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js"></script>
    <script src="http://protostrap.com/Assets/parsely/parsley.extend.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/parsely/2.0/parsley.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/download.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/protostrap.js" type="text/javascript"></script>



</body>
</html>
