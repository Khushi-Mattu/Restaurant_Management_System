<?php 

$email = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'password');


if ($email=='admin') {
		# code...
		if ($pass == '12345') {
			# code...
			header('location: admin.html');
		}
		else{
			echo "admin pass";
		}
}
else{

if (!empty($email)) {
	# code...
	if (!empty($pass)) {
		# code...
		$server = "localhost";
		$uname = "root";
		$dpass = "";
		$dbname = "restaurant";
		$conn = mysqli_connect($server, $uname, $dpass, $dbname);
		if (mysqli_connect_error()) {
			# code...
			die('Connection error ('. mysqli_connect_errno(). ')'.mysqli_connect_error());
		}
		else{

			$result1 = mysqli_query($conn,"SELECT name, email, pass FROM userRec WHERE email = '".$email."' AND  pass = '".$pass."'");


            if (mysqli_num_rows($result1) > 0 && $row = $result1->fetch_assoc() ) {
            	# code...
            	session_start();
            	// $_SESSION["id"] = $row["id"];
            	// $_SESSION['name'] = $row["name"];
            	// $_SESSION["empname"] = $email;
           	    $_SESSION['loggedin'] = true;
           	    $conn->close();
            	header('location: mainpage.php');

            }
            else{
            	echo "invalid user name and password";		
            }

		}


	}
	else{
		echo "enter password";

	}
}
else{
	echo "enter email";
}
}

 ?>