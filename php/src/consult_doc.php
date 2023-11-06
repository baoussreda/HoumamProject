<?php 
session_start();
include "db_connect.php";

$my_id = $_SESSION['id_enc'];

if (isset($_SESSION['id_enc']) && isset($_SESSION['email_enc']) && isset($_SESSION['nom_complet'])){

	 $sql = "SELECT id_pfe FROM pfes WHERE id_enc = '$my_id'";

	 $result = mysqli_query($conn, $sql);


$j = 1;

	 while($row = $result->fetch_assoc()) { 
	  		

	  	

	 $sql1 = "SELECT id_pfe, name FROM document WHERE id_pfe = '".$row['id_pfe']."' ";
	 $result1 = mysqli_query($conn, $sql1);
	 
	
	
	 	while($row1 = $result1->fetch_assoc()){



	 		if ($j == 1 && isset($row1['name'])) {
	 			$smya = $row1['name'];
	 			$pfe = $row1['id_pfe'];
	 			$sql20 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe."";
	   			$result20 = mysqli_query($conn, $sql20);
	   			$row20=  $result20->fetch_assoc();	
	 			
	 		}

	 		if ($j == 2 && isset($row1['name'])) {
	 			$smya1 = $row1['name'];
	 			$pfe1 = $row1['id_pfe'];	
	 			$sql21 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe1."";
	   			$result21 = mysqli_query($conn, $sql21);
	   			$row21=  $result21->fetch_assoc();		 			
	 		}

	 		if ($j == 3 && isset($row1['name'])) {
	 			$smya2 = $row1['name'];
	 			$pfe2 = $row1['id_pfe'];	
	 			$sql22 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe2."";
	   			$result22 = mysqli_query($conn, $sql22);
	   			$row22=  $result22->fetch_assoc();	
	 		}

	 		if ($j == 4 && isset($row1['name'])) {
	 			$smya3 = $row1['name'];
	 			$pfe3 = $row1['id_pfe'];
	 			$sql23 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe3."";
	   			$result23 = mysqli_query($conn, $sql23);
	   			$row23=  $result23->fetch_assoc();		 		
	 		}


	 		if ($j == 5 && isset($row1['name'])) {
	 			$smya4 = $row1['name'];
	 			$pfe4 = $row1['id_pfe'];
	 			$sql24 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe4."";
	   			$result24 = mysqli_query($conn, $sql24);
	   			$row24=  $result24->fetch_assoc();	
	 		}
	 		if ($j == 6 && isset($row1['name'])) {
	 			$smya5 = $row1['name'];
	 			$pfe5 = $row1['id_pfe'];
	 			$sql25 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe5."";
	   			$result25 = mysqli_query($conn, $sql25);
	   			$row25=  $result25->fetch_assoc();	
	 		}
	 		if ($j == 7 && isset($row1['name'])) {
	 			$smya6 = $row1['name'];
	 			$pfe6 = $row1['id_pfe'];
	 			$sql26 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe6."";
	   			$result26 = mysqli_query($conn, $sql26);
	   			$row26=  $result26->fetch_assoc();	
	 		}
	 		if ($j == 8 && isset($row1['name'])) {
	 			$smya7 = $row1['name'];
	 			$pfe7 = $row1['id_pfe'];
	 			$sql27 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe7."";
	   			$result27 = mysqli_query($conn, $sql27);
	   			$row27=  $result27->fetch_assoc();	
	 		}
	 		if ($j == 9 && isset($row1['name'])) {
	 			$smya8 = $row1['name'];
	 			$pfe8 = $row1['id_pfe'];
	 			$sql28 = "SELECT suj_pfe FROM pfes WHERE id_pfe = ".$pfe8."";
	   			$result28 = mysqli_query($conn, $sql28);
	   			$row28=  $result28->fetch_assoc();	
	 		}

	 			$j++;

	 				 		
	 	}


	

 
}

}



?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Docs</title>
  </head>

  <style type="text/css">

textarea {
	width: 100%;
	display: flex;
	margin-left:20px;
    resize: horizontal; 
    justify-content: center;
	min-height: 100px;
	border-radius: 5px;
    text-align: center;
    font-weight: bold;
    font-size: 1em;
}
iframe{
	margin-left:350px;
}
input[type=submit] {
	 width: 40%;
    height: 50px;
    margin-left: 100px ;
    justify-content: center;
    display: block;
    color: #fff;
    background-color: #696b6b;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
}
input[type=submit]:hover{
	background-color: #559be6;
}

