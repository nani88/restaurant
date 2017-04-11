<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<style>
.my_links a{
		text-decoration: none;
		color:#660000;
}
.selected{
	border-bottom: 1px solid red;
}
.over{
	position: relative;
	width: 100%;
}
h2{
	position: absolute;
	top:40%;
	left:15%;
	color:white;
	margin: 0px;
	padding: 0px;
}
</style>
</head>

<body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
mysql_connect("localhost","root","");
mysql_select_db("restaurant");
$result=mysql_query("select * from users where username='$username' and password='$password'")
or die("Failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
echo "<div class='row' style='padding: 0; margin: 0'>
	<div class='col l6 m6 s12' style='padding: 0; margin: 0'>
	<div  class='over'>
		<img style='display: block' class='responsive-img hide-on-small-only' src='img/burger.jpg' width='100%' />
		<h2 class='hide-on-small-only'><b>TODAY'S SPECIAL</b></h2>
	</div>
	</div>
<div class='col l6 m6 s12' style='padding: 0; margin: 0'>
	<br/>
	<div class='right-align'><span style='padding-right:30px; display: inline-block'><b>Hello," . $row['firstname'] . "!</b></span><i class='small material-icons' style='padding-right:20px';>shopping_cart</i><br/>
	</div>
	<center>
		<img src='img/logo.jpg' width='30%' />
		<br/>
		<img style='display: block' class='responsive-img hide-on-med-and-up' src='img/new_bur.jpg' width='100%'' /><br/>
		<b style='font-size: 18px; color: #660000'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b>
		<br/><br/><br/><br/>
		<div class='my_links' >
		<a class='selected' href='#'><b>MENU</b></a><br/><br/><br/>
		<a href='#'><b>ABOUT US</b></a><br/><br/><br/>
		<a href='#'><b>REACH US</b></a><br/><br/><br/>
		<a href='#''><b>LOCATIONS</b></a><br/><br/><br/>
		</div>
	</center>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js'></script>";
}
else
{
	echo "<h1 style='text-align:center;'>Entered credentials are wrong</h1>";
}
?>
</body>
</html>