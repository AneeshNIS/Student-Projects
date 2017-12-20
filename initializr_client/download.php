

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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

            <form action="../submit" id="formentry" class="form-horizontal" role="form" data-parsley-validate novalidate>
                <div class="container-fluid shadow">
                    <div class="row">
                        <div id="valErr" class="row viewerror clearfix hidden">
                            <div class="alert alert-danger">Oops! Seems there are some errors..</div>
                        </div>
                        <div id="valOk" class="row viewerror clearfix hidden">
                            <div class="alert alert-success">Yay! ..</div>
                        </div>

                        
                                    <div class="row">
                                        <div class="col-md-12"><div class="row"><div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field1"></label>
			    <div class="controls col-sm-9">


</div></div>





		<div class="col-md-6"><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field2"></label>
			    <div class="controls col-sm-9">
                    
 <?php
             
             $idz = $_GET['idz'];
             $con=mysqli_connect("localhost","root","","survey");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
               $result = mysqli_query($con,"SELECT * FROM surveydata WHERE slno = '$idz'");

echo "Date(MM.DD.YYY)";
echo  "\n ";

while($row = mysqli_fetch_array($result))
{
echo $row['date']."<br>"."<br>";
}

echo "Lesson Objective"."<br>";
echo  "\n ";

$result = mysqli_query($con,"SELECT * FROM surveydata WHERE slno = '$idz'");
while($row = mysqli_fetch_array($result))
{
echo $row['lessonobjective']."<br>"."<br>" ;
}

echo "Time Management"."<br>";
echo  "\n ";

$result = mysqli_query($con,"SELECT * FROM surveydata WHERE slno = '$idz'");
while($row = mysqli_fetch_array($result))
{
echo $row['timemanagement']."<br>"."<br>" ;
}
echo "Observer"."<br>";
echo  "\n ";

$result = mysqli_query($con,"SELECT * FROM surveydata WHERE slno = '$idz'");
while($row = mysqli_fetch_array($result))
{
echo $row['observer']."<br>"."<br>" ;
}


echo "Score"."<br>";
echo  "\n ";

$result = mysqli_query($con,"SELECT * FROM surveydata WHERE slno = '$idz'");
while($row = mysqli_fetch_array($result))
{
echo $row['score']."<br>"."<br>" ;
}


echo '<span style="color:#f44242">Observer Comment</span>'."<br>";
echo  "\n ";

$result = mysqli_query($con,"SELECT * FROM surveydata WHERE slno = '$idz'");
while($row = mysqli_fetch_array($result))
{
echo $row['comment']."<br>"."<br>" ;


}



?>
                
		</div></div></div></div>
                                    </div>
                                


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
