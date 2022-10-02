<?php
	error_reporting(E_ERROR | E_PARSE);
	$conn=mysqli_connect('localhost',"root","","rakt");
      //echo("Database connected<br>");
      session_start();

	$requestid1 = $_REQUEST['si'];
	$name1 = $_REQUEST['TxtDonorName'];
	$gender1 = $_REQUEST['RdGender'];
	$age1 = $_REQUEST['TxtAge'];
	$mobile1 = $_REQUEST['TxtMobile'];
	$bloodgroup1 = $_REQUEST['blood_group'];
	$email1 = $_REQUEST['TxtEmail'];
	$req_date = $_REQUEST['RequiredDate'];
	$details = $_REQUEST['detail'];

	$comb=$_REQUEST['commm'];

	$x=0;

	
if(isset($_REQUEST['BtnSave']))
{
	mysqli_query($conn,"INSERT INTO send_request(requestid,name,gender,age,mobile,bloodgroup,email,req_date,details) VALUES('$requestid1','$name1','$gender1','$age1','$mobile1','$bloodgroup1','$email1','$req_date','$details')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		echo("Data feeded...!");
	}
}

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	$find="select * from send_request where requestid='$comb'";
	$result= mysqli_query($conn,$find);
	
	while($row1= mysqli_fetch_array($result))
	{
	$requestid = $row1["requestid"];
	$name = $row1["name"];
	$gender = $row1["gender"];
	$age = $row1["age"];
	$mobile = $row1["mobile"];
	$bloodgroup = $row1["bloodgroup"];
	$email = $row1["email"];
	$req_date1 = $row1["req_date"];
	//$img1 = $_REQUEST['FilePic'];
		
		global $x;
		$x=1;
	}
}

/*======================================Update==================================*/

if(isset($_REQUEST['BtnUpdate']))
{
	$query="update send_request set
	name='$name1',gender='$gender1',age='$age1',mobile='$mobile1',bloodgroup='$bloodgroup1',email='$email1',req_date='$req_date1' where requestid='$requestid1'" ;
	if($conn->query($query)===TRUE)
	{
		echo "Data updated...!";
	}
	else
	{
		echo "Data not feed.....!" . $conn->error;
	}
}

/*=========================Delete====================================*/

if(isset($_REQUEST['BtnDelete']))
{
	$sql="delete from send_request where requestid='$requestid1'";
	if($conn->query($sql)===TRUE)
	{
		echo "Record Deleted....!";
	}
	else
	{
		echo "Data Not Found..!";	
	}
}

?>


<!DOCTYPE htmml>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Send Request - E-RAKT KOSH MANAGEMENT SYSTEM
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
					<li class="active"><a href="send_request.php">send Request</a></li>
					<li><a href="view_request.php">View Request</a></li>
					<li><a href="camps.php">Camps</a></li>
					<li><a href="add_camps.php">Add Camps</a></li>
					<li><a href="login.php">log In</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
			<center style="background-color: aqua;">
				<div style="width: 520px; border: 4px solid #D30003; margin-top: 35px; margin-bottom: 35px; background-color: #EA80FC; padding: 20px; border-top-left-radius: 25px; border-bottom-right-radius: 25px; box-shadow: 8px 8px #E1BEE7">
					<img src="images/brequest.png" width="400px" height="60px">
					
					<form name="donor_form" method="post" action="" style="width: 480px; padding: 15px;">
						<table>
							<tr>
								<td>Request Id:</td>
								<td><input type="text" name="si" value="<?php echo $requestid;?>" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent4()"></td>
							</tr>
							<tr>
								<td>Name:</td>
								<td><input type="text" name="TxtDonorName" value="<?php echo $name;?>" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent5()"></td>
							</tr>
							<tr>
								<td>Gender:</td>
								<td>
									<?php 
	
	if($gender=="Female")
	{
		$s11="checked";
	}
	if($gender!="Female")
	{
		$s11="unchecked";
	}
	if($gender=="Male")
	{
		$s21="checked";
	}
	if($gender!="Male")
	{
		$s21="unchecked";
	}
	
	?>		
									
									<input type="radio" name="RdGender" <?php echo $s21;?> value="Male" style="margin-bottom: 10px;"><span style="font-size: 16px" onclick="enterevent6()">Male</span>
									<input type="radio" name="RdGender" value="Female" <?php echo $s11;?> style="margin-bottom: 10px;"><span style="font-size: 16px" onclick="enterevent7()">Female</span>
								</td>
							</tr>
							<tr>
								<td>Age:</td>
								<td><input type="text" name="TxtAge" value="<?php echo $age;?>" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent8()"></td>
							</tr>
							<tr>
								<td>Mobile No.:</td>
								<td><input type="text" name="TxtMobile" value="<?php echo $mobile;?>" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent9()"></td>
							</tr>
							<tr>
								<td>Select Blood Group:</td>
								<td>
								
									<select name="blood_group" value="<?php echo $bloodgroup;?>" style="margin-bottom: 10px;font-size: 16px" onClick="enterevent10()">
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
							<tr>
								<td>Email:</td>
								<td><input type="text" name="TxtEmail" value="<?php echo $email;?>" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent11()"></td>
							</tr>
							<tr>
								<td>Till Required Date:</td>
								<td><input type="date" name="RequiredDate" value="<?php echo $req_date;?>" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent12()"></td>
							</tr>
							<tr>
								<td>Details:</td>
								<td>
									<textarea rows="5" cols="30" name="detail" style="margin-bottom: 10px;font-size: 16px" onclick="enterevent13()"><?php echo $details;?></textarea>
								</td>
							</tr>
							<!-- <select name="commm" style="margin-bottom: 10px;font-size: 16px">
								<option>Choose Option</option>
								<?php
								// 	$store=mysqli_query($conn,"select requestid from send_request");
								// 	while($row=mysqli_fetch_array($store)){?>
								// <option value="<?php echo $row["requestid"];?>">
								// <?php
								// 	echo $row["requestid"];
									?>									   
								</option>
								<?php
								
								?>
							</select> -->
							
						</table>
						<div>
							<input type="submit" value="Submit" name="BtnSave" style="background-color: #039BE5; border: 0; font-size: 16px; padding: 10px; border-top-right-radius: 25px; border-bottom-left-radius: 25px; color: white; width: 80px;outline: none">
							<input type="reset" style="background-color: #006064; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 25px; border-bottom-right-radius: 25px; color: white; width: 80px;outline: none">
							<input type="submit" value="Update" name="BtnUpdate" style="background-color: #6D4C41; border: 0; font-size: 16px; padding: 10px; border-top-right-radius: 25px; border-bottom-left-radius: 25px; color: white; width: 80px;outline: none">
							<input type="submit" value="Delete" name="BtnDelete" style="background-color: #FF5722; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 25px; border-bottom-right-radius: 25px;  color: white; width: 80px;outline: none">
							<input type="submit" value="Search" name="BtnSearch" style="background-color:brown; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
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
					<!---------------------------------------------Enter Event--------------------------------------------->	
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
	
	</script>
	</body>
</html>