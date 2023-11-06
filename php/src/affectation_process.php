<?php 

include "affect_pfe.php";

$conn = mysqli_connect("mydb", "root", "", "pfe");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if(isset($_POST['affect'])){
$annee = date("Y");

		$num_grps = count($array1);
		$num_pfes = count($array2);

	$array3 = array();
	$array4 = array();




while (!empty($array1)) 
{
    do {   
    $groupe = rand(1,$num_grps);

}while(in_array($groupe, $array3));

	do {   
    $pfe = rand(1,$num_pfes);

}while(in_array($pfe, $array4));

	

	
	
	$array3[] = $groupe;
	$array4[] = $pfe;
	echo $groupe;
	echo $pfe;
	

	mysqli_query($conn,"UPDATE etudiant SET id_pfe = $pfe  WHERE annee =$annee AND id_groupe = ".$groupe."" )		;	
	mysqli_query($conn,"UPDATE pfes SET id_groupe = $groupe WHERE annee =$annee AND id_pfe = ".$pfe."" )		;

	unset($array1[$groupe]);
	unset($array2[$pfe]);




}
	


	}else{
		echo"sdfasdf";
	}


	


?>
*/