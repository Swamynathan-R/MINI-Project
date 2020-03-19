<?php
include_once 'dbcon.php';
$save=$_POST['save'];
$error="";
$success="";
if($save==$_POST['save'])
{
          $department=$_POST['department'];
          $deptno=$_POST['deptno'];
          $studentname= $_POST['name'];
          $lang= $_POST['lang'];
          $Nme= $_POST['nme'];
          $Activity=$_POST['activity'];

         $query="update studentdetails set department='$department',studentname='$studentname',language='$lang',Nme='$Nme',Activity='$Activity' where deptno='$deptno'";
         $result=mysqli_query($conn,$query);
         if($result){
         	$success="<center><h1>successfully updated</h1></center>";
         }
         else
         {
         	$error="not updated";
         }
}
else
{
   echo "error";
}
?>
<!-----------------------html--------------------------->
<!DOCTYPE html>
<html>
<head>
   <title>Modify Details</title>
   <link rel="stylesheet" type="text/css" href="projstyle.css">
</head>
<body>
  <!-------------------------------Navigations and heading-------------------------------------->
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
      <div class="input-field">
      <div class="title">Student's Extra Curricular Activity Management</div>
          <!-------------------------------Modify details form----------------------------------------->
    <div class="modifyform">
      <span><?php echo $success; ?></span>
      <span><?php echo $error; ?></span>
   </div>
</body>
</html>

