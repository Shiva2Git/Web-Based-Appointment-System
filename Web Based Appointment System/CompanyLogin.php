<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Appointment System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>
	<div id="main_block">
		<!--Top Block Starts -->
		<div id="top_block">
		<div class="menubg">
		<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="MDLogin.php">Managing Director</a></li>
		<li><a href="CompanyLogin.php">Company</a></li>
		<li><a href="Registration.php">Registration</a></li>
		
		
		</ul>
		</div>
			<div class="tp_img1">
				<div class="tp_img2">
					<a href="#"><img src="images/logo.gif" alt="" width="211" height="131" class="logo" /></a>
					<img src="images/tp_tx.gif" alt="" width="450" height="49" class="tp_tx" />
				</div>
			</div>
		</div>
		<!--Top Block Ends -->
	</div>
	
	<div id="sub_block1">
		<!--Content Block Starts -->
		<div id="content_block">
			<!--Left Block Starts -->
			<div id="left_block">
				<span class="blk1_lp"><span class="nws" style="color:#000000">News Updates</span>				</span>
				<span class="blk2_lp"><span class="dat" style="margin-top:22px;"><span>12-01--20</span><br />
				Let us turn your stressful environment into a tranquil setting with plants.</span>
					<span class="dat"><span>04-11-2019</span><br />
					Trees and blooming plants will create and and more.Trees and blooming plants will create and and more.</span>
					<span class="dat"><span>11-01-2022</span><br />
					impressive entrance for your clients and a relaxing area for your employees. </span> 
				<span class="dat"><span>04-02-2022</span><br />
				Let us turn that empty into a company oasis! trees and blooming plants will create.</span></span>
		  </div>
			<!--Left Block Ends -->
			
			<!--Right Block Starts -->
			<div id="right_block">
			<center>
			<form id="form1" name="form1" method="post" action="">
			  <table width="50%" style="font-family:Times New Roman; font-size:18px; color:#330099;font-weight:bold;">
  <tr>
    <td style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">Company Login </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ID</td>
  </tr>
  <tr>
    <td><input name="name" type="text"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Password</td>
  </tr>
  <tr>
    <td><input name="password" type="password"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" value="Submit" style="width:120px; background-color:#FF0033; color:#FFFFFF"/></td>
  </tr>
</table>
</form>
</center>
			</div>
			<!--Right Block Ends -->
		<!--Content Block Ends -->
		</div>
	</div>
	
	<div id="sub_block2">
		<div id="footer_block">
			
			
			<span class="cpy">Copyright &copy;Appointment 2022, All rights reserved. Web Based Appointment </span>
		</div>
	</div>
</center>
</body>
</html>

<?php
include("config.php");
session_start();
unset($_SESSION['id']);
if(isset($_POST['Submit']))
{
if($_POST['name']!="" && $_POST['password']!="")
{
	
		$name=$_POST['name'];
		$pass=$_POST['password'];
		
		$sql = "select * from Register where CID ='$name' and Password='$pass'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$count = mysql_num_rows($result);
		
		if ($count == 1)
		{
		 echo " Login Successful....";
		 $_SESSION['id'] = $name;
		 //$_SESSION['dept'] = $row["Department"];
		 //$_SESSION['sem'] = $row["Semester"];
		 header("location:Company.php");
		 }
		 else
		 {
		 //header ("location:Login.php");
		 echo "<script text='text/javascript'>alert('Invalid Authentication');</script>";
		 }
	
	
}
else
echo "<script text='text/javascript'>alert('Fill ID and Password');</script>";
}
?>
