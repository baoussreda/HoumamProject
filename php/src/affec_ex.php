<?php 
session_start();
  $fill = $_SESSION['nom_fil'];
$bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');
$conn = mysqli_connect("mydb", "root", "", "pfe");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
echo "string";
if(isset($_POST['affect'])){
echo "string";
	$selected = $_POST['checkbox'];
	$selected1 = $_POST['checkbox1'];

	$inc = 0;

	if (count($selected)<=3 && count($selected1)==1) {


		foreach ($selected as $ii) {

			if (isset($ii)) {
				$inc++;
			}
			
		}

		foreach ($selected as $suj) {
				if (isset($suj)) {

					

                        		foreach ($selected1 as $enc){
				if (isset($enc)) {
					$sql1 = "SELECT sujet FROM sujet ";
						$result1 = $conn->query($sql1);
echo "jfjdfk";
						echo $suj;
						echo $enc;

					while ($row2 = $result1->fetch_assoc()) {
			if ($inc>1)  {	
			
				header('location:profile_adm.php');
			}

			else {
$date=date("Y");
  										$HOST = "mydb";
										$USER = "root";
										$PASS = "";
										$dbname ="pfe";
										$users = "pfes"; 
										$base = mysqli_connect($HOST, $USER, $PASS);
										mysqli_query($conn,"UPDATE pfes SET id_enc = $enc WHERE id_pfe = ".$suj."" )		;	

								mysqli_select_db($base, $dbname);
  								$handler = mysqli_query($base, "SELECT id_pfe FROM pfes ORDER BY id_pfe DESC LIMIT 1");

									$data = mysqli_fetch_assoc($handler);
									$id = $data['id_pfe'];
									$id = $id + 1;
	$sql3="SELECT id,des_suj FROM sujet WHERE sujet = '".$suj."'";
						$result3 = $conn->query($sql3);
						$row3 = $result3->fetch_assoc();
						
					$insertuser= $bdd ->prepare("INSERT INTO pfes(id_pfe,suj_pfe,des_pfe,id_enc,annee,nom_fil,id_proposeur) VALUES(?,?,?,?,?,?,?)");
   $insertuser -> execute(array($id,$suj,$row3["des_suj"],$enc,$date,$fill,$row3["id"]));
   $sql4="DELETE FROM sujet WHERE fil_suj='".$fill."' AND sujet = '".$suj."' ";
   $result4=$conn->query($sql4);
									
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
		header('location:suj_ex.php');


?>