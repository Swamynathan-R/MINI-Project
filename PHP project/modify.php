<?php
include_once 'dbcon.php';
$error="";
$fetch=$_POST['fetch']; /*------------------assign fetch button name to fetch variable-----------*/
	if($fetch==$_POST['fetch']) /*------------------checking the condition button clicked is fetch----------*/
	{
		$deptno=$_POST['deptno'];


		$fetch="select department,deptno,studentname,language,Nme,Activity from studentdetails where deptno='$deptno'";
		$result=mysqli_query($conn,$fetch);
        $rows=mysqli_num_rows($result);
        if($res=mysqli_fetch_assoc($result))
        {	
          $department=$res['department'];
        	$deptno=$res['deptno'];
        	$studentname= $res['studentname'];
        	$lang= $res['language'];
        	$Nme= $res['Nme'];
        	$Activity=$res['Activity'];
        }
        else
        {
          	$error="<center><h1>NO SUCH DATA</h1></center>";
        }  
	}
	else
	{
	 	echo "error";
	} 
?>
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
      <span><?php echo $error; ?></span>
       <div class="title">Student's Extra Curricular Activity Management</div>
      <div class="login-box">
        <img src="avatar.png" class="avatar">
          <!-------------------------------Modify details form----------------------------------------->
	 <div class="modifyform">
    <h1><strong>Students details</strong></h1>
   <form name="modify" method="post" action="save.php">
      <label>Department No:</label><input type="text" name="deptno"  class="studentinput" required="" value="<?php echo $deptno?>"><br>
      <label>Department:</label><input type="text" name="department" required="" value="<?php echo $department?>"><br>
      <label>Name:</label><input type="text" name="name" class="studentinput" required="" value="<?php echo $studentname?>"><br>
      <label>Language:</label><input type="text" name="lang" class="studentinput" required="" value="<?php echo $lang?>"><br>
      <label>Non Major Elective(NME):</label></label><input type="text" name="nme" class="studentinput" required="" value="<?php echo $Nme?>"><br>
      <label> Extension Activities:</label><input type="text" name="activity" class="studentinput" required="" value="<?php echo $Activity?>"><br>
     <button type="submit" name="save">Update</button>
     <button type="reset" name="cancel" onclick="javascript:history.go(-1)">Cancel</button>
   </form>
   </div>
</body>
</html>

