<?php 
session_start();

    include "db_connect.php";

    if (isset($_SESSION['id_adm']) && isset($_SESSION['email_adm']) && isset($_SESSION['nom_complet'])) {

            $myFil = $_SESSION['nom_fil'];

               
?>
<!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="print" href="print.css" />


  <title>Recap</title>
 </head>
 <style>
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

table {
 

border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: lecentert;
align-content: center;
align-self: center;
text-align: center;
margin: auto;
}
th {
background-color: #367D8E;
color: white;
}
td{
    width: 50%;
    text-align: left;
}
*/

input {
    width: 10%;
    height: 20px;
    border-radius: 10px;
    margin-right: 15px;
}
#button{
    width: 20%;
    height: 20px;
    border-radius: 10px;
    margin-right: 15px;
}
/*form {
    position: absolute;
    width: 700px;
    height: 20%;
    margin-top: 90px;
    margin-left: 23%;
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    
}*/
#de {
    margin-left: 30%;
}
/*.form{
    margin-top: 50px;
}*/


#pdf{
    width: 20%;
}
.resultat {
    padding-top: 20%;
}

#pdf{
    align-self: center;
    margin-left: 37%;
    margin-bottom: 20px;
    height: 30px;
}
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
     *{
            margin: -3.3px;
            padding: 0;
            box-sizing: border-box;*/
        }

        

  
    nav{
    display: flex;

    align-items: center;
    min-height: 10vh;
 
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    float: right;
}
#sub{
  height: 0px;
  visibility: hidden;
}
#sub1{
  height: 0px;
  visibility: hidden;
}
#sub2{
  height: 0px;
  visibility: hidden;
}
h4{
     font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: black;

}
.sidebar{
  width: 20%;
  display: inline-block;
  height: 100%;
  background: #81c4eb  ;
 
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
.sidebar-menu a:hover {
  background-color: 
#629194;
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
    margin: 5px;
    padding: 15px;
    margin-left: 1200px;
}
#logo {
  font-weight: bold;

}
form {
  width: 50%;
  margin: 0 auto;
}
fieldset {
  background: #81c4eb;
  border: 5px solid #637E80;
  width: 85%;




}
div {
  margin-bottom: 10px;
  font-size: 20px;
  color: white;
}
legend {
  padding: 8px;
  background: #637E80;
  color: white;
  font-family :Alpha Geometrique; 
  font-size: 20px;

}


input[type=submit]:hover {
  background-color: #f2f2f2;
}

.user-card {
 
  display: block;
  padding: 1em;
  text-align: center;
 

}

.user-img  {
  height: 150px;
  width: 140px;
  border-radius: 0.5em;
  -webkit-box-shadow: 0px 1px 15px -2px white;
          box-shadow: 0px 1px 15px -2px white;
 margin-left: -70px;
 padding: 6px;
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
  margin-top: 1em;
  padding: 1em;
  border-radius: 5px;
  -webkit-box-shadow: 0px 1px 10px 1px white;
          box-shadow: 0px 1px 10px 1px white;
}

button {
  width: 40%;
    height: 40px;
    margin:3px auto;
    justify-content: center;
    display: block;
    color: black;
    background-color:#BED5D6 ;
    font-size: 0.7em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
    border: 0.1em solid #637E80;
    margin-left: 200px;

}


.icon1 {
    font-size: 50px;
    justify-content: right;
    margin-left: 20px;
}

h1 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
h4 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
h3 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 90%;
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
caption {
font-family: sans-serif;
background-color:#637E80 ;
}

body {
      background: url('img/background.jpeg');
      min-height: 100%;

    }

 </style>
<script src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
   function makePdf(){   

    document.getElementById('img').style.visibility = 'visible';
    document.getElementById('img').style.float = 'right';
    document.getElementById('img').style.width = '30%';
    document.getElementById('img').style.height = '40px';

    document.getElementById('table').style.marginTop = '10%';
    document.getElementById('global').style.paddingTop = '50px';

    document.getElementById('titre1').style.visibility = 'visible';

    var printMe = document.getElementById('table');
    var vme = window.open("","","width:100%,height:800");
    vme.document.write(printMe.outerHTML);

    
    vme.document.close();

    document.getElementById('img').style.visibility = 'hidden';
    document.getElementById('img').style.height = '1px';
    document.getElementById('img').style.width = '1%';

    document.getElementById('table').style.marginTop = '-10%';
    document.getElementById('global').style.paddingTop = '-20%';


    document.getElementById('titre1').style.visibility = 'hidden';



    vme.focus();
    vme.print();



   }
   <script>
     function sub(){
     document.getElementById("sub").style.visibility = "visible";
     document.getElementById("sub").style.height = "60px";
     }

     function sub1(){
     document.getElementById("sub1").style.visibility = "visible";
     document.getElementById("sub1").style.height = "60px";
     }

     function sub2(){
     document.getElementById("sub2").style.visibility = "visible";
     document.getElementById("sub2").style.height = "60px";
     }


   </script>

