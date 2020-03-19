<?php
	include_once 'dbcon.php';
	$error=''; //Variable to Store error message;
	if(isset($_POST['submit'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}
	}

if(isset($_POST['submit']))
{
	$username=$_POST['Username'];
	$password=$_POST['password'];
	if($username=="admin" && $password=="admin")
	{
		if($sql="select * from login where user='$username' AND pass='$password' limit 1")
		{
			$result=mysqli_query($conn,$sql);
			$rows=mysqli_num_rows($result);
			if($rows>0){
			header("location:project.html");
			}
		}
	}
	/* elseif ($username=="user" && $password=="user") {
	// 	# code...
	// 	if($sql="select * from login where user='$username' AND pass='$password' limit 1")
	// 	{
	// 		$result=mysqli_query($conn,$sql);
	// 		$rows=mysqli_num_rows($result);
	// 		if($rows>0){
	// 		header("location:project.php");
	// 		}
	// 	}
	 }*/
	else
	{
			$error = "Username or Password is Invalid";
	}	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="" width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<nav>
		<label class="logo">ProjectX</label>
	<ul>
		<li><a class="active" href="index.php">Home</a></li>
		<li><a  href="project-details.html">Project Details</a></li>
		<li><a href="AboutUS.html">About US</a></li>
		<li><a href="ContactUS.html">Contact US</a></li>
		<li><a href="login.php">Login</a></li>
	</ul>
	</nav>
<!--------------------------BODY-TOGGLE--------------------------------------------->
	<div id="fixed">

	</div>
	
</body>
</html>