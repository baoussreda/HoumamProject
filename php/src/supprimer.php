<?php 
session_start();

  $fill = $_SESSION['nom_fil'];
$bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');
$conn = mysqli_connect("mydb", "root", "", "pfe");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if(isset($_POST['supprimer'])){

	$selected = $_POST['checkbox'];
	

	$inc = 0;
	foreach ($selected as $ii) {

			if (isset($ii)) {
				$inc++;
			}
			
		}

		foreach ($selected as $suj) {
				if (isset($suj)) {

					

                        		
				
						$sql1 = "SELECT sujet FROM sujet ";
						$result1 = $conn->query($sql1);

						echo $suj;
						

					while ($row2 = $result1->fetch_assoc()) {
					}
				}
			if ($inc>1)  {	
			
				header('location:profile_adm.php');
			}

			else {
$date=date("Y");
$sql5="SELECT id_ex,sujet FROM suj_ex WHERE annee='".$date."' AND  id_suj= '".$suj."'";
$result5=$conn->query($sql5);
$row5 = $result5->fetch_assoc();
  		
$sql4="DELETE FROM suj_ex WHERE fil_suj='".$fill."' AND id_suj = '".$suj."' ";
   $result4=$conn->query($sql4);
  		
   $sql6="DELETE FROM inter_ex WHERE year='".$date."' AND id_ex = '".$row5["id_ex"]."' ";
   $result6=$conn->query($sql6);
									
		
						    

				}


		}

	

}

if(isset($_POST['approuver'])){

	$selected = $_POST['checkbox'];
	

	$inc = 0;
	foreach ($selected as $ii) {

			if (isset($ii)) {
				$inc++;
			}
			
		}

		foreach ($selected as $suj) {
				if (isset($suj)) {

$date=date("Y");
  		
  										$HOST = "mydb";
										$USER = "root";
										$PASS = "";
										$dbname ="pfe";
										$users = "pfes"; 
										$base = mysqli_connect($HOST, $USER, $PASS);
										echo $suj;

$sql8="SELECT id_ex,des_suj,sujet FROM suj_ex WHERE id_suj='".$suj."'";
$result8 = $conn->query($sql8);
	$row8= $result8->fetch_assoc();
echo $row8["sujet"];
	
					$insertuser= $bdd ->prepare("INSERT INTO pfes(suj_pfe,des_pfe,annee,nom_fil,id_proposeur) VALUES(?,?,?,?,?)");
   $insertuser -> execute(array( $row8["sujet"],$row8["des_suj"],$date,$fill,$row8["id_ex"]));
   $sql4="DELETE FROM suj_ex WHERE fil_suj='".$fill."' AND id_suj = '".$suj."' ";
   $result4=$conn->query($sql4);



	}


		}

	

}

if(isset($_POST[$row1["titre"]])){

$selected = $_POST[$row1["titre"]];
	

	
					$sql3="SELECT des FROM suj_ex WHERE titre = '".$selected."'";
						$result3 = $conn->query($sql3);
						$row3 = $result3->fetch_assoc();
						echo $row3["des"];
						header('location:des.php');





}








		header('location:gestion.php');


?>