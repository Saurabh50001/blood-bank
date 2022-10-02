<?php
	error_reporting(E_ERROR | E_PARSE);
	$conn=mysqli_connect('localhost',"root","","rakt");
     //echo("Database connected<br>");
     session_start();

	$_name3 = $_REQUEST['TxtDonorName'];
	$mobile = $_REQUEST['TxtMobile'];
	$email = $_REQUEST['TxtEmail'];
	$subject = $_REQUEST['TxtSubject'];
	$message = $_REQUEST['TxtMessage'];
	
	//$comb=$_REQUEST['commm'];

	// $x=0;

	
if(isset($_REQUEST['BtnSave']))
{     
	mysqli_query($conn,"INSERT INTO contact_us (name2,mobile,email,subject2,message2) VALUES('$_name3','$mobile','$email','$subject','$message')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		echo("Data feeded...!");
	}
}


?>


<!DOCTYPE htmml>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Contact Us - E-RAKT KOSH MANAGEMENT SYSTEM
</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
			body{
				margin: 0;
				padding: 0;
				font-family: sans-serif;
			}
			.nav{
				margin: 0;
			}
			.nav li {
				display:inline-block;
			}
			.nav li a {
				display:block;
				text-decoration:none;
				color:#ffffff;
				padding:15px 20px;0
				font-size: 1em;
				text-transform: capitalize;
				text-shadow: 0 1px 0 #5C2830;
			}
			.nav li.active a {
				text-shadow: 0 1px 0 #EBEBEB;
				color:#D13949;
				background: #E5E5E5;
				background: -moz-linear-gradient(top, #E5E5E5 0%, #C4C4C4 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E5E5E5), color-stop(100%,#C4C4C4));
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E5E5E5', endColorstr='#C4C4C4',GradientType=0 );
				-moz-border-radius:5px 5px 0 0;
				-webkit-border-radius:5px 5px 0 0;
				border-radius:5px 5px 0 0;
				box-shadow: inset 0px -2px 4px #9C9797;
				-webkit-box-shadow: inset 0px -2px 4px #9C9797;
				-moz-box-shadow: inset 0px -2px 4px #9C9797;
				-o-box-shadow: inset 0px -2px 4px #9C9797;
			}
			.nav li a:hover {
				text-shadow: 0 1px 0 #EBEBEB;
				-webkit-transition: .2s all linear;
				-moz-transition: .2s all linear;
				-o-transition: .2s all linear;
				transition: .2s all linear;
				color:#D13949;
				background: #E5E5E5;
				background: -moz-linear-gradient(top, #E5E5E5 0%, #C4C4C4 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E5E5E5), color-stop(100%,#C4C4C4));
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E5E5E5', endColorstr='#C4C4C4',GradientType=0 );
				-moz-border-radius:5px 5px 0 0;
				-webkit-border-radius:5px 5px 0 0;
				border-radius:5px 5px 0 0;
				box-shadow: inset 0px -2px 4px #9C9797;
				-webkit-box-shadow: inset 0px -2px 4px #9C9797;
				-moz-box-shadow: inset 0px -2px 4px #9C9797;
				-o-box-shadow: inset 0px -2px 4px #9C9797;
			}
			
			li{
				display: inline-block;
			}
		</style>
	</head>
	<body>
		<div>
			<div style="width: 100%; height: 130px; background-color: #FF2D30;">
				<p style="color: white; text-align: center; font-size: 45px; line-height: 130px; font-weight: bold">E-RAKT KOSH MANAGEMENT SYSTEM
</p>
			</div>
			<div style="width: 100%; height: 45px; background-image: linear-gradient(#262626, red)">
				<ul class="nav">
					<li><a href="home.php">Home</a></li>	
					<li><a href="donor_registration.php">Donor Registration</a></li>  
					<li><a href="receiver_registration.php">Receiver Registration</a></li>
					<li><a href="send_request.php">send Request</a></li>
					<li><a href="view_request.php">View Request</a></li>
					<li><a href="camps.php">Camps</a></li>
					<li><a href="add_camps.php">Add Camps</a></li>
					<li><a href="login.php">log In</a></li>
					<li><a href="search.php">Search</a></li>
					<li class="active"><a href="contactus.php">Contact Us</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
			<center style="background-color: aqua;">
				<div style="width: 500px; height: 550px; border: 2px solid #3E2723; margin-top: 35px; margin-bottom: 35px; background-color: beige ; padding: 15px; border-radius: 25px; box-shadow: 8px 8px #E0E0E0">
					<img src="images/contactus.jpg" width="250px" height="150px">
					
					<form name="search_form" method="post" action="" style="width: 100%; margin-top: 40px;" enctype="multipart/form-data">
						<table>
							<tr>
								<td>Name:</td>
								<td><input type="text" name="TxtDonorName" style="margin-bottom: 10px;font-size: 16px"></td>
							</tr>
							
							<tr>
								<td>Mobile No.:</td>
								<td><input type="text" name="TxtMobile" style="margin-bottom: 10px;font-size: 16px"></td>
							</tr>
							
							<tr>
								<td>Email:</td>
								<td><input type="text" name="TxtEmail" style="margin-bottom: 10px;font-size: 16px"></td>
							</tr>
							<tr>
								<td>Subject:</td>
								<td><input type="text" name="TxtSubject" style="margin-bottom: 10px;font-size: 16px"></td>
							</tr>
							<tr>
								<td>Message:</td>
								<td>
									<textarea rows="5" cols="30" style="margin-bottom: 10px;font-size: 16px" name="TxtMessage"></textarea>
								</td>
							</tr>
							
						</table>
						<div style="margin-top: 25px;">
							<input type="submit" value="Send" name="BtnSave" style="background-color: orangered; border: 0; font-size: 16px; padding: 10px; border-radius: 50%; color: white; width: 80px;outline: none">
							<input type="reset" style="background-color: red; border: 0; font-size: 16px; padding: 10px;border-radius: 50%; color: white; width: 80px;outline: none">
							
						</div>
					</form>
					
				</div>
			</center>
			
			<div style="width: 100%; background-color: beige; padding-top: 20px; padding-bottom: 20px;">
				<center>
					<p>&copy; Copyright 2022 All Rights Reserved. Developed By <strong>VISHAL KUMAR.</strong> Under The Guidance Of <strong>PROF. GANESH PANDEY.</strong></p>
					<ul style="list-style: none;">
						<li><a href="contactus.php">Contact Us</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="feedback.php">Feedback</a></li>
					</ul>
				</center>
			</div>
		</div>	
	<			<!---------------------------------------------Enter Event--------------------------------------------->	
<script>	
function enterevent4()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custname.focus();
					}
			}
	function enterevent5()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custemail.focus();
					}
			}
	function enterevent6()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custphone.focus();
					}
			}
	function enterevent7()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custwhatno.focus();
					}
			}
	function enterevent8()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custaddr.focus();
					}
			}
	function enterevent9()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custdist.focus();
					}
			}
	
	function enterevent10()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custstate.focus();
					}
			}
	function enterevent11()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custpin.focus();
					}
			}
	function enterevent12()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.fem.focus();
					}
			}
	function enterevent13()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.mal.focus();
					}
			}
	function enterevent14()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custsexx.focus();
					}
			}
	
	</script>
	</body>
</html>