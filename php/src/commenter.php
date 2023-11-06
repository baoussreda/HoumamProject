<?php 
	

	include "db_connect.php";
	include "consult_doc.php";

	$bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');

$id = $_SESSION['id_enc'];




if (isset($_POST[$smya])) {
		
echo"sdcz";

		$sql5 = 'SELECT id FROM document WHERE name = "'.$smya.'" ';
		$result5 = mysqli_query($conn, $sql5);

		$row5 = $result5->fetch_assoc();


	$insertuser= $bdd ->prepare("INSERT INTO comment(comment,id_document,id_commenter) VALUES(?,?,?)");
    $insertuser -> execute(array($_POST[$smya],$row5['id'],$id));

	header('Location:consult_doc.php');

	}


if (isset($_POST[$smya1])) {


		$sql6 = 'SELECT id FROM document WHERE name = "'.$smya1.'" ';
		$result6 = mysqli_query($conn, $sql6);

		$row6 = $result6->fetch_assoc();	

	$insertuser= $bdd ->prepare("INSERT INTO comment(comment,id_document,id_commenter) VALUES(?,?,?)");
    $insertuser -> execute(array($_POST[$smya1],$row6['id'],$id));	
	header('Location:consult_doc.php');

	}
if (isset($_POST[$smya2])) {


		$sql7 = 'SELECT id FROM document WHERE name = "'.$smya2.'" ';
		$result7 = mysqli_query($conn, $sql7);

		$row7 = $result7->fetch_assoc();	

		$insertuser= $bdd ->prepare("INSERT INTO comment(comment,id_document,id_commenter) VALUES(?,?,?)");
    $insertuser -> execute(array($_POST[$smya2],$row7['id'],$id));		
	header('Location:consult_doc.php');

	}
if (isset($_POST[$smya3])) {


		$sql8 = 'SELECT id FROM document WHERE name = "'.$smya3.'" ';
		$result8 = mysqli_query($conn, $sql8);

		$row8 = $result8->fetch_assoc();	

		$insertuser= $bdd ->prepare("INSERT INTO comment(comment,id_document,id_commenter) VALUES(?,?,?)");
    $insertuser -> execute(array($_POST[$smya3],$row8['id'],$id));		

	}

	


?>