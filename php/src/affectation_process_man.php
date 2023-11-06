<?php 

$conn = mysqli_connect("mydb", "root", "", "pfe");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if(isset($_POST['affect'])){

	$selected = $_POST['checkbox'];
	$selected1 = $_POST['checkbox1'];

	$inc = 0;

	if (count($selected)==1 && count($selected1)==1) {


		foreach ($selected as $ii) {

			if (isset($ii)) {
				$inc++;
			}
			
		}

		foreach ($selected as $id) {
				if (isset($id)) {

					  $sql = "SELECT id_groupe FROM etudiant WHERE id_groupe = 0 ";
                        $result = $conn->query($sql);

                        		foreach ($selected1 as $id1){
				if (isset($id1)) {
						$sql1 = "SELECT id_pfe, suj_pfe FROM pfes";
						$result1 = $conn->query($sql1);

						echo $id;
						echo $id1;

						while ($row2 = $result1->fetch_assoc()) {
			if ($inc>1)  {	
			
				header('location:profile_adm.php');
			}

			else {
									
			mysqli_query($conn,"UPDATE etudiant SET id_pfe = $id1  WHERE id_groupe = ".$id."" )		;	
			mysqli_query($conn,"UPDATE pfes SET id_groupe = $id  WHERE id_pfe = ".$id1."" )		;

			}	
		
							}
		}
						    
}
				}


		}

	}else{
		echo"sdfasdf";
	}

}
		header('location:affect_pfe_man.php');


?>