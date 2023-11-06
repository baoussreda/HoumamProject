<?php 
session_start();
include "db_connect.php";



if (isset($_SESSION['id_enc']) && isset($_SESSION['email_enc']) && isset($_SESSION['nom_complet'])) {



    

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
margin-left: 100px;

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
color: black ;
margin: 1em;
margin-left: 100px;
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





table {
 

border-collapse: collapse;
width: 70%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: lecentert;
align-content: center;
align-self: center;
text-align: center;
margin-left:150px;
}
th {
background-color: #367D8E;
color: white;
}
td{
    width: 50%;
    text-align: left;
}


input {
    width: 10%;
    height: 20px;
    border-radius: 10px;
    margin-right: 15px;
    
}
#button{
    width: 10%;
    height: 20px;
    border-radius: 10px;
    margin-right: 15px;
}
form {
    position: absolute;
    background-color: #81c4e2;
    width: 700px;
    height: 20%;
    margin-top: 50px;
    margin-left: 60px;
    border-radius: 10px;
    box-shadow: 0px 0px 5px 5px #000;
    color:black ;
   

    
}
#de {
    margin-left: 100px;
}
.form{
    margin-top: 50px;
}


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

#titree{
    visibility: hidden;
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
  padding: 2px;
  padding-top: 1em;
  border-radius: 1em;
 margin-left: 300px;
}
h3 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}

</style>

<body>

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
          <a href="consult_doc.php"><span class="fas fa-file-alt"></span>Consulter les document des etudiants<span></span></a>
        </li>
        <li>
          <a href="recap.php" class="active"><span class="fas fa-border-all"></span>Recap des sujets<span></span></a>
        </li>
        <li>
          <a href="logout.php"><span class="fas fa-sign-out-alt"></span>Se deconnecter<span></span></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="user-container">
  <label id="de"><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRécapitulation  </h1></label>

<form method="POST" action="recap.php" >
<div class="form">
   <label id="de">L'année universitaire </label> <input type="text" name ="min" placeholder="Année">
   
<button name="chercher" id="button">chercher</button>
</div>
</form>




</body>


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

    document.getElementById('table').style.marginTop = '10%';

    document.getElementById('titre1').style.visibility = 'hidden';


  

    vme.focus();
    vme.print();



   }
</script>

<?php



$myName = $_SESSION['nom_complet'];

$myId = $_SESSION['id_enc'];

