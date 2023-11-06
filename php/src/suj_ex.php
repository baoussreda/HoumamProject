<?php
session_start();

                        $conn = mysqli_connect("mydb", "root", "", "pfe");
                        $fill = $_SESSION['nom_fil'];
                        $date=date("Y");
                        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
                        $sql = "SELECT id_pfe,suj_pfe,des_pfe FROM pfes WHERE annee=$date AND id_enc=0  AND nom_fil = '".$fill."'";
                        $sql1 = "SELECT id_enc, nom_complet FROM encadrant WHERE nom_fil = '".$fill."'";

                        $result = $conn->query($sql);
                        $result1= $conn->query($sql1);

                        $i = 0;
                        $j = 0;
                       
                        $sql4 = "SELECT suj_pfe, id_enc FROM pfes WHERE id_proposeur != 0 AND id_groupe = 0 AND id_enc!= 0 AND nom_fil = '".$fill."' ";
                        $result4 = $conn->query($sql4);
           

           if ($result1->num_rows > $result->num_rows )  {
                        
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<title>affecter sujets externes</title>
<style>

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
   padding: 8px;
    margin: -1px;
}
#logo {
  font-weight: bold;
  margin-left: 50px;
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
* {
            margin: -3px;
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

.sidebar{
  width: 20%;
  display: inline-block;
  height: 100%;
  background: #81c4eb  ;
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
  margin-left: 80px;
  position: relative;
  top: -40px;

}

.user-img  {
  height: 150px;
  width: 140px;
  border-radius: 0.5em;
  -webkit-box-shadow: 0px 1px 15px -2px white;
          box-shadow: 0px 1px 15px -2px white;
 margin-left: -30px;
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

input[type=submit] {
  width: 30%;
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
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 85%;
margin-left: 50px;
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<body >

                <div class="wrapper">
        <nav>
             
            <div class="logo">
                <img src="img/ens.png" >
            </div>
            <div style="clear: both;"></div>
            
 
        </nav>

    </div>
<script type="text/javascript">
    $(function () {
        $("#add").click(function () {
            //Reference the CheckBoxes and determine Total Count of checked CheckBoxes.
            
            var checked1 = $("#encadrants input[type=checkbox]:checked").length;
 
            if (checked1 > 1) {
                alert(" Il faut affecter à un seul encadrant.");
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
                    <a href="suj_ex.php" class="active">
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
 
     <div class="user-card">
            <div class="user-card-info"><img class="user-img" width="150px" src="img/adm.png" ></div>
  
  

        <form method="post" action="affec_ex.php">
 
<?php
               
        if ($result && $result->num_rows != 0) 
              
                {       
                echo "     <table id='les sujets'>
                                <tr>
                                <th></th>
                                <th>Sujets externes</th>
                                 <th>Description</th>
                                </tr>";	
                    while($row1 = $result->fetch_assoc()) 
                        { 

                              echo"  <tr>         
                                    <td> <input type='checkbox' value=".$row1["id_pfe"]."  name='checkbox[]'></td>
                                    <td>". $row1["suj_pfe"]."</td>
                                    <td>". $row1["des_pfe"]."</td>

                                </tr>";
                                        $i++;
                                      
                            }
                            echo "</table>";
                             echo" <br/><br/>";
                        
    



    if ($result1 && $result1->num_rows != 0) 
        {

             echo"   <table id='encadrants'>
            <tr>
                <th></th>

                <th>Encadrants</th>
            </tr>";
            while($row2 = $result1->fetch_assoc()) 
                {
                    echo "  <tr>
                    <td> <input type='checkbox' value=". $row2["id_enc"]."   name='checkbox1[]'></td>
                    <td>".$row2["nom_complet"]."</td>
                    </tr>";

                              $j++;
                        }

                            echo "</table>";

                            echo "<input type='submit' name='affect' id='add' value='Affecter le sujet à l'encadrant/>";
        } else {
                    echo "<h1>Tous les encadrants ont des sujets</h1>";
                }
              
                        
                }
                else{
                    echo "<h1>Il n y a aucun sujet externe pour l'instant</h1>";
                }
            
            }else 
                    { 
                        echo "<h1>Tous les sujets de cette filiere sont affectés aux encadrants</h1>"; 
                    }


 

      

               
                         
         


                echo "<br><br><br><br>";

                


              if ($result4 && $result4->num_rows != 0) 
                {           

                    echo "  <table>
                                <tr>
                                <th>sujet</th>
                                <th>encadrant</th>
                                </tr> ";
                    while($row4 = $result4->fetch_assoc()) 
                        {
                            $sql5="SELECT nom_complet FROM encadrant WHERE id_enc= '".$row4["id_enc"]."'";
                             $result5 = $conn->query($sql5);
                              $row5 = $result5->fetch_assoc();
                            echo"

                                <tr>         
                                    <td> ".$row4['suj_pfe']."</td>
                                    <td>" .$row5["nom_complet"]. "</td>

                                </tr>";
                                        $i++;
                                      
                            }
                            echo "</table>";
                        
                }else 

                       

                      
                        $conn->close();
                    ?>
            </table>
            
        </form>
    </body>
</html>