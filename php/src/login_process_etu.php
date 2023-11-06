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
		header("Location: Login_etu.php?error=Email is required");
	exit();

	}
	else if (empty($pass)) {
		header("Location: Login_etu.php?error=password is required");
	exit();	
	}
	else{

		$sql = "SELECT * FROM etudiant WHERE  email_etu='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {

				$row = mysqli_fetch_assoc($result);
            if ($row['email_etu'] == $email && $row['password'] == $pass) {
            	$_SESSION['id_etu'] = $row['id_etu'];
            	$_SESSION['nom_complet'] = $row['nom_complet'];
            	$_SESSION['email_etu'] = $row['email_etu'];
				$_SESSION['id_groupe'] = $row['id_groupe'];
				$_SESSION['id_pfe'] = $row['id_pfe'];
				$_SESSION['nom_filliere'] = $row['nom_filliere'];
            	header("Location: profile_etu.php");
		        exit();}


		    
            }else{
            	header("Location: Login_etu.php?error=Incorrect User name or password");
		        exit();
		       }
	
      }


}else {
	header("Location: Login_etu.php");
	exit();
}

?>