html{
		 height: 100%;
		 overflow-x: hidden;
	 }
	 *{
  padding: 0;
  margin=: 0;

  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: 'Montserrat';
}

.sidebar{
  width: 20%;
  display: inline-block;
  height: 100%;
  background: #81c4eb;
  transition: width 300ms;
  position: fixed;
}
.sidebar-brand{
  height: 90px;
  padding: 1rem 0rem 1rem 2rem;
  color: #fff;
}
.sidebar-brand span{
  display: inline-block;
  margin-right: 1rem;
}
.sidebar-menu li{
  width: 100%;
  margin-bottom: 2rem;
  padding-left: 10%;
}
.sidebar-menu{
  margin-top: 1rem;
}
.sidebar-menu a:hover {
  background-color: 
#629194;
    }
.sidebar-menu a{
  padding-left: 1rem;
  display: block;
  color: #fff;
  font-size: 1.1rem;
}
.sidebar-menu a span:first-child{
  padding-right: 1rem;
  font-size: 1.5rem;
}
.sidebar-menu a.active{
  background: #fff;
  padding-top: 1rem;
  padding-bottom: 1rem;
  color: #008ea1;
  border-radius: 30px 0px 0px 0px;
}
.content{
  transition: margin-left 300ms;
  margin-left: 22%;
}
header{
  background-color: #fff;
  display: flex;
  justify-content: space-between;
  padding: 1rem;
  box-shadow: 2px 5px 15px 2px rgb(0 0 0 / 10%);
  position: fixed;
  left: 22%;
  width: calc(100% - 22%);
  top: 0;
  z-index: 100;
  transition: left 300ms;
}
.logo{
    color: rgb(225, 225, 225);
    letter-spacing: 5px;
    font-size: 20px;
    margin-left: 0px;
}
#logo {
  font-weight: bold;

}
#sub{
	height: 0px;
	visibility: hidden;
}
* {
 			margin: 0;
 			padding: 0;
 			box-sizing: border-box;
 		}

 		body {
 			min-height: 100%;
       background: url('img/background.jpeg');

 		}
 		#profile {
 			margin-left: -7px;
 		}

 		nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
 
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    float: right;

}




.user-container {
  float: right;
  width: 65%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-color: #81c4e2;
  margin: 2em 2em 0 0;
  border-radius: 0.5em;
  color: white;
  padding: 25px;
  padding-top: 1em;
  border-radius: 1em;
 margin-left: 300px;
}

.user-card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 1em;
  text-align: center;
}

.user-img {
  height: 130px;
  width: 110px;
  border-radius: 0.5em;
  -webkit-box-shadow: 0px 1px 15px -2px white;
          box-shadow: 0px 1px 15px -2px white;
}

.name-mail {
  text-align: center;
  margin-top: 2em;
  font-size: 20px;
  font-weight: 500;
  margin-left: 3em;
}

.name-mail .name {
  font-size: larger;
}

.name-mail .mail {
  font-size: smaller;
}

.set-edit {
  margin-top: 1em;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: white;
  font-size: 1.5em;
  font-weight: 500;
}

.btn {
  border: 0.1em solid black;
  border-radius: 10px;
  background: white;
  font-size: 0.8em;
  padding: 0.6em;
  padding-top: 0;
  padding-bottom: 0;
  cursor: pointer;
  margin: 10px;
  color: black;
  font-weight: bold;
}

.btn:hover {
  background-color: #f2f2f2;
}

.btn-sv {
  display: none;
  border: 0.1em solid black;
  border-radius: 10px;
  background: white;
  font-size: 1.2em;
  padding: 0.6em;
  padding-top: 0;
  padding-bottom: 0;
  cursor: pointer;
  margin: 10px;
  color: black;
  font-weight: bold;
  position: relative;
  left: 75%;
}

.btn-sv:hover {
  background-color: #f2f2f2;
}

.info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-top: 2em;
  padding: 1.5em;
  border-radius: 5px;
  -webkit-box-shadow: 0px 1px 10px 1px white;
          box-shadow: 0px 1px 10px 1px white;
}

.div_info {
  padding: 1em;
  margin-bottom: 0em;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
}

