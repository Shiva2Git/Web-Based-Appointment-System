<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Appointment System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

</script>

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
			  <table width="60%" style="font-family:Times New Roman; font-size:18px; color:#330099;font-weight:bold;">
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">Managing Director  Home </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
 <tr>
    <td>Request ID </td>
	
    <td>
	
	<select name="select" id="select" onchange="MM_jumpMenu('parent',this,0)">
                  <option>--select--</option>
                  <?php
						include("config.php");
						
						$q5=mysql_query("select RequestID from Request where Status='Pending' ");
						while($r=mysql_fetch_assoc($q5))
						{
							echo "<option value=Response.php?bid=".$r["RequestID"].">".$r["RequestID"]."</option>";
						}
						$id=$_REQUEST['bid'];
											
						?>
                </select>	</td>
  </tr>
   <?php $result = mysql_query("SELECT * FROM  Request where RequestID='$id' ");
			$row1= mysql_fetch_array($result);
		  ?>
  <tr>
    <td>Request ID</td>
    <td><input type="text" name="rid" value="<?php echo $row1["RequestID"]; ?>" /></td>
  </tr>
  
  <tr>
    <td>Student ID</td>
    <td><input type="text" name="sid" value="<?php echo $row1["CompanyID"]; ?>" /></td>
  </tr>
  <tr>
    <td>Name </td>
    <td><input type="text" name="name" value="<?php echo $row1["Name"]; ?>" />		</td>
  </tr>
 
  <tr>
    <td>Purpose </td>
    <td><input type="text" name="bid" value="<?php echo $row1["A_For"]; ?>" /></td>
  </tr>
  <tr>
  
    <td>Date</td>
    <td><input type="text" name="title" value="<?php echo $row1["A_Date"]; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Status</td>
    <td><select name="sts" id="sts">
      <option value="Approve"> Approve </option>
      <option value="Reject"> Reject </option>
    </select></td>
  </tr>
  <tr>
    <td>Comments</td>
    <td><textarea rows="4" cols="30" name="cmts" style="border-color:#999999"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" style="width:120px; background-color:#003399; color:#FFFFFF"/></td>
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

<?php
include("config.php");
if(isset($_POST['Submit']))
{
		$rid=$_POST['rid'];
		$sts=$_POST['sts'];
		$cmts=$_POST['cmts'];
		
		$result=mysql_query("Update Request set Status='$sts',Comments='$cmts' where RequestID='$rid'");
		echo "<script text='text/javascript'>alert('Status Updated');</script>";
}
?>
