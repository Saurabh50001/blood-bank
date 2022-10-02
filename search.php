<?php
	error_reporting(E_ERROR | E_PARSE);
	$conn=mysqli_connect('localhost',"root","","rakt");
//echo("Database connected<br>");
session_start();

	
	$comb=$_REQUEST['commm'];

	$x=0;

	

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	$find="select * from donerrej where donerid='$comb'";
	$result= mysqli_query($conn,$find);
	
	while($row1= mysqli_fetch_array($result))
	{
	$donerid = $row1["donerid"];
	$donername = $row1["donername"];
	$gender = $row1["gender"];
	$age = $row1["age"];
	$mobile = $row1["mobile"];
	$bloodgroup = $row1["bloodgroup"];
	$email = $row1["email"];
	$password = $row1["password"];
	//$img1 = $_REQUEST['FilePic'];
		
		global $x;
		$x=1;
	}
}

?>
<!DOCTYPE htmml>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Search - E-RAKT KOSH MANAGEMENT SYSTEM
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
					<li class="active"><a href="search.php">Search</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
			<center style="background-color: aqua;">
				<div style="width: 500px; height: 250px; border: 2px solid #3E2723; margin-top: 35px; margin-bottom: 35px; background-color: #D7CCC8; padding: 20px; border-radius: 25px;">
					<img src="images/search.png" width="250px" height="50px">
					
					<form name="search_form" method="post" action="" style="width: 100%; margin-top: 40px;" enctype="multipart/form-data">
						<table>
							<tr>
								<td>Select Blood Group:</td>
								<td>
									<select name="blood_group" style="margin-bottom: 10px;font-size: 16px">
										<option>Select</option>
										<option value="O positive">O+</option>
										<option value="O negative">O-</option>
										<option value="A positive">A+</option>
										<option value="A negative">A-</option>
										<option value="B positive">B+</option>
										<option value="B negative">B-</option>
										<option value="AB positive">AB+</option>
									</select>
								</td>
							</tr>
							
						</table>
						<div style="margin-top: 25px;">
							<input type="submit" value="Submit" name="BtnSave" style="background-color: orangered; border: 0; font-size: 16px; padding: 10px; border-radius: 50%; color: white; width: 80px;outline: none">
							<input type="reset" style="background-color: red; border: 0; font-size: 16px; padding: 10px;border-radius: 50%; color: white; width: 80px;outline: none">
							
						</div>
					</form>
					
				</div>
			</center>
			
			<div style="width: 100%; background-color: beige; padding-top: 20px; padding-bottom: 20px;margin-top: 210px;">
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