if(isset($_POST['chercher'])){
    

    if($_POST['min']!=NULL){

        

        $min = $_POST['min'];

            echo "<div id='table'>";

                    echo "<img src='img/ensa.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                    echo "<h2 style='visibility:hidden;' id='titre1'>";
                    echo "Recapitulatif des projets de l'encadrant ".$myName." :";
                    echo "</h2>";



        for($i = $min; $i<2024; $i++){

                    $sql = "SELECT id_pfe,suj_pfe FROM pfes WHERE id_enc = '".$myId."' AND annee = '".$i."'";
                    $result = $conn->query($sql);

                    
                    if($result){

                            $j = $i-1;

                                    echo "<div class='resultat'>";

                                        echo "<h3 id='titre'>";
    
                                            echo "<h3>Annee universitaire : ";
                                            echo $j."/".$i;
            
                                        echo "</h3>";
    
                            echo "<table border='1' cellpadding='1' id='table1'>";
                            
                        
                            echo "<tr><th class='sujet'>sujet</th><th class='etudiant'>etudiants</th><tr>";

        
                                while ($row = $result->fetch_assoc()) { 

                                    echo "<tr><td class='sujet'>";
                                    echo $row['suj_pfe'];

                            $sql1 = "SELECT nom_complet FROM etudiant WHERE id_pfe = '".$row['id_pfe']."'";
                            $result1 = $conn->query($sql1);
            
            
                                echo "</td><td class='etudiant'>";

                                            while($row1 = $result1->fetch_assoc()){
                                                    echo $row1['nom_complet']."<br> ";
                                                                         }
           

                        }
                    }
                    else{
                        echo"sdfsdfg";
                    }
                    echo "</td></tr>";

            echo "</table>";

    echo "</div>";


            
        }
        echo "</div></div>";
        echo "<br> ";echo "<br> ";echo "<button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";
        
        
    }elseif($_POST['min']!=NULL){



        $min = $_POST['min'];

        $min1 = $min-1;

      
        echo "<div id='table'>";

            echo "<img src='img/ensa.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";

            echo "<br><br><br><h2 style='visibility:hidden;' id='titre1'>";
            echo "Recapitulatif des PFE's de l'encadrant ".$myName." :";
            echo "</h2>";

                 echo "<div id='global'";


                        echo "<div class='resultat'>";

                                        echo "<h3 id='titre'>";
    
                                            echo "<h3>Annee universitaire : ";
                                            echo $min1."/".$min;
            
                                        echo "</h3>";

                                        echo "<table border='1' cellpadding='1' id='table1'>";

                                        echo "<tr><th class='sujet'>sujet</th><th class='etudiant'>etudiants</th><tr>";
                                       
                                        $sql3 = "SELECT id_pfe,suj_pfe FROM pfes WHERE id_enc = '".$myId."' AND annee = '".$min."'";
                                        $result3 = $conn->query($sql3);
                                
                                    

                                        while ($row3 = $result3->fetch_assoc()) { 

                                            echo "<tr><td class='sujet'>";
                                            echo $row3['suj_pfe'];
        
                                    $sql4 = "SELECT nom_complet FROM etudiant WHERE id_pfe = '".$row3['id_pfe']."'";
                                    $result4 = $conn->query($sql4);
                    
                    
                                        echo "</td><td class='etudiant'>";
        
                                                    while($row4 = $result4->fetch_assoc()){
                                                            echo $row4['nom_complet']."<br> ";
                                                        }
                   
                            echo "</td></tr>";
                                                    }                  
        
                                     echo "</table>";
        
                        echo "</div>";
        
        
                    
                
                echo "</div>";

        echo "</div>";
                            
                        
                echo "<br> ";
                echo "<br> ";
                
                echo "<button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";
                
                        }
                        elseif($_POST['max']!=NULL && $_POST['min']==NULL){

                            $max = $_POST['max'];

                            $max1 = $max-1;
                    
                            
                        
                    
                            
                            $sql5 = "SELECT id_pfe,suj_pfe FROM pfes WHERE id_enc = '".$myId."' AND annee = '".$max."'";
                            $result5 = $conn->query($sql5);
                    
                            if($result5){
                          
                            echo "<div id='table'>";
                    
                            echo "<img src='img/ensa.png' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                            echo "<br><br><br><h2 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de l'encadrant ".$myName." :";
                            echo "</h2>";
                    
                            echo "<div id='global'";

          
                    
                            echo "<div class='resultat'>";
                    
                                                            echo "<h3 id='titre'>";
                        
                                                                echo "<h3>Annee universitaire : ";
                                                                echo $max1."/".$max;
                                
                                                            echo "</h3>";
                    
                                                            echo "<table border='1' cellpadding='1' id='table1'>";
                    
                                                            echo "<tr><th class='sujet'>sujet</th><th class='etudiant'>etudiants</th><tr>";
                    
                    
                                                            while ($row5 = $result5->fetch_assoc()) { 
                    
                                                                echo "<tr><td class='sujet'>";
                                                                echo $row5['suj_pfe'];
                            
                                                        $sql6 = "SELECT nom_complet FROM etudiant WHERE id_pfe = '".$row5['id_pfe']."'";
                                                        $result6 = $conn->query($sql6);
                                        
                                        
                                                            echo "</td><td class='etudiant'>";
                            
                                                                        while($row6 = $result6->fetch_assoc()){
                                                                                echo $row6['nom_complet']."<br> ";
                                                                                                     }
                                       
                            
                                                    }
                    
                        
                    
                                
                                                echo "</td></tr>";
                            
                                        echo "</table>";
                            
                                echo "</div>";
                            
                            
                                        
                                    
                                    echo "</div></div>";
                                                }
                                            
                                    echo "<br> ";echo "<br> ";echo "<button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";   
                        }            
    else{
        echo "vous devez remplir au moins un champ";
    }
    


}

}
?>