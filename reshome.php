
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>UKY ResLife Check-In Portal</title>
	<style type="text/css" media="screen">
		.nextbutton a:link, .nextbutton a:visited
		{
			display: block;
			padding: .2em .5em;
			background-color: #03F;
			color: #fff;
			border: 1px solid #006;
			width: 11em;
			text-decoration: none;
			text-align: center;
		}
		
		.nextbutton a:hover, .nextbutton a:active
		{
			background-color: #fff;
			color: #006;
		}
		
		body
		{
			margin: 0;
			padding: 0;
			font-size: 95%;
			font-family: georgia, times, "times new roman", serif;
			color: #000;
			background-color: #fff;
		}
		
		a:link { color: #00305e; }
		a:visited { color: #00305e; }
		
		a:hover, a:active
		{
			color: #fff;
			background-color: #036;
		}
		
		div#banner
		{
			color: #fff;
			background-color: #005daa;
			border-bottom: 1px solid #000;
		}
		
		div#banner h1
		{
			margin: 0;
			padding: .3em 0 .3em .5em;
			font-size: 2.2em;
			font-weight: normal;
		}
		
		div#container
		{
			background-image: url(images/nav_col_base4.jpg);
			background-repeat: repeat-y;
		}
		
		div#container2
		{
			background-image: url(images/nav_col_base3.jpg);
			background-repeat: repeat-y;
			background-position: right;
		}
		
		div#navigation
		{
			float: left;
			width: 200px;
			padding-top: 2em;
		}
		
		div#navigation h3
		{
			margin-top: 0;
			width: 125px;
			color: #fff;
			padding: .5em;
			background-image: url(images/more_base.jpg);
			background-position: right;
			background-repeat: repeat-y;
		}
		
		div#navigation ul
		{
			list-style-type: none;
			padding: 0;
			margin: 0;
		}
		
		div#navigation ul li { margin-top: 4px; }
		
		#navigation ul li a
		{
			display: block;
			width: 135px;
			padding: 3px 5px 3px 10px;
			text-decoration: none;
			color: #000;
			background-image: url(images/nav_base2.jpg);
			background-repeat: repeat-y;
		}
		
		#navigation ul li a:hover
		{
			color: #fff;
			background-color: #6b89b4;
			background-image: url(images/nav_base3.jpg);
			background-repeat: repeat-y;
		}
		
		div#more
		{
			float: right;
			width: 190px;
			margin: 0;
			padding: 2em 10px 0 0;
			color: #fff;
		}
		
		div#more h3
		{
			margin-top: 0;
			color: #fff;
			padding: .5em;
			background-image: url(images/more_base.jpg);
			background-position: right;
			background-repeat: repeat-y;
		}
		
		div#more ul
		{
			list-style-type: none;
			padding: 0;
			margin: 0;
		}
		
		div#more ul li { margin-top: 4px; }
		
		#more ul li a
		{
			display: block;
			width: 135px;
			padding: .3em;
			text-decoration: none;
			color: #000;
			background-image: url(images/more_base2.jpg);
			background-repeat: repeat-y;
		}
		
		#more ul li a:hover
		{
			color: #fff;
			background-color: #00305e;
			background-image: url(images/more_base3.jpg);
			background-repeat: repeat-y;
		}
		
		div#content
		{
			margin-left: 210px;
			margin-right: 500px;
		}
		
		div#content h2
		{
			font-size: 2em;
			color: #00305e;
			margin: 0;
			padding-top: 1em;
			font-weight: normal;
		}
		
		div#content { line-height: 150%; }
		
		div#content2
		{
			margin-left: 660px;
			margin-right: 205px;
		}
		
		div#content2 h2
		{
			font-size: 2em;
			color: #00305e;
			margin: 0;
			padding-top: 1em;
			font-weight: normal;
		}
		
		div#content2 { line-height: 150%; }
		
		#cleardiv
		{
			clear: both;
			height: 1em;
		}
		
		div#footer
		{
			clear: both;
			padding: .5em 1em;
			border-top: 1px solid #999;
			text-align: right;
		}
		
		div#footer ul
		{
			padding: 0;
			margin: 0;
			list-style-type: none;
		}
		
		div#footer li
		{
			display: inline;
			margin-right: 1em;
		}
</style>
</head>
<body>
<div id="banner">
	<h1>University of Kentucky ResLife Check-In Portal</h1>
</div>
<div id="container">
<div id="container2">
	<div id="navigation">
		<h3>Actions</h3>
		<ul>
			<li><a href="checkIn.php">Check-In</a></li>
			<li><a href="checkOut.php">Check-Out</a></li>
		</ul>
	</div>
	<div id="more">
		<h3>Log Files</h3>
		<p>
			<ul>
				<li><a href="currently.php">Guests Checked-In</a></li>
				<li><a href="guestLog.php">Review Master Logs</a></li>
			</ul>
		</p>
	</div>
	<div id="content">
		<h2>Announcements</h2>
		<p>
			Welcome to the University of Kentucky ResLife Check-In Portal!
		</p>
		<p>
			Actions to the left will assist with check-in and check-out.
		</p>
		<p>
			Links to the right will contain log files.
		</p>
	</div>
	<div id="content2">
		<h2>No Fly List</h2>
		<p>
			Students that are not allowed to check-in to University of Kentucky Residence 
			Halls will be listed here.
		</p>
	</div>
	<div id="cleardiv"></div>
</div>
</div>
<div id="footer">
	<ul>
		<li><a href="#">Session Log Out</a></li>
		<li><a href="https://sites.google.com/site/cs499reslife/home">Copyright &copy; CodeCats</a></li>
	</ul>
</div>
</body>
</html>
<?php
/*
$host="mysql.cs.uky.edu"; // Host name 
$username="meth225"; // Mysql username 
$password="u0780919"; // Mysql password 
$db_name="meth225"; // Database name 
$tbl_name="Halls"; // Table name 
$tbl_name2 ="Items";
$tbl_name3 ="Ordered";

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$myhall=$_POST['hall'];

$sql="SELECT * FROM $tbl_name WHERE name='$myhall'";
$result=mysql_query($sql);
echo("$myhall");

*/
?>