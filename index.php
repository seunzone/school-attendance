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


	<div class="list">
	<h3> Student ID &nbsp  Time in</h3>
	<?php 
		require"logics/functions.php";
		attendance_list();
	?>
	<br>
	</div>

	<?php echo date('l F o'); ?> <br>
	<img src="logo.png">
		<h1>Akunne's Community High School</h1>
			<form action="logics/store_time.php" method="POST">
				<labeL>Enter Your School ID</labeL> <br><br>
				<input name="school_id" id="swag" placeholder="enter your school ID" type="text">
				
				
				<br><br>

				<input type="submit" value="Check in" id="myBtn" >
			</form>
		<hr>
			
		</div>
</body>

</html> 