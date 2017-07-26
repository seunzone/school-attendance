<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="css/main.css"/>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lobster" rel="stylesheet"> 

</head>


<body>
<hr>
	
	<div class="myDiv" align="center">


	<?php echo date('d/m/Y'); ?> <br>
	<img src="logo.png">
		<h1>Akunne's Community High School</h1>
			<form action="checkintime.php">
				<labeL>Enter Your School ID</labeL> <br><br>
				<input name="schoolId" id="swag" placeholder="enter your school ID" type="text">
				<br><br>
				
				<labeL>Checkin Time</labeL><br><br>
				<input type="number" name="timeHour"> <input type="number" name="timeMinute">
									<select " name="time>
		        						<option value="Am">Am</option>
		        						<option value="Pm">Pm</option>
		        						
		        					</select>
				<br><br>
				<br><br>


				<button id="myBtn">Check In</button>
			</form>
		<hr>
			
		</div>
</body>

</html> 