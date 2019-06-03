<?php
session_start();
if(isset($_POST['submit']))
{
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$con = mysqli_connect('localhost','root','tiger');
	$db = mysqli_select_db($con,'careersetupdb');
	$query = mysqli_query($con,"select * from csreg where username='$uname' and password='$pwd'");
	$rows = mysqli_num_rows($query);
	if($rows == 1)
	{
		
		header("Location:main.html");
	}
	else
		
	echo '<script language="javascript">';
	echo 'alert("You have entered Invalid UserName and Password")';
	echo '</script>';
	echo '<center>click <a href="Login.html">Here</a> to Try Again</center>';
}
mysqli_close($con);


?>