</script>
  <body >

                <div class="wrapper">
        <nav>

             
             <div class="logo">
                 <img src="img/ens.png" >
             </div>
             <div style="clear: both;"></div>
            
        </nav>

    </div>
     <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>Profil d'admin</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="profile_adm.php" ><span class="fa fa-home"></span><span>Accueil</span></a>
        </li>
        <li>
          <div class="idk" id="normal" >
          <a href="#" onclick="sub()">
            <span class="icon"><i class="fas fa-user-plus"></i></span>
            <span class="title">Ajout des utilisateurs</span>
            <span id="down" class="fas fa-caret-down"></span>
          </a>
          </div>
           <ul class='sub' id="sub">
           <li class="normal"><a href="add_etu.php">Etudiant</a></li>

           <li class="normal"><a href="add_enc.php">Encadrant</a></li>
          </ul>
        </li>
        <li>
          <div class="idk" id="normal" >
          <a href="##"  onclick="sub1()">
            <span class="icon"><i class="fas fa-paperclip"></i></span>
             <span class="title" >Former les groupes</span>
            <span id="down" class="fas fa-caret-down"></span>
          </a>
          </div>
           <ul class='sub1' id="sub1">
           <li class="normal"><a href="grp_etu.php">Etudiant</a></li>

           <li class="normal"><a href="grp_jury.php">Jury</a></li>
          </ul>
        </li>
        <li>
          <div class="idk" id="normal" >
          <a href="#"  onclick="sub2()">
            <span class="icon"><i class="fas fa-paperclip"></i></span>
             <span class="title" >Affecter les sujets</span>
            <span id="down" class="fas fa-caret-down"></span>
          </a>
          </div>
           <ul class='sub2' id="sub2">
           <li class="normal"><a href="affect_pfe.php">Automatiquement</a></li>

           <li class="normal"><a href="affect_pfe_man.php" >Manuellement</a></li>
          </ul>
        </li>
      
       <li class="normal">
                    <a href="gestion.php">
                        <span class="icon"><i class="fas fa-tasks"></i></span>
                        <span class="title">Gérer les sujets externes</span>
                    </a>
        </li>
        <li class="normal">
                    <a href="suj_ex.php">
                        <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                        <span class="title">Sujets externes </span>
                    </a>
                </li>

        <li class="normal">
          <a href="soutenance.php">
            <span class="icon"><i class="fa fa-clipboard"></i></span>
            <span class="title">Soutenance</span>
          </a>
        </li>
       
       <li class="normal">
          <a href="recap_adm.php" class="active">
            <span class="icon"><i class="fas fa-align-justify"></i></span>
            <span class="title">Recapitulatif des pfe's</span>
          </a>
        </li>

        <li>
          <a href="index.php"><span class="fas fa-sign-out-alt"></span><span>Se Deconnecter</span></a>
        </li>
      </ul>
    </div>
  </div>

<br><br><br>
<form method="POST" action="recap_adm.php" >
<div class="form">
  <br><br><br>
  <fieldset>
   <label id="de">De</label> <input type="text" name ="min">
   <label>A</label> <input type="text" name="max">

    <button name="chercher" id="button">chercher</button>
<div></fieldset>
</form>

</body>
</html>


