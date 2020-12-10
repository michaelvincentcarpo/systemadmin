<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$databasename = "dbfacebook";

		$connect = mysqli_connect($servername , $username , $password , $databasename);
		/*
		if ($connect->connect_error) {
		  die("Connection failed: " . $connect->connect_error);
		}
		echo "Connected successfully";
		*/
		if (isset($_POST['submit'])) {

			if (!empty($_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['date']) && !empty($_POST['gender'])) {

				$lname = $_POST['lname'] ;
				$fname = $_POST['fname'] ;
				$email = $_POST['email'] ;
				$password = $_POST['password'] ;
				$date = $_POST['date'] ;
				$gender = $_POST['gender'] ;

				$query = "insert into tblfacebook(lname,fname,email,password,date,gender) values('$lname' , '$fname' , '$email' , '$password' , '$date' , '$gender')";

				$run = mysqli_query($connect,$query);
				if ($run) {
					echo "form submitted successfully";
				}
				else{
					echo "form not submitted";
				}
			}
			else{

				echo "all fields required";
			}
		}
	?>