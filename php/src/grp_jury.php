<?php
session_start();

                        $conn = mysqli_connect("mydb", "root", "", "pfe");
                        $fill = $_SESSION['nom_fil'];
                        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
                        $sql = "SELECT id_enc,nom_complet,nom_filliere FROM encadrant WHERE id_groupe = 0 AND nom_filliere = '".$fill."'";
                        $result = $conn->query($sql);
                        ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SUJET PFE</title>
</head>


<style>
  body {
        background: url('img/background.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
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
      margin: 2px;
      padding: 20px;
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
 margin-left: -100px;
 padding: -4px;
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

input[type=submit] {
  width: 20%;
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
    margin-left: 230px;

}


.icon1 {
    font-size: 50px;
    justify-content: right;
    margin-left: 20px;
}

h1 {
    font-family: monospace;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
body {
      background: url('img/background.jpeg');
      min-height: 100%;

    }


</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<script type="text/javascript">
    $(function () {
        $("#add").click(function () {
            //Reference the CheckBoxes and determine Total Count of checked CheckBoxes.
            var checked = $("#groupe input[type=checkbox]:checked").length;
 
            if (checked > 3) {
                alert(" Il faut choisir au plus 3 jury.");
                return true;
            }
        });
    });

    </script>

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

           <li class="normal"><a href="active">Jury</a></li>
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
  <br><br><br><br>
  <br><br>
     <div class="user-card">
            <div class="user-card-info"><img class="user-img" width="150px" src="img/adm.png"></div>
        <form method="post" action="ajouter_jury .php">

 
                   
 <?php
                    
             
                      if ($result->num_rows > 0) {

                              echo "<fieldset>
  <legend> Sélectionner les encadrants</legend>
  <br>";
                                     
                            while($row = $result->fetch_assoc()) 
                            {


                                echo " 
                                <div>
                                <input type='checkbox'  id='" . $row["id_enc"]. "' name='checkbox[]' value=".$row["id_enc"].">&nbsp&nbsp&nbsp&nbsp
                                    <label for='" .$row["id_enc"]. "'>".$row["nom_complet"]."</label> </div>";
      
                            
                        }

                          echo"   </fieldset>  
            
        <input type='submit' name='add' id='add' value='Créer le groupe'>";

                    
                    }
                        else 
                            { 
                                echo "<fieldset><h1>Tous les encadrants ont des groupes</h1></fieldset>"; 
                            }
                        $conn->close();
                    ?>
     
        </form>
    </body>
</html>
