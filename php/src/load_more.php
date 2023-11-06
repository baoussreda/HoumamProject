<?php
session_start();
	
		include 'db_connect.php';
			$my_id_pfe = $_SESSION['id_pfe'];


	$sql = "SELECT name,id_pfe,id FROM document WHERE id_pfe = '".$my_id_pfe."'";
	$result = mysqli_query($conn, $sql);


	$j=1;

	while ($row = $result->fetch_assoc()) {

		if ($j == 1 && isset($row['name'])) {
			$doc1 = $row['name'];
			$id = $row['id'];
		}
		if ($j == 2 && isset($row['name'])) {
			$doc2 = $row['name'];
			$id1 = $row['id'];
		}
		if ($j == 3 && isset($row['name'])) {
			$doc3 = $row['name'];
			$id2 = $row['id'];
 		}

		$j++;
	
	}

	$newcount = $_POST['newcount'];

	if (isset($doc1)) {
	


	$sql2 = "SELECT comment FROM comment WHERE id_document = '".$id."' LIMIT $newcount";
	$result2 = mysqli_query($conn, $sql2);
			while ($row2 = $result2->fetch_assoc()) {
				echo "<br>";
					echo $row2['comment'];
					echo "<br>";
					echo "<br>";
					echo "<br>";

					

				}
			}
			/*

			if (isset($doc2)) {
	


				$sql3 = "SELECT comment, id_commenter FROM comment WHERE id_document = '".$id1."' LIMIT $newcount";
				$result3 = mysqli_query($conn, $sql3);
				while ($row3 = $result3->fetch_assoc()) {
					echo "<br>";
					echo $row3['comment'];
					echo "<br>";

					echo $id1;
				}
			}

				echo "<br>";

				if (isset($doc3)){




				$sql4 = "SELECT comment, id_commenter FROM comment WHERE id_document = '".$id2."' LIMIT $newcount";
				$result4 = mysqli_query($conn, $sql4);
				while ($row4 = $result4->fetch_assoc()) {
					echo "<br>";
					echo $row4['comment'];
					echo "<br>";

					echo $id2;
				}
}
				echo "<br>";*/
				
?>