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
    width: 700px;
    height: 20%;
    margin-top: 90px;
    margin-left: 23%;
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    
}
#de {
    margin-left: 30%;
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
 </style>

 <body background="img/bg3.jpg">

    <nav>
          <a href="profile_adm.php"><span class="icon1"><i class="fas fa-arrow-left"></i></span></a>
            <div class="logo">
                <img src="img/logo.png">
            </div>
 
        </nav>

    </div>


<form method="POST" action="recap_adm.php" >
<div class="form">
   <label id="de">De</label> <input type="text" name ="min">
   <label>A</label> <input type="text" name="max">

    <button name="chercher" id="button">chercher</button>
<div>
</form>

</body>
</html>

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
</script>

<?php 
session_start();

    include "db_connect.php";

    if (isset($_SESSION['id_adm']) && isset($_SESSION['email_adm']) && isset($_SESSION['nom_complet'])) {

            $myFil = $_SESSION['nom_fil'];

                if(isset($_POST['chercher'])){
               

                    if($_POST['min']!=NULL && $_POST['max']!=NULL){

                        

                        $min = $_POST['min'];
                        $max = $_POST['max'];


                        echo "<div id='table'>";

                    echo "<img src='img/est-casa-logo.jpg' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                            echo "<h2 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de la filiere ".$myFil." :";
                            echo "</h2>";


                            for($i = $min; $i<=$max; $i++){

                                $j = $i+1;

                                echo "<div class='resultat'>";

                                        echo "<h3 id='titre'>";
    
                                            echo "Annee universitaire : ";
                                            echo $i."/".$j;
            
                                        echo "</h3>";



                                echo "<table border='1' id='table1'>
                                
                                <tr><th>Sujets</th><th>Noms des etudiant</th><th>Noms des encadrants</th>";

                            $sql = "SELECT id_pfe,suj_pfe,id_enc FROM pfes WHERE annee='".$i."' AND nom_fil='".$myFil."' ";
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
                                    echo "<td>";

                                    echo "</tr>";
                                }

                                echo "</table>";

                                echo "</div>";

                            }
                            echo "</div>";

                            echo "</div>";

                            echo "<br><button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";
                    }
                    elseif($_POST['min']!=NULL && $_POST['max']==NULL){
                        
                        $min = $_POST['min'];

              

                        $min1 = $min+1;
                        echo "<div id='table'>";

                    echo "<img src='img/est-casa-logo.jpg' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                            echo "<h2 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de la filiere ".$myFil." :";
                            echo "</h2>";

                            echo "<div class='resultat'>";

                                        echo "<h3 id='titre'>";
    
                                            echo "Annee universitaire : ";
                                            echo $min."/".$min1;
            
                                        echo "</h3>";



                                echo "<table border='1' id='table1'>
                                
                                <tr><th>Sujets</th><th>Noms des etudiant</th><th>Noms des encadrants</th>";

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
                                echo "<td>";

                                echo "</tr>";
                            }

                            echo "</table>";

                            echo "</div>";

                        
                        echo "</div>";

                        echo "</div>";

                        echo "<br><button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";





                    }

                    elseif($_POST['min']==NULL && $_POST['max']!=NULL){
                        
                        $max = $_POST['max'];

                 

                        $max1 = $max+1;
                        echo "<div id='table'>";

                    echo "<img src='img/est-casa-logo.jpg' id='img' style='visibility:hidden; width:1px; height:1px;'>";

                    echo "<div id='global'>";

                            echo "<h2 style='visibility:hidden;' id='titre1'>";
                            echo "Recapitulatif des PFE's de la filiere ".$myFil." :";
                            echo "</h2>";

                            echo "<div class='resultat'>";

                                        echo "<h3 id='titre'>";
    
                                            echo "Annee universitaire : ";
                                            echo $max."/".$max1;
            
                                        echo "</h3>";



                                echo "<table border='1' id='table1'>
                                
                                <tr><th>Sujets</th><th>Noms des etudiant</th><th>Noms des encadrants</th>";

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
                                echo "<td>";

                                echo "</tr>";
                            }

                            echo "</table>";

                            echo "</div>";

                        
                        echo "</div>";

                        echo "</div>";

                        echo "<br><button onclick='makePdf()' type='button' name='pdf' id='pdf'>Voir comme PDF</button>";





                    }

                }




    }


?>