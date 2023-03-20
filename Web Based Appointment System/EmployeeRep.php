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
		<li><a href="MD.php">Home</a></li>
		<li><a href="Employee.php">Employee</a></li>
		<li><a href="ViewRequest.php">View Request</a></li>
		<li><a href="Response.php">Response</a></li>
		<li><a href="Schedule.php">Today Schedule</a></li>
		<li><a href="EmployeeRep.php">Employee Report</a></li>
		<li><a href="ViewCompany.php">View Company</a></li>
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
			
			<!--Left Block Ends -->
			
			<!--Right Block Starts -->
			<div id="right_block" style="float:left;width:100%">
			<center>
			<form id="form1" name="form1" method="post" action="">
			  <table width="100%" style="font-family:Times New Roman; font-size:18px; color:#330099;font-weight:bold;">
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; "><div align="center">Employee Report </div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><table width="90%" border="1" align="center" style="background-color:#FFFFFF;">
    <tr>
		<td style="background-color:#00FFFF;color:#000033">EmployeeID</td>
		<td style="background-color:#00FFFF;color:#000033">Name</td>
		<td style="background-color:#00FFFF;color:#000033">Gender</td>
		<td style="background-color:#00FFFF;color:#000033">MailID</td>
		<td style="background-color:#00FFFF;color:#000033">MobileNo</td>
		<td style="background-color:#00FFFF;color:#000033">Address</td>
		<td style="background-color:#00FFFF;color:#000033">Designation</td>
		<td style="background-color:#00FFFF;color:#000033">Salary</td>
    </tr>
	<?php 
include("config.php");
//if(isset($_POST['Submit']))
//{
//	$name=$_POST['name'];
	
	
	$result =mysql_query("Select * from Employee");
	
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['EmployeeID']; ?></td>
	  <td><?php echo $row['Name']; ?></td>
	  <td><?php echo $row['Gender'];?></td>
	  <td><?php echo $row['MailID'];?></td>
      <td><?php echo $row['MobileNo']; ?></td>
	  <td><?php echo $row['Address']; ?></td>
	  <td><?php echo $row['Designation']; ?></td>
	  <td><?php echo $row['Salary']; ?></td>
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