input {
  background-color: white;
  height: 2em;
  width: 20em;
  outline: none;
  font-size: 1em;
  color: black;
  margin: 1em;
  margin-left: 0;
  margin-bottom: 0;
  border: none;
  text-align: center;
  border: #1F1E2C;
  border-radius: 0.5em;
}

.details {
  margin-top: 0px;
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  font-weight: bold;
}


#save-btn {
  display: none;
}

  </style>

	        <div class="wrapper">
        <nav>
            <div class="logo">
                <img src="img/ensa.png">
            </div>
 
        </nav>

    </div>
	<div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>Profil d'encadrant</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="profile_enc.php" ><span class="fa fa-home"></span><span>Profil</span></a>
        </li>
        <li>
          <a href="info_pfe_enc.php"><span class="fas fa-info-circle"></span><span>info</span></a>
        </li>
        <li>
          <a href="prop_sjt.php"><span class="fas fa-file-powerpoint"></span>Proposer les sujets<span></span></a>
        </li>
        <li>
          <a href="consult_doc.php"class="active"><span class="fas fa-file-alt"></span>Consulter les document des etudiants<span></span></a>
        </li>
        <li>
          <a href="recap.php"><span class="fas fa-border-all"></span>Recap des sujets<span></span></a>
        </li>
        <li>
          <a href="logout.php"><span class="fas fa-sign-out-alt"></span>Se deconnecter<span></span></a>
        </li>
      </ul>
    </div>
  </div>
<?php


$maghatkhdmch = 'http://mydb/pfea/uploads/';

$j = 1;

	
if (isset($smya)) {
	
$file = $maghatkhdmch.$smya.'.pdf' ;

 
echo "<br><br>Sujet concerné : " .$row20['suj_pfe'] ; 

echo "<br><br><table>

	<tr>
		<td>
			<iframe src=$file width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea type='text' placeholder='Ajouter un commentaire' name='$smya' ></textarea><br>
		
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya1)) {

$file1 = $maghatkhdmch.$smya1.'.pdf' ;


echo "<br><br>Sujet concerné : " .$row21['suj_pfe'];
echo "<br><br><table>


	<tr>
		<td>
			<iframe src=$file1 width=800 height=600 align=middle></iframe>
		</td>
		<td>
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya1' ></textarea><br>

				<input type='submit' name='submit1' value='envoyer'/>		
				</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya2)) {

	$file2 = $maghatkhdmch.$smya2.'.pdf' ;


echo "<br><br>Sujet concerné : " .$row22['suj_pfe'];
echo "<br><br><table>

	<tr>
		<td>
			<iframe src=$file2 width=800 height=600 align=middle></iframe>
		</td>
		<td>
		 <form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya2' ></textarea><br>
			<input type='submit' name='submit2' value='envoyer'/>		
			</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}
		
if (isset($smya3)) {
	
$file3 = $maghatkhdmch.$smya3.'.pdf' ;

echo "<br><br>Sujet concerné : " .$row23['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file3 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya3' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya4)) {
	
$file4 = $maghatkhdmch.$smya4.'.pdf' ;

echo "<br><br>Sujet concerné : " .$row24['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file4 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya4' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya5)) {
	
$file5 = $maghatkhdmch.$smya5.'.pdf' ;

echo "<br><br>Sujet concerné : " .$row25['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file5 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya5' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya6)) {
	
$file6= $maghatkhdmch.$smya6 ;

echo "<br><br>Sujet concerné : " .$row26['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file6 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya6' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya7)) {
	
$file7 = $maghatkhdmch.$smya7 ;

echo "<br><br>Sujet concerné : " .$row27['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file7 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya7' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}

if (isset($smya8)) {
	
$file8 = $maghatkhdmch.$smya8 ;

echo "<br><br>Sujet concerné : " .$row28['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file8 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya8' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";


}

if (isset($smya9)) {
	
$file9 = $maghatkhdmch.$smya9 ;

echo "<br><br>Sujet concerné : " .$row29['suj_pfe'];
echo "<br><br><table>
	<tr>
		<td>
			<iframe src=$file9 width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			<textarea placeholder='Ajouter un commentaire' name='$smya9' ></textarea><br>
			<input type='submit' name='submit' value='envoyer'/>
		</form>
		</td>
	</tr>
</table> <br><br><br><br>";

}
	


	?>


</body>
</html>