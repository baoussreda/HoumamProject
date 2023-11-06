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



?>

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Docs</title>
  </head>
  <style type="text/css">
  html{
    height: 100%;
    overflow-x: hidden;
}
*{
padding: 0;
margin: 0;

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
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
  color: white;
  background-color:#367D8E;c
}
  </style>
 <style type="text/css">
 	* {
  padding:0;
  margin:0;
  text-decoration: none;
  font-weight: bold;
}

body {
  font-family: "Montserrat", sans-serif;
  width: 100%;
  background-image: 100%;
}

          nav{
            padding: 0;
            margin: 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}

.logo{
  
    letter-spacing: 5px;
    font-size: 20px;
}


.icon1 {
    font-size: 50px;
    justify-content: left;
}

.comment {
	background-color: #DEF0F5;
	width: 530px;
	align-content: center;
	justify-content: center;
	align-items: center;
	text-align: center;	
}

 </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		var count = 1;
 		$("button").click(function(){
 			count = count + 1;
 			$(".comment").load("load_more.php", {
 				newcount: count
 			} );
 		});
 	});
 </script>
	 <div class="wrapper">
        <nav>
            <div class="logo">
                <img src="img/ensa.png">
            </div>
        </nav>
    </div>
	<div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>Profil d'étudiant</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="profile_etu.php" ><span class="fa fa-home"></span><span>Profil</span></a>
        </li>
		<li>
 		  <a href="info_pfe.php">
 						<span class="icon"><i class="fas fa-user-plus"></i></span>
 						<span class="title">Consulter les informations </span>
 					</a>
 				</li>
 				<li>
 					<a href="upload.php">
 						<span class="icon"><i class="fas fa-users"></i></span>
 						<span class="title">Mettre en ligne des documents</span>
 					</a>
 				</li>
 				<li>
 					<a href="etudiant_docs.php" class="active">
 						<span class="icon"><i class="fas fa-paperclip"></i></span>
 						<span class="title">Mes documents</span>
 					</a>
 				</li>
 				<li>
 					<a href="logout.php">
 						<span class="icon"><i class="fas fa-sign-out-alt"></i></span>
 						<span class="title">Se deconnecter</span>
 					</a>
 				</li>
      </ul>
    </div>
  </div>

  <div class="user-container">
<?php


$maghatkhdmch = 'http://mydb/pfea/uploads/';


if (isset($doc1)) {
	
$file = $maghatkhdmch.$doc1.'.pdf' ;


echo "<br><br><table>

	<tr>
		<td>
			<iframe src=$file width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			</form>
		</td>
		<td>"; ?>
			<div class="comment" >
				<?php
				$sql2 = "SELECT comment, id_commenter FROM comment WHERE id_document = '".$id."' LIMIT 1";
				$result2 = mysqli_query($conn, $sql2);
				while ($row2 = $result2->fetch_assoc()) {
					echo "<br>";
					echo $row2['comment'];
					echo "<br>";
				}

				echo "<br>";
				
				?>
			</div>
			<button>Afficher plus</button>
		<?php echo "</td>
	</tr>
</table> <br><br><br><br>";
}


if (isset($doc2)) {
	
$file = $maghatkhdmch.$doc2.'.pdf' ;


echo "<br><br><table>

	<tr>
		<td>
			<iframe src=$file width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			</form>
		</td>		<td>"; ?>
			<div style="background-color: #DEF0F5;
	width: 530px;
	align-content: center;
	justify-content: center;
	align-items: center;
	text-align: center;	
}">
				<?php
				$sql3 = "SELECT comment, id_commenter FROM comment WHERE id_document = '".$id1."' LIMIT 1";
				$result3 = mysqli_query($conn, $sql3);
				while ($row3 = $result3->fetch_assoc()) {
					echo "<br>";
					echo $row3['comment'];
					echo "<br>";
				}

				echo "<br>";
				
				?>
			</div>
			<button>Afficher plus</button>
		<?php echo "</td>
	</tr>
</table> <br><br><br><br>";
}

if (isset($doc3)) {
	
$file = $maghatkhdmch.$doc3.'.pdf' ;


echo "<br><br><table>

	<tr>
		<td>
			<iframe src=$file width=800 height=600 align=middle></iframe>
		</td>
		<td> 
		<form action='commenter.php' method='POST'>
			</form>
		</td>
		<td>"; ?>
			<div style="background-color: #DEF0F5;
	width: 530px;
	align-content: center;
	justify-content: center;
	align-items: center;
	text-align: center;	
}">
				<?php
				$sql4 = "SELECT comment, id_commenter FROM comment WHERE id_document = '".$id2."' LIMIT 1";
				$result4 = mysqli_query($conn, $sql4);
				while ($row4 = $result4->fetch_assoc()) {
					echo "<br>";
					echo $row4['comment'];
					echo "<br>";
				}

				echo "<br>";
				
				?>
			</div>
			<button>Afficher plus</button>
		<?php echo "</
	</tr>
</table> <br><br><br><br>";


}


?>
</div>
</body>
</html>