<?php 
session_start();
include "db_connect.php";

$id_enc = $_SESSION['id_enc'];
$annee = date("Y");


//$id_pfe = $_SESSION['id_pfe'];
//$my_username = $_SESSION['nom_complet'];

if (isset($_SESSION['id_enc']) && isset($_SESSION['email_enc']) && isset($_SESSION['nom_complet'])) {

?>

<?php

   


    
        //echo "</br>";
        /*echo "</br>";
       do{
        echo "</br>";
        echo "</br>";
        echo "</br>";
        $sql1 = "SELECT nom_complet FROM etudiant WHERE id_pfe= ".$row['id_pfe']."";
        $result1 = mysqli_query($conn, $sql1);
 
       echo $row['suj_pfe'];
       echo "</br>";

    while ($row1 = $result1->fetch_assoc()){
        echo $row1["nom_complet"]. ",\n";
    }

}while ($row = $result->fetch_assoc());


    //$sql3 = "SELECT nom_complet FROM encadrant WHERE id_enc = ".$row2['id_enc']."";

        //$result3 = mysqli_query($conn, $sql3);
        //$row3 = $result3->fetch_assoc();*/
        


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
 <body >

    <div class="wrapper">
        <nav>
            
            <div class="logo">
                <img src="img/ensa.png" >
            </div>
            <div style="clear: both;"></div>
 
        </nav>

    </div>

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
          <a href="info_pfe_enc.php" class="active"><span class="fas fa-info-circle"></span><span>info</span></a>
        </li>
        <li>
          <a href="prop_sjt.php"><span class="fas fa-file-powerpoint"></span>Proposer les sujets<span></span></a>
        </li>
        <li>
          <a href="consult_doc.php"><span class="fas fa-file-alt"></span>Consulter les document des etudiants<span></span></a>
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

   
  <div class="user-container">
        <?php 
         $sql = "SELECT id_pfe,suj_pfe FROM pfes WHERE id_enc = '$id_enc' AND annee = '".$annee."' ";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
        $annee1 = $annee-1;
        echo "<div id='annee'>";
            echo "<div class='univ'>";
        echo "annee universitaire ".$annee1."/"."$annee"." : ";
            echo "</div>";
        echo"</br>";
    
            echo "  <table border='1' style='width: 70%; color:black;'>
            <tr>
            <th>Nom du sujet</th>
            <th>Nom des etudiants</th>
            </tr>";

            do{
                $sql1 = "SELECT nom_complet FROM etudiant WHERE id_pfe= ".$row['id_pfe']."";
                $result1 = mysqli_query($conn, $sql1);
                echo "<tr><td>";
                echo $row['suj_pfe'];
                echo "</td>";
                echo "<td>";
                while ($row1 = $result1->fetch_assoc()){
                    if(!empty($row1)){
                    echo $row1["nom_complet"]. "<br>";
                    }
                    else {
                        echo "*sdfgsdf";
                    }
                }
                

                echo "</td>";
                echo "</tr>";
            }while($row = $result->fetch_assoc());

            echo "<table>";
            
            echo "</div>";
            
        ?>

        <?php 

        $annee = date("Y");
            $sql2 = "SELECT * FROM pfes WHERE annee = '".$annee."' AND id_enc = '".$_SESSION['id_enc']."' AND classe!='0' ";
            $result2 = $conn->query($sql2);

            if($result2 && $result2->num_rows!=0){

                echo "<br><br>";

                echo "<div class='univ'>Soutenance : </div>";
                
              echo "  <br><br><table border = '1'><tr><th>sujet</th><th>date</th><th>heure</th><th>classe</th><tr>";
         

            while($row2 = $result2->fetch_assoc()){

                echo "<tr>";

                echo "<td style='width: 30%'>";
                    echo $row2['suj_pfe'];
                echo "</td>";

                echo "<td style='width: 20%'>";
                echo $row2['date'];
                echo "</td>";

               echo "<td style='width: 20%'>";
               echo $row2['heure'];
               echo "</td>";

               echo "<td style='width: 10%'>";
               echo $row2['classe'];
               echo "</td>";

      


               $sql3 = "SELECT id_jury FROM encadrant WHERE id_enc = '".$row2['id_enc']."'";
               $result3 = $conn->query($sql3);

            }

                
               echo "</tr>";

            echo "</table>";
        }



        ?>
    
<?php 
    }
    else{
        header('Location:login_enc.php');
    }
?>

        <button>
</body>
</html>