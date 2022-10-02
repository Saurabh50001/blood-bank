<?php
	error_reporting(E_ERROR | E_PARSE);
	$conn=mysqli_connect('localhost',"root","","rakt");
//echo("Database connected<br>");
session_start();

	
	$password1 = $_REQUEST['is'];
	

	


/*======================================Update==================================*/

if(isset($_REQUEST['BtnUpdate']))
{
	$query="update receicerrej set
	receicername='$receicername1',gender='$gender1',age='$age1',mobile='$mobile1',bloodgroup='$bloodgroup1',email='$email1',password='$password1' where receicerid='$receicerid1'" ;
	if($conn->query($query)===TRUE)
	{
		echo "Data updated...!";
	}
	else
	{
		echo "Data not feed.....!" . $conn->error;
	}
}


?>

<!DOCTYPE htmml>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Change Password - E-RAKT KOSH MANAGEMENT SYSTEM
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
					<li class="active"><a href="login.php">log In</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
			<center style="background-color: aqua;">
				<div style="width: 500px; border: 2px solid #E65100; margin-top: 35px; margin-bottom: 35px; background-color: #FFA726; padding: 20px">
					<h1 style="background-image: linear-gradient(red, #262626); color: white; padding: 10px">Change Password</h1>
					<div style="width: 100px; float: left; padding: 15px">
						<img src="images/login1.png" width="150px" height="150px">
					</div>
					<form name="donor_form" method="post" action="" style="width: 500px; padding: 15px;" enctype="multipart/form-data">
						<table>
							<tr>
								<td>New Password:</td>
								<td><input type="text" name="si" style="margin-bottom: 10px;font-size: 16px"></td>
							</tr>
							
							<tr>
								<td>Confirm Password:</td>
								<td><input type="text" name="TxtPassword" style="margin-bottom: 10px;font-size: 16px"></td>
							</tr>
							
						</table>
						<div style="margin-left: 50px">
							<input type="submit" value="Submit" name="BtnSave" style="background-color: #64DD17; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none">
							<input type="reset" style="background-color: #0336FF; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none">
							
						</div>
					</form>
					<p><a href="forgot_password.php">Forgot Password?</a><br>Not A DONOR?	<a href="donor_registration.php">Click Here</a> to REGISTER.</p>
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
	</body>
</html>