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
			  <table width="70%" style="font-family:Times New Roman; font-size:18px; color:#330099;font-weight:bold;">
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family:Times New Roman; font-size:24px; color:#990099;font-weight:bold; ">Send Appointment Request </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
 <tr>
    <td>Request ID </td>
	<?php
		include("config.php");
		$result =mysql_query("Select MAX(RequestID) as rno from Request");
		  while ($row = mysql_fetch_array($result))
             {
			 	$roll = $row["rno"] +1;
			 }
		
	?>
    <td><input type="text" name="id" value="<?php echo  $roll ; ?>" /></td>
  </tr>
 <tr>
   <td>Company ID </td>
   <?php
		
		session_start();
		$id=$_SESSION['id'];
		$sql = "select * from Register where CID=$id";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
	?>
   <td><input type="text" name="cid" value="<?php echo $_SESSION['id']; ?>" /></td>
 </tr>
  <tr>
    <td> Name </td>
    <td>
      
        <input type="text" name="name" value="<?php echo $row["Name"];?>"/>    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea rows="4" cols="30" name="addr" ><?php echo $row["Address"];?></textarea></td>
  </tr>
  <tr>
    <td>Proprietor</td>
    <td><input type="text" name="ppr" value="<?php echo $row["Proprietor"];?>"/></td>
  </tr>
  <tr>
    <td>Production</td>
    <td><input type="text" name="prod" value="<?php echo $row["Production"];?>"/></td>
  </tr>
  <tr>
    <td>Mobile No </td>
    <td><input type="text" name="mno" value="<?php echo $row["MobileNo"];?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Appointment for  </td>
    <td><textarea rows="4" cols="30" name="af" ></textarea></td>
  </tr>
  <tr>
    <td>Appointment Date</td>
    <td><input type="text" name="ad" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" style="width:120px; background-color:#FF0033; color:#FFFFFF"/>
      &nbsp;&nbsp;
      <input type="reset" name="Submit2" value="Reset" style="width:120px; background-color:#FF0033; color:#FFFFFF"/></td>
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
	$id=$_POST['id'];
	$cid=$_POST['cid'];
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	
	$dept=$_POST['ppr'];
	$sem=$_POST['prod'];
	$mno=$_POST['mno'];
	$pps=$_POST['af'];
	$ld=$_POST['ad'];

	$result=mysql_query("insert into Request value ('$id','$cid','$name','$addr','$dept','$sem','$mno','$pps','$ld','Pending',' ')");
	echo "<script text='text/javascript'>alert('Appointment Request send Successfully');</script>";
	
}
?>