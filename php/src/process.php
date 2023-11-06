<?php

$sname = "mydb";
$uname = "root";
$password = "";
$db_name = "pfe";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "connection failed";
}

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)){
		header("Location: Login.php?error=Email is required");
	exit();
	}
	elseif (empty($pass)) {
		header("Location: Login.php?error=password is required");
	exit();	
	}
	else{
		$sql = "SELECT * FROM administrateur WHERE  email='$email' AND mdp_adm='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)) {
			echo "Hello";
		}
	}

}else {
	header("Location: Login.php");
	exit();
}

?>