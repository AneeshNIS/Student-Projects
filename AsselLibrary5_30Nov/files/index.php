<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">Click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Please upload the PDF  of the book</label>
        <?php
	}
	?>
</div>
<div id="footer">
<label>File Upload system for Library Management</a></label>
</div>
</body>
</html>