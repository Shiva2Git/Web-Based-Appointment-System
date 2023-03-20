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
		<li><a href="Company.php">Home</a></li>
		<li><a href="Request.php">Appointment Request</a></li>
		<li><a href="Status.php">Check Status</a></li>
		<li><a href="index.php">Signout</a></li>
		
		
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
				<span class="blk2_lp"><span class="dat" style="margin-top:22px;"><span>12-10-2019</span><br />
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
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">Check Appointment Status </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
	
	
	
	<table width="580" border="1" align="center" bgcolor="#FFFFFF">
    <tr>
      <td bgcolor="#FF6600"><div align="center"><strong>Request ID</strong></div></td>
	  <td bgcolor="#FF6600"><div align="center"><strong>Company ID</strong></div></td>
	  <td bgcolor="#FF6600"><div align="center"><strong>Name</strong></div></td>
	  <td bgcolor="#FF6600"><div align="center"><strong>Purpose</strong></div></td>
	  <td bgcolor="#FF6600"><div align="center"><strong>App_Date</strong></div></td>
	  <td bgcolor="#FF6600"><div align="center"><strong>Status</strong></div></td>
	  <td bgcolor="#FF6600"><div align="center"><strong>Comments</strong></div></td>
    </tr>
	<?php 
include("config.php");
session_start();
$sid=$_SESSION['id'];
$result =mysql_query("Select * from Request where CompanyID='$sid'");
$id = $_POST['menu1'];
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	<td><?php echo $row['RequestID']; ?></td>
	<td><?php echo $row['CompanyID']; ?></td>
	<td><?php echo $row['Name']; ?></td>
	<td><?php echo $row['A_For']; ?></td>
	<td><?php echo $row['A_Date']; ?></td>
      <td><?php echo $row['Status']; ?></td>
	  <td><?php echo $row['Comments'];?></td>
    </tr>
  
  <?php } ?>
</table>	</td>
    </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
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

