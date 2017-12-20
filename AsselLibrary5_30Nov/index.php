<html>
<head>
<title>Library management system</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

</head>
<body>

<div id="wrapper">
	<div id="head">

	<div id="logo">
		<img src="images/46.png">
	</div>
	<div id="signin">
<p><a href="Loginnew.php">Log in</a>    or      <a href="Registernew.html">Sign up</a></p> 
	</div>
	<div id="text">
		<p align="center"><font size="5" color=" #FD1F58" face="Arial">You want weapons?</font></p>
		<p align="center"><font size="5" color="#FD1F58" face="Arial">We're in a library!</font></p>
		<p align="center"><font size="5" color="#FD1F58" face="Arial">Books!</font></p>
		<p align="center"><font size="5" color="#FD1F58" face="Arial">The best weapons in the world!</font></p>
	</div>
	</div>

	<div id="nav">
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="news.html">NEWS</a></li>
				<li><a href="about us.html">ABOUT US</a></li>
				<li><a href="best books.html">BEST BOOKS</a></li>
				<li><a href="#Contacts">CONTACTS</a></li>
			</ul>
	</div>

<div id="center">

	<div id="content">
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Books..." />
        <div class="result"></div>
    </div>

	<h1 style="font-family: verdana; color: #FD1F58; text-align: right">Welcome to the library!</h1>
	
	
	<h3 style="font-family: Times New Roman; font-style: italic; text-align: center">Best books of the month:</h3>
	
	<div id = "desc1">
		<div id="photo1">
		
		</div>
		
		<div id="text1">
		<h5 style="font-family: cursive; color:purple; font-style: bold; text-align: center">Short description of the book:</h5>
		<p style="color:black">It is a truth universally acknowledged, that a single man in possession of a good fortune must be in want of a wife.” So begins Pride and Prejudice, Jane Austen’s witty comedy of manners—one of the most popular novels of all time—that features splendidly civilized sparring between the proud Mr. Darcy and the prejudiced Elizabeth Bennet as they play out their spirited courtship in a series of eighteenth-century drawing-room intrigues.
		</p>
		</div>
	</div>
	
	<div id = "desc2">
		<div id="text2">
		<h5 style="font-family: cursive; color:purple; font-style: bold; text-align: center">Short description of the book:</h5>
		<p style="color: black; float: left">It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children.</p>
<p style="color: black;float: left">While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.</p>
		</div>
		
		<div id="photo2">
		<img src="images/harry.jpg" alt="Book3" style="width:153px;height:148px;">
		</div>
	</div>
	
	
	<div id = "desc3">
		<div id="text3">
		<h5 style="font-family: cursive; color:purple; font-style: bold; text-align: center">Short description of the book:</h5>
		<p style="color: black;float: right">"Me Before You" is a most unconventional love story. Lou and her charge, the handsome, privileged Will Traynor, are at first like oil and water. Will is cold and aloof with everyone, but he seems generally displeased to have Lou around. Lou comes to realize that’s because she isn’t just a caregiver—she’s a babysitter. Will was an adventure junkie with career success, complete independence and a slew of gorgeous women by his side. His injury has left him physically and emotionally devastated.Both Lou and Will have surprises in store for each other, and Moyes lets their relationship develop in wonderful and unexpected ways. </p>
		</div>
		
		<div id="photo3">
		<img src="images/23.jpg" alt="Book3" style="width:153px;height:148px;">
		</div>
	</div>
	
	
	
</div>

<div id="sidebar">
	<div id="list">
<h3><font color="purple"; style="bold";"font-family: Times New Roman; font-style: italic; text-align: center">List of recommended books:</h3>
<br style="color:#FD1F58; font-style:bold"> 1.To kill a Mockingbird<br/>
<br> 2.The fault in the stars<br/>
<br> 3.Catching fire<br/>
<br> 4.Hobbit<br/>
<br> 5.The perks of being a wallflower<br/>
<br> 6.Harry Potter<br/>
<br> 7.Divergent<br/>
<br> 8.Dandelion Wine<br/>
<br> 9.The girl on the train<br/>
<br> 10.Hunger games<br/></font>
    </div>

	<br><br> 
	<div id="suggestions">
<center><p><a href="Suggestnew.html">Send Suggestions</a></p></center>
</div>

</div>


</div>
<div id="footer">
<h3 style="font-family: verdana; color: #FD1F58; text-align: right">Copyright © Babazhan Assel</h3>
</div>

</div>

</body>
</html>