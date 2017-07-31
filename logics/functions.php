<?php
	
		function student_exist($id){
			$id=$_POST['school_id'];
			$day = date('d');
			$week_day= date('l');
			$month = date('F');
			$year= date('o');
			$time=date('H:i A');

			$sql="SELECT * FROM students WHERE id = {$id}";
			require "connect.php";
			
			$result=mysqli_query($con, $sql);
			if(!mysqli_num_rows($result)){
				echo "</br> <br> You are not a registered student <br>";
				echo '<a href="/movement/school-attendance/"> go back</a>';
			}
			else{
				$sql="INSERT INTO records(student_id, day, week_day, month, year_name, time_in)
					VALUES($id, $day, '$week_day', '$month', '$year', '$time')";
					echo $sql;
				$result = mysqli_query($con, $sql); 
				header('location:http://localhost/movement/school-attendance/');
			}

			
		}

		function attendance_list(){
			$sql="SELECT * FROM records";

			require "connect.php";
			$result=mysqli_query($con, $sql);
			while($row=mysqli_fetch_assoc($result)){
				echo " {$row['student_id']} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {$row['time_in']} <br>";

		}
			}



?>