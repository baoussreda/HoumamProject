<?php 
session_start();


?>

<!DOCTYPE html>
<html>
    <head>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="print" href="print.css" />

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

.logo{
    color: rgb(225, 225, 225);
    letter-spacing: 5px;
    font-size: 20px;
  margin-left:-200px;
 padding: 20px;
}
#logo {
  font-weight: bold;

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
*{
            margin: -0px;
            padding: -200px;
            box-sizing: border-box;*/
        }

        body {
            min-height: 100%;

        }


        #profile {
            margin-left: -7px;
        }

    nav{
    display: flex;

    align-items: center;
    min-height: 10vh;
 
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    float: right;
}
.sidebar{
  width: 21%;
  display: inline-block;
  height: 100%;
  background: #81c4eb  ;
 padding: -20px;
 margin: -92px;
 margin-left: -45px;
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

button{
  width: 10%;
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
    margin-left: 700px;

}
input[type=submit]{
width: 100%;
    height: 20px;
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
h3 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
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
caption {
font-family: sans-serif;
background-color:#637E80 ;
}


#etudiant{
    width: 30%;
}

body {
      background: url('img/background.jpeg');
      min-height: 100%;

    }


        </style>



  <body >

                <div class="wrapper">
        <nav>
           
                <img src="img/ens.png" >
            </div>
            <div style="clear: both;"></div>
            
 
        </nav>

    </div>
> <script>
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
                    <a href="suj_ex.php" >
                        <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                        <span class="title">Sujets externes </span>
                    </a>
                </li>

        <li class="normal">
                    <a href="soutenance.php" class="active">
                        <span class="icon"><i class="fa fa-clipboard"></i></span>
                        <span class="title">Soutenance</span>
                    </a>
                </li>
       
       <li class="normal">
                    <a href="recap_adm.php">
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
     

<?php 
    

    include "db_connect.php";

    $myFill = $_SESSION['nom_fil'];
    $date = date("Y");

    $sql = "SELECT id_groupe,annee FROM pfes WHERE classe = '0' AND id_groupe!=0 AND nom_fil = '".$myFill."' AND annee='".$date."' ORDER BY id_groupe ";
    $result = $conn->query($sql);

    if($result && $result->num_rows!=0){


    echo "<table id ='ana' border='1'><tr><th>Groupes</th><th>Date/Heure</th><th>Classe</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th></tr>";



    while($row = $result->fetch_assoc()){

        echo "<tr id='tr'>
            <form method='POST' action='soutenance_process.php'>
        <td>";

        echo "<input type='hidden'  name='grp' value ='".$row['id_groupe']."'>";
        echo $row['id_groupe'];

        
        echo "</td><td>";
            echo "<input type='date' name='date' >";
            echo "<input type='time' name='time'>";
        echo "</td>";
        echo "<td>
            <input type='text' name='classe' id='classe'>
        </td>
        <td>"; echo "<input type='submit' value='enregistrer' name='enregistrer'></td>
        </form>
        </tr>";
    }

    echo "</table>";
}

    

    $sql1111 = "SELECT * FROM pfes WHERE classe != '0' AND id_groupe!=0 AND  nom_fil = '".$myFill."' AND annee='".$date."' ";
    $result1111 = $conn->query($sql1111);

    if($result1111 && $result1111->num_rows!= 0){

        $annee = date("Y");
        $annee1 = $annee+1;

        echo "<div id='table'>";
        echo "<img src='img/ens.png' id='img' style='visibility:hidden; width:1px; height:1px;'><br><br>";

        echo "<h3>Annee universitaire".$annee."/".$annee1." : </h3><br>";

        echo "<table border='1' style=' width: 60%   ';'><tr><th>etudiant</th><th>jury</th><th>&nbsp&nbsp&nbspdate&nbsp&nbsp&nbsp</th><th>heure</th><th>classe</th></tr>";

        
    while($row1111 = $result1111->fetch_assoc() ){

        echo "<tr>";

        echo "<td id='etudiant'>";

        $sql2 = "SELECT nom_complet FROM etudiant WHERE id_pfe='".$row1111['id_pfe']."'";
        $result2 = $conn->query($sql2);

        while($row2 = $result2->fetch_assoc()){
            echo $row2['nom_complet'];
            echo "<br>";
        }
        echo "</td>";

        echo "<td id='jury'>";

        $sql3 = "SELECT DISTiNCT id_jury FROM encadrant WHERE id_enc='".$row1111['id_enc']."'";
        $result3 = $conn->query($sql3);

            while($row3 = $result3->fetch_assoc()){
        

                $sql4 = "SELECT nom_complet FROM encadrant WHERE id_jury = '".$row3['id_jury']."'";

                $result4 = $conn->query($sql4);

                    while($row4 = $result4->fetch_assoc()){
                        echo $row4['nom_complet'];
                        echo "<br>";
                    }
            }
            echo "</td>";

            echo "<td width=20%>";

            echo $row1111['date'];

            echo "</td>";

            echo "<td>";

            echo $row1111['heure'];

            echo "</td>";

            echo "<td>";

            echo $row1111['classe'];

            echo "</td>";


    }
    echo "</tr>";

    
    echo "</table>";
    echo"</div>";echo"<button onclick='makePdf()' type='button' >Voir comme PDF</button><br>";
    }
    
    

    

?>
   

    </body>

    <script>
    function makePdf(){



    document.getElementById('img').style.visibility = 'visible';
    document.getElementById('img').style.float = 'right';
    document.getElementById('img').style.width = '30%';
    document.getElementById('img').style.height = '40px';


    var printMe = document.getElementById('table');
    var vme = window.open("","","width:100%,height:800");
    vme.document.write(printMe.outerHTML);
    vme.document.close();


    document.getElementById('img').style.visibility = 'hidden';
    document.getElementById('img').style.height = '1px';
    document.getElementById('img').style.width = '1%';


    vme.focus();
    vme.print();
        }
    </script>

</html>

