<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['sign_msg'] = "le nom d'utilisateur ne peux pas contenir un espace ou un caractere special!"; 
			header('location: signup.php');
		}
		else{
			
		$fusername=$username;
		
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		$fname = check_input($_POST["name"]);
		
		mysqli_query($conn,"insert into `user` (uname, username, password, access) values ('$fname', '$fusername', '$fpassword', '2')");
		
		$_SESSION['msg'] = "<p style='color:green'>Inscription avec success !!!!!</p>!"; 
		header('location: index.php');
		}
	}
?>