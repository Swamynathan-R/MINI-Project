<!DOCTYPE html>
<html>
<head>
  <title>Final REPORT</title>
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
  <form name="departmentreport" action="deptreport.php" method="post" >
  <label>Department Name:</label><select name="department" required="">
        <option selected hidden value="">--Select--</option>
          <option value="B.Com.(A&F)">B.Com.(A&F)</option>
          <option value="B.Com.(CS)">B.Com.(CS)</option>
          <option value="B.Com.(BM)">B.Com.(BM)</option>
          <option value="B.Com.(General)">B.Com.(General)</option>
          <option value="B.Com.(CA)">B.Com.(CA)</option>
          <option value="B.Com.(ISM)">B.Com.(ISM)</option> 
          <option value="Business Administration">Business Administration</option>
          <option value="B.Sc Computer Science">B.Sc Computer Science</option>
          <option value="BCA">BCA</option></select><br>
    <label> Extension Activities:</label><select name="activity">
          <option hidden value="">--Select--</option>
          <option value="NCC">N.C.C.</option>
          <option value="NSS">N.S.S.</option>
          <option value="ROTARACT">ROTARACT</option>
          <option value="YRC">Y.R.C</option>
          <option value="Fine Arts">Fine Arts</option></select><br>
          <center><button type="submit" name="Result">Result</button>
          <button type="submit" name="All">All</button>
          <button type="reset">Clear</button></center>
    </form>
  </div>
</div>
</body>
</html>

