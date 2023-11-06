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
		header("Location: Login_adm.php?error=Email is required");
	exit();

	}
	else if (empty($pass)) {
		header("Location: Login_adm.php?error=password is required");
	exit();	
	}
	else{

		$sql = "SELECT * FROM administrateur WHERE  email_adm='$email' AND mdp_adm='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {

				$row = mysqli_fetch_assoc($result);

            if ($row['email_adm'] == $email && $row['mdp_adm'] == $pass) {
            	$_SESSION['id_adm'] = $row['id_adm'];
            	$_SESSION['nom_complet'] = $row['nom_complet'];
            	$_SESSION['email_adm'] = $row['email_adm'];
            	$_SESSION['nom_fil'] = $row['nom_fil'];
            	header("Location: profile_adm.php");
		        exit();
		    }

		   
            }else{
            	header("Location: Login_adm.php?error=Incorrect User name or password");
		        exit();
		       }

      }


}else {
	header("Location: Login_adm.php");
	exit();
}

?>