<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Appointment System</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine('attach');
		});
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
				<span class="blk2_lp"><span class="dat" style="margin-top:22px;"><span>12-01-2022</span><br />
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
			<form id="formID" name="register" method="post" action="" >
			  <table width="60%" style="font-family:Times New Roman; font-size:18px; color:#330099;font-weight:bold;">
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">New Employee Details </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
				<td>Employee ID </td>
				<?php
					include("config.php");
					$result =mysql_query("Select MAX(EmployeeID) as id from Employee");
						  while ($row = mysql_fetch_array($result))
							 {
								$roll = $row["id"] + 1;
							 }
					?>
				<td><input type="text" name="eid" style="border-color:#999999" value="<?php echo  $roll ; ?>"/></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>Name</td>
				<td><input type="text" name="name" style="border-color:#999999" class="validate[required] text-input"/></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
                <td>Gender</td>
			    <td><input name="gender" type="radio" value="Male" style=" width:20px; height:0px;"/>
			      Male
			      <input name="gender" type="radio" value="Female" style=" width:20px; height:0px;" />
			      Female </td>
	      </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			   <tr>
                 <td>Mail ID  </td>
			     <td><input type="text" name="mid"  style="border-color:#999999" class="validate[required,custom[email]] text-input"/></td>
			   </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
                <td>Mobile No </td>
			    <td><input type="text" name="mno"  style="border-color:#999999" class="validate[required,custom[phone]] text-input" /></td>
			  </tr>
			  <tr>
                <td>&nbsp;</td>
			    <td>&nbsp;</td>
	      </tr>
			  <tr>
                <td>Address </td>
			    <td><textarea rows="4" cols="30" name="addr" style="border-color:#999999" class="validate[required] text-input"></textarea></td>
	      </tr>
			  <tr>
                <td>&nbsp;</td>
			    <td>&nbsp;</td>
	      </tr>
			  <tr>
				<td>Designation</td>
				<td><input type="text" name="desig"  style="border-color:#999999" class="validate[required] text-input"/></td>
			  </tr>
			  <tr>
                <td>&nbsp;</td>
			    <td>&nbsp;</td>
	      </tr>
			  <tr>
                <td>Salary</td>
			    <td><input type="text" name="salary"  style="border-color:#999999" class="validate[required] text-input"/></td>
	      </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			  </tr>
			  <tr>
                <td colspan="2" align="center">
		  <input type="submit" name="Submit" value="Submit" style="width:120px; height:30px; background-color:#330066; color:#FFFFFF"/>
                  &nbsp;&nbsp;
          <input type="reset" name="Submit2" value="Reset" style="width:120px;  height:30px; background-color:#330066; color:#FFFFFF"/>		  </td>
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
	$id=$_POST["eid"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$mid=$_POST["mid"];
	$mno=$_POST["mno"];
	$addr=$_POST["addr"];
	$desig=$_POST["desig"];
	$salary=$_POST["salary"];
	
	$result=mysql_query("insert INTO Employee VALUES('$id','$name','$gender','$mid','$mno','$addr','$desig','$salary') ");
	echo "<script text='text/javascript'>alert('Employee Added Successfully');</script>";
	
	//header("location:Employee.php");
}
?>