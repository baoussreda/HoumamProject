<?php 
session_start();
include "db_connect.php";

$id_groupe = $_SESSION['id_groupe'];
$id_pfe = $_SESSION['id_pfe'];
$my_username = $_SESSION['nom_complet'];

if (isset($_SESSION['id_etu']) && isset($_SESSION['email_etu']) && isset($_SESSION['nom_complet'])) {

    $sql = "SELECT suj_pfe,des_pfe FROM pfes WHERE id_pfe = '$id_pfe'";
    $sql1 = "SELECT nom_complet, id_groupe FROM etudiant WHERE id_groupe = '$id_groupe' AND nom_complet != '$my_username'"; 
    $sql2 = "SELECT id_enc FROM pfes WHERE id_pfe = '$id_pfe'";
    $sql4 = "SELECT note_rapport FROM pfes WHERE id_groupe = '$id_groupe'";

        $result = mysqli_query($conn, $sql);
        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        $result4 = mysqli_query($conn, $sql4);

        $row = $result->fetch_assoc();
        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $row4 = $result4->fetch_assoc();

        if($result2 && $result2->num_rows!=0){

    $sql3 = "SELECT nom_complet FROM encadrant WHERE id_enc = ".$row2['id_enc']."";

        $result3 = mysqli_query($conn, $sql3);
        $row3 = $result3->fetch_assoc();
        
        
    }
}


?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile</title>
</head>
<body background= black>

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
        background: url('img/background.jpeg');
        min-height: 100%;

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
h1 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
h3 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: white;
}
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 60%;
margin-left: 350px;


}
th {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
background-color:#637E80 ;
background-image: url(sky.jpg);
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
text-align: center;
background-color: #81c4eb;
}

.collegue{
    width: 20%;
}
.encadrant{
    width: 15%;
}
.sujet{
    width: 30%;
}
.description{
    width: 40%;
}

</style>
    <!--<style type="text/css">
        body {
    margin: 0;
    padding: 0;
    height: 100%;
    min-height: 100vh;
    text-decoration: none;
    display: flex;
    flex-direction: column;
}

* {
    padding: 0px;
    margin: 0px;
    text-decoration: none;
}

.wrapper {
    display: absolute;
    margin-top: 0;
    padding-top: 0;
}
nav{
    justify-content: space-around;
    align-items: center;
    display: flex;
    min-height: 10vh;
    background-color: white;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    width: 100%;
}

.icon1 {
    font-size: 50px;
    justify-content: left;
}

.logo{
    color: rgb(225, 225, 225);
    letter-spacing: 5px;
    font-size: 20px;
    margin-left: 0px;
}



* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
        }

        nav{
    display: flex;
    width: 100%;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
    background-color: white;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}
table {
margin-top: 10%;
margin-left: 0px;

width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: lecentert;
}
th {
background-color: #367D8E;
color: white;
}
td{
    width: 50%;
    text-align: left;
}

.collegue{
    width: 20%;
}
.encadrant{
    width: 15%;
}
.sujet{
    width: 15%;
}
.description{
    width: 40%;
}

h1 {
    font-family: monospace;
    font-weight: bold;
    text-align: center;
}


    </style>-->


        <div class="wrapper">
        <nav>
            <div class="logo">
                <img src="img/ens.png">
            </div>
            <div style="clear: both;"></div>

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
          <a href="info_pfe.php" class="active">
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
                    <a href="etudiant_docs.php">
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

<br><br><br><br><br><br>

    <?php 

    
        if ($row && $row1 && $row2 && $row3 ) {




            echo "<table id='table' border='1' ><tr><th ><h3>Vos Collegues</h3></th><th ><h3>Votre encadrant</h3></th><th ><h3>&nbsp&nbsp&nbspVotre &nbsp&nbsp&nbsp&nbspsujet&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3></th><th ><h3>Description du sujet</h3></th></tr>";
            
            echo "<tr><td >"; do { echo $row1["nom_complet"]. ",\n"; }while($row1 = $result1->fetch_assoc()); echo"</td><td class='encadrant'>";
            

            echo $row3['nom_complet']."</td>";

        echo "<td class='sujet'>";
        echo $row["suj_pfe"];
        echo "</td>";
        
        echo "<td class='description'>";
        echo $row["des_pfe"];   
        echo "</td>";
    echo "</td></tr></table>";
                              
} 

                                  else{
                                    echo "<h1>Vous n'avez aucun projet pour le moment</h1>";
                                  }

     ?>



<?php 
    $sql5 = "SELECT * FROM pfes WHERE id_groupe = '".$_SESSION['id_groupe']."'";
    $result5 = $conn->query($sql5);

    if($result5 && $result5->num_rows!=0){

        echo "<br><br><br><br><br><br>
        <table  border='1'><tr><th><h3>Date</h3></th><th><h3>Heure</h3></th><th><h3>classe</h3></th><th><h3>Jury</h3></th></tr>";

                    while($row5 = $result5->fetch_assoc()){

                        echo "<td>";
                        echo $row5['date'];
                        echo "</td>";
                        echo "<td>";
                        echo $row5['heure'];
                        echo "</td>";
                        echo "<td>";
                        echo $row5['classe'];
                        echo "</td>";

                        

                        $sql6 = "SELECT id_jury FROM encadrant WHERE id_enc='".$row5['id_enc']."'";
                        $result6 = $conn->query($sql6);

                            if($result6 && $result6->num_rows!=0){

                                echo "<td>";

                                while($row6 = $result6->fetch_assoc()){
                                    $sql7 = "SELECT nom_complet FROM encadrant WHERE id_jury = '".$row6['id_jury']."'";
                                    $result7 = $conn->query($sql7);

                                    if($result7 && $result7->num_rows!=0){
                                        while($row7 = $result7->fetch_assoc()){
                                            echo $row7['nom_complet'];
                                            echo "<br>";
                                        }
                                    }
                                    
                                }
                                    echo "</td>";
                                    echo "</tr>";
                            }


                            echo "</table>";

                    }
                }
?>
    </div>
    </div>
</div>
</body>
</html>