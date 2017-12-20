<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin System</title>
  
  
  
<link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <section id="loginBox">
	<h2>Please add the details of the new book</h2>
	<form method="post" class="minimal" action="addbookprocess.php" enctype="multipart/form-data">
		<label for="username">
			Book Name:
			<input type="text" name="BookName" id="BookName" placeholder="Please enter Book Name"  required="required" />
		</label>

		<label for="username">
			Book Author:
			<input type="text" name="Author" id="Author" placeholder="Please enter Author"  required="required" />
		</label>

		<label for="username">
			Unique ISBN Number:
			<input type="text" name="ISBN" id="ISBN" placeholder="Please enter ISBN Number"  required="required" />
		</label>

		<label for="username">
			Issue Number:
			<input type="text" name="Issue" id="Issue" placeholder="Please enter Issue Number"  required="required" />
		</label>

		<label for="username">
			Page Numbers:
			<input type="text" name="Numbers" id="Numbers" placeholder="Please enter Page Numbers:"  required="required" />
		</label>

		<label for="username">
			Genre:
			<input type="text" name="Genre" id="Genre" placeholder="Please enter Genre"  required="required" />
		</label>
			Publisher:
			<input type="text" name="Publisher" id="Publisher" placeholder="Please enter Publisher:"  required="required" />
		</label>
			Year:
			<input type="text" name="Year" id="Year" placeholder="Please enter Year:"  required="required" />
		</label>
		</label>
			Upload File 
		<input type="file" name="fileToUpload" id="fileToUpload">
		</label>

		<button type="submit" class="btn-minimal">Submit</button>
	</form>
</section>
<center><p>Library Management System</p></center>



  
  
</body>
</html>
