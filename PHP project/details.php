<?php
 include_once 'dbcon.php';
$department=$_POST['department'];
$deptno=$_POST['deptno'];
$name=$_POST['name'];
$language=$_POST['lang'];
$nme=$_POST['nme'];
$activity=$_POST['activity'];
$success="";
$error="";
 $insert="INSERT INTO studentdetails(department,deptno,studentname, language, Nme, Activity) VALUES ('$department','$deptno','$name','$language','$nme','$activity')";
 if(mysqli_query($conn, $insert)) {
        $success= "<center><h1>Records inserted successfully.</h1></center>";
    } else {
        $error="<center><h1>ERROR: Could not able to execute query</h1></center>";
    }
    mysqli_close($conn);
?>
<!doctype html>
<html>
<head>
	<title>StudentDetails</title>
	<link rel="stylesheet" type="text/css" href="projstyle.css">	
</head>
<body>
<div class="header">
		<div class="sidemenu">
			<h2>Menu</h2>
		<ul>
			<li><a href="project.html">Home</a></li>
			<li><a href="details.html">Registration</a></li>
   			<li><a href="modify.html">Modify</a></li>
    		<li><a href="delete.php">Delete</a></li>
    		<strong><li>Extension Activities Report</li></strong>
            <li><a href="report.php">Overall Report</a></li>
            <li><a href="departmentreport.php">Department-wise Report</a></li>
    		<ul>
    			<li><a href="Nss.php">NSS</a></li>
                <li><a href="Ncc.php">NCC</a></li>
                <li><a href="Rotaract.php">ROTARACT</a></li>
              	<li><a href="Yrc.php">YRC</a></li>
              	<strong><li>NME Report</li></strong>
	            <li><a href="AF.php">B.Com.(A&F)</a></li>
	            <li><a href="CS.php">B.Com.(CS)</a></li>
	            <li><a href="BM.php">B.Com.(BM)</a></li>
	            <li><a href="General.php">B.Com.(General)</a></li>
	            <li><a href="CA.php">B.Com.(CA)</a></li>
	            <li><a href="ISM.php">B.Com.(ISM)</a></li>
	            <li><a href="Business.php">Business Administration</a></li>
	            <li><a href="Computer.php">Computer Science</a></li>
	            <li><a href="Tamil.php">BasicTamil</a></li>
                <li><a href="Advancedtamil.php">AdvancedTamil</a></li>
    		</ul>
    		</li>
    	</ul>
    	</div> 
</div>
<span><?php echo $error;?></span>
<span><?php echo $success;?></span>
</body>
</html>

