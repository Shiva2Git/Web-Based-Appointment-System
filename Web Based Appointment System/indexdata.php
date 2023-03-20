<?php
include("config.php");
session_start();
unset($_SESSION['uname']);
if(isset($_POST['Submit']))
{
if($_POST['id']!="" && $_POST['pwd']!="")
{
	if($_POST['id']=="Admin" && $_POST['pwd']=="Admin")
	{
		 header("location:MD.php");
	}
	else
	{
	echo "<script text='text/javascript'>alert('Invalid Authentication');</script>";
	}
	
}
else
echo "<script text='text/javascript'>alert('Fill Class Advisor ID and Password');</script>";
}
?>
