<?php
session_start();
header("Content-Type:text/html; charset=utf-8");
   include("config.php");

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 


      $mypassword = mysqli_real_escape_string($db,$_POST['parol']); 
      
      $sql = "SELECT name_5321526098,id_9597535531,email_8949350 FROM teacherdetails WHERE password_6924624611 = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         
         $selectedid =$row["id_9597535531"];
         $selectedname =$row["name_5321526098"];
         $selectedemail =$row["email_8949350"];



$_SESSION["sessionid"] = $selectedid;
$_SESSION["sessionname"] = $selectedname;
$_SESSION["sessionemail"] = $selectedemail;

    header("location: welcome.php");






      }else {
         

         $message = "Your Passcode is Invalid";
echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }
?>

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

            <form method="post" id="formentry" class="form-horizontal" role="form" data-parsley-validate novalidate>
                <div class="container-fluid shadow">
            
                        
                                    <div class="row">
                                        <div class="col-md-12"><div class="form-group brdbot">
			    <h5>For Teachers</h5>
			    <div class="controls col-sm-9">
                    
                <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span></div>
                
		</div></div>
                                    </div>
                                <div class="row"><div class="col-md-4"></div><div class="col-md-4"><div class="form-group">
			    <label class="control-label" for="field2">Password<span class="req"> *</span></label>
			    <div class="controls">
                    
                <input id="parol" name="parol" type="text" class="form-control k-textbox" data-role="text" placeholder="Enter your secret passcode" required="required" data-parsley-errors-container="#errId2"><span id="errId2" class="error"></span></div>

                <div class="form-group">
                
                
                
        <button type="submit" id="button16" type="button" class="btn btn-danger">Login</button></div></div>
                                    </div>
                
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
