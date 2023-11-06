<?php
session_start();
include "db_connect.php";

$email=$_POST['email'];
$password=$_POST['password'];

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: Login_enc.php?error=Email is required");
	exit();

	}
	else if (empty($pass)) {
		header("Location: Login_enc.php?error=password is required");
	exit();	
	}
	else{

		$sql = "SELECT * FROM encadrant WHERE  email_enc='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {

				$row = mysqli_fetch_assoc($result);

            if ($row['email_enc'] == $email && $row['password'] == $pass) {
            	$_SESSION['id_enc'] = $row['id_enc'];
            	$_SESSION['nom_complet'] = $row['nom_complet'];
            	$_SESSION['email_enc'] = $row['email_enc'];
            	$_SESSION['nom_fil'] = $row['nom_fil'];
            	header("Location: profile_enc.php");
		        exit();
		    }

		   
            }else{
            	header("Location: Login_enc.php?error=Incorrect User name or password");
		        exit();
		       }

      }


}else {
	header("Location: Login_enc.php");
	exit();
}

?>