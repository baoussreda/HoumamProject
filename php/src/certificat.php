<?php 
session_start();

     $conn = mysqli_connect("mydb", "root", "", "pfe");
     if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

     $fill = $_SESSION['nom_filliere'];
     $myName = $_SESSION['nom_complet'];
     $mygrpId = $_SESSION['id_groupe'];
     $mypfeId = $_SESSION['id_pfe'];

    

     $sql = "SELECT nom_complet FROM encadrant WHERE nom_fil = '".$fill."'";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();
       

    $sql1 = "SELECT suj_pfe FROM pfes WHERE id_groupe = '".$mygrpId."'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $sql2 = "SELECT id_enc FROM pfes WHERE id_pfe = '".$mypfeId."'";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    

    if($row2){
    $sql3 = "SELECT nom_complet FROM encadrant WHERE id_enc = '".$row2['id_enc']."'";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    }

    $sql4 = "SELECT note_rapport FROM pfes WHERE id_groupe = '".$mygrpId."'";
    $result4 = $conn->query($sql4);
    $row4 = $result4->fetch_assoc();
    

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Attestation</title>
</head>
<body >

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
h3 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
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
button{
  width: 30%;
    height: 40px;
    margin:3px auto;
    justify-content: center;
    display: block;
    color: black;
    background-color:#BED5D6 ;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
    border: 0.1em solid #637E80;
   

}
</style>
    --<style type="text/css">
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

.certificat {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
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

.center{
    position: absolute;
    width: 70%;
    height: 30%;
  
    top:calc(20% - 20px/2); /* height divided by 2*/
    left:calc(17% - 37px/2); /* width divided by 2*/
}

.certificat {
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1,   #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    font-weight: bold;
    font-family: Arial;
    font-size: 20px;
}

button {
    width: 10%;
    text-align: center;
    justify-content: center;
    align-content: center;
    align-items: center;
    margin-left: 43%;

}



    </style>-->

<script src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
   function makePdf(){

    document.getElementById('img').style.visibility = 'visible';
    document.getElementById('img').style.width = '26%';
    document.getElementById('img').style.height = '45px';
    document.getElementById('img').style.float = 'right';

    document.getElementById('text').style.marginTop = '80px';





    var printMe = document.getElementById('print');
    var vme = window.open("","","width:100%,height:800");
    
    vme.document.write(printMe.outerHTML);
    vme.document.close();

    
    document.getElementById('img').style.visibility = 'hidden';
    document.getElementById('img').style.width = '1px';
    document.getElementById('img').style.height = '1px';
    document.getElementById('text').style.marginTop = '-20px';


    vme.focus();
    vme.print();
    
   }
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
                        <span class="title">Consulter les informations du PFE</span>
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
                    <a href="certificat.php" class="active">
                        <span class="icon"><i class="fa fa-certificate" aria-hidden="true"></i></i></span>
                        <span class="title">Attestation du PFE</span>
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
    <div class="center">
        <div class="certificat" align="center" id ="print">
   <?php

echo "<img src='img/ens.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";


        echo "</br>";

        if($result4 && $result4->num_rows!=0){

    if($row4['note_rapport'] != 0){

        $date=date("Y");

        $annee1 = $date-1;

        echo "<div id='text'>";

echo " <h3>Attestation du projet de fin d'études pour l'année univesitaire ".$annee1."/".$date." : "; echo "<br><br><br>"; echo" Je sousigne Mr (Mme) ".ucfirst($row['nom_complet'])." que l'étudiant(e) ".ucfirst($myName). " a travaillé sur le sujet ".ucfirst($row1['suj_pfe'])." encadré(e) par Monsieur (Mme) ". ucfirst($row3['nom_complet']).", et il (elle) a obtenu la note ". $row4['note_rapport']."/20</h3>";
        
        echo "</div>";

    echo "</div>
        </div>
    </br><button onClick='makePdf()'>Voir comme pdf</button>";
    
    }
}?> 
</div>       

</body>
</html>