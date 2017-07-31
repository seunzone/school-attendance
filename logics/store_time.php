<?php
	
	if(empty($_POST['school_id'])){
		die("Please provide your student ID");
	}
	$id=$_POST['school_id'];
	$day = date('d');
	$week_day= date('l');
	$month = date('F');
	$year= date('o');


	echo "<br> {$id} {$week_day} {$day} {$month} {$year}";
	require "functions.php";
		student_exist($id);

?>