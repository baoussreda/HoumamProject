<?php
session_start();
	$conn = mysqli_connect("mydb", "root", "", "pfe");
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
	if(isset($_POST['add']))
	{

$HOST = "mydb";
$USER = "root";
$PASS = "";
$dbname ="pfe";
$users = "etudiant"; 
$base = mysqli_connect($HOST, $USER, $PASS);
$fill = $_SESSION['nom_fil'];
mysqli_select_db($base, $dbname);
  	$handler = mysqli_query($base, "SELECT id_groupe FROM etudiant ORDER BY id_groupe DESC LIMIT 1 ");
$data = mysqli_fetch_assoc($handler);
$ide = $data['id_groupe'];
$ide = $ide + 1;
			
			$selected = $_POST['checkbox'];
			
	if (count($selected) <= 3) {

	
		foreach ($selected as $id) {
				if (isset($id)) {

					  $sql = "SELECT id_etu,nom_complet FROM etudiant ";
                        $result = $conn->query($sql);
						    while($row = $result->fetch_assoc()) 
                            {


			mysqli_query($conn, "UPDATE etudiant SET id_groupe = $ide  WHERE id_etu = ".$id." ");
			
		}
 
		
				}
		}
	}
		
header('location:create_grp.php');

	}
	
?>