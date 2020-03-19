<?php

include_once 'dbcon.php';

$error="";
$success="";
// function delete_php()
// {
	if(isset($_POST['delete']))
	{	

		$deptno=$_POST['deptno'];
		$select="select department,deptno,studentname,language,Nme,Activity from studentdetails where deptno='$deptno'";
		$res=mysqli_query($conn,$select);
		$rows=mysqli_num_rows($res);
		if(empty($rows))
		{	
		    $error='No such student Registration number';
			// echo '<script>alert("No such student Registration number")</script>';
		}
		else
		{
			$delete="delete FROM studentdetails where deptno='$deptno'";		/*Delete query*/
			$result=mysqli_query($conn,$delete);
      $success='Successfully Deleted';
			// echo '<script>alert("Successfully Deleted")</script>';
		}	
	}
// }












?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Details</title>
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
    <div class="maincontent">
      <div class="title">Student's Extra Curricular Activity Management</div>
      <div class="login-box">
          <!-------------------------------delete details form----------------------------------------->
   <div class="deleteform">
   <form name="delete" id="delete" method="post" action="#">
  <label> Enter Department No:</label><input type="text" name="deptno" id="studentinput" required="fill" placeholder="Dept No"><br>
  <button type="submit"  name="delete" id ="delete" onclick="myfunction()">Delete</button>
  <script type="text/javascript">
  	function myfunction()
  	{
  		var text=document.getElementById('studentinput').value;
  		var press=confirm("Are you sure want to remove this student id:     "+text);
  		if(press==true){
  			document.getElementById("delete").action="delete.php";
  		}
  		else{
  			// document.getElementById("delete").action="delete.php";		
  		}
  	}
  </script>
  <button type="reset" name="cancel" id="reset">Cancel</button>
  </form>
</div>
</div><br><br>
  <?php echo "<center><span>$error<span><center>"; ?>
  <?php echo "<center><span>$success<span><center>"; ?>
</body>
</html>