<?php
 if(isset($_POST['chercher'])){
               

                    if($_POST['min']!=NULL && $_POST['max']!=NULL){

                        

                        $min = $_POST['min'];
                        $max = $_POST['max'];

                        echo "<div id='table'>";

                    echo "<img src='img/ens.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                            echo "<h3 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de la filiere ".$myFil." :";
                            echo "</h3>";


                            for($i = $min; $i<=$max; $i++){

                                $j = $i+1;

                              
                            $sql = "SELECT id_pfe,suj_pfe,id_enc FROM pfes WHERE annee='".$i."' AND nom_fil='".$myFil."' ";
                            $result = $conn->query($sql);

                                if ($result&& $result->num_rows != 0) {
                                    echo "<div class='resultat'>";

                                        echo "<h4 id='titre'>";
    
                                            echo "<h3>Annee universitaire : ";
                                            echo $i."/".$j;
            
                                        echo "</h3><br>";



                                echo "<table border='1' id='table1'>
                                
                                <tr><th>Sujets</th><th>Noms des etudiant</th><th>Noms des encadrants</th></tr>";

                               
                                
                                while($row = $result->fetch_assoc()){

                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row['suj_pfe'];
                                    echo "</td>";

                                    echo "<td>";

                                        $sql1 = "SELECT nom_complet FROM etudiant WHERE id_pfe='".$row['id_pfe']."'";
                                        $result1 = $conn->query($sql1);

                                            while($row1 = $result1->fetch_assoc()){
                                                echo $row1['nom_complet'];
                                                echo "<br>";
                                            }
                                    echo "</td>";

                                    echo "<td>";   
                                        $sql2 = "SELECT nom_complet FROM encadrant WHERE id_enc='".$row['id_enc']."'";
                                        $result2 = $conn->query($sql2);
                                        $row2 = $result2->fetch_assoc();

                                            echo $row2['nom_complet'];
                                    echo "</td>";

                                    echo "</tr>";
                                }

                                echo "</table>";

                                echo "</div>";
 }
                            }
                            echo "</div>";

                            echo "</div>";

                            echo "<br><button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";
                    }
                    elseif($_POST['min']!=NULL && $_POST['max']==NULL){
                        
                        $min = $_POST['min'];

              

                        $min1 = $min+1;
                        echo "<div id='table'>";

                    echo "<img src='img/ens.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                            echo "<h2 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de la filiere ".$myFil." :";
                            echo "</h2>";

                            echo "<div class='resultat'>";

                                        echo "<h3 id='titre'>";
    
                                            echo "Annee universitaire : ";
                                            echo $min."/".$min1;
            
                                        echo "</h3>";



                                echo "<table >
                                
                                <tr><th>Sujets</th><th>Noms des etudiant</th><th>Noms des encadrants</th></tr>";

                            $sql = "SELECT id_pfe,suj_pfe,id_enc FROM pfes WHERE annee='".$min."' AND nom_fil='".$myFil."'";
                            $result = $conn->query($sql);

                            while($row = $result->fetch_assoc()){

                                echo "<tr>";
                                echo "<td>";
                                echo $row['suj_pfe'];
                                echo "</td>";

                                echo "<td>";

                                    $sql1 = "SELECT nom_complet FROM etudiant WHERE id_pfe='".$row['id_pfe']."'";
                                    $result1 = $conn->query($sql1);

                                        while($row1 = $result1->fetch_assoc()){
                                            echo $row1['nom_complet'];
                                            echo "<br>";
                                        }
                                echo "</td>";

                                echo "<td>";   
                                    $sql2 = "SELECT nom_complet FROM encadrant WHERE id_enc='".$row['id_enc']."'";
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();

                                        echo $row2['nom_complet'];
                                echo "</td>";

                                echo "</tr>";
                            }

                            echo "</table>";

                            echo "</div>";

                        
                        echo "</div>";

                        echo "</div>";

                        echo "<button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";





                    }

                    elseif($_POST['min']==NULL && $_POST['max']!=NULL){
                        
                        $max = $_POST['max'];

                 

                        $max1 = $max+1;
                        echo "<div id='table'>";

                    echo "<img src='img/ens.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                            echo "<h2 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de la filiere ".$myFil." :";
                            echo "</h2>";

                            echo "<div class='resultat'>";

                                        echo "<h4 id='titre'>";
    
                                            echo "Annee universitaire : ";
                                            echo $max."/".$max1;
            
                                        echo "</h4>";



                                echo "<table border='1' id='table1'>
                                
                                <tr><th>Sujets</th><th>Noms des etudiant</th><th>Noms des encadrants</th></tr>";

                            $sql = "SELECT id_pfe,suj_pfe,id_enc FROM pfes WHERE annee='".$max."' AND nom_fil='".$myFil."'";
                            $result = $conn->query($sql);

                            while($row = $result->fetch_assoc()){

                                echo "<tr>";
                                echo "<td>";
                                echo $row['suj_pfe'];
                                echo "</td>";

                                echo "<td>";

                                    $sql1 = "SELECT nom_complet FROM etudiant WHERE id_pfe='".$row['id_pfe']."'";
                                    $result1 = $conn->query($sql1);

                                        while($row1 = $result1->fetch_assoc()){
                                            echo $row1['nom_complet'];
                                            echo "<br>";
                                        }
                                echo "</td>";

                                echo "<td>";   
                                    $sql2 = "SELECT nom_complet FROM encadrant WHERE id_enc='".$row['id_enc']."'";
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();

                                        echo $row2['nom_complet'];
                                echo "/td>";

                                echo "</tr>";
                            }

                            echo "</table>";

                            echo "</div>";

                        
                        echo "</div>";

                        echo "</div>";

                        echo "<button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";





                    }

                }




    }


?>