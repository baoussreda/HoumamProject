<?php


    $bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');

        if(isset($_POST['submit'])){

            $titre=htmlspecialchars(trim($_POST['titre']));
            $description=str_replace(" ","&nbsp;",$_POST['description']);
            $nom=htmlspecialchars(trim($_POST['username']));
            $mail=htmlspecialchars(trim($_POST['email']));
            $statut=htmlspecialchars(trim($_POST['statut']));
            $nom_entreprise=htmlspecialchars(trim($_POST['nom_entreprise']));
            $fil = $_POST['mon_champ'];
            $date=date("Y");
          

                if($titre&&$description&&$fil&&$nom&&$mail&&$statut&&$nom_entreprise){
                    
        
                                        $HOST = "mydb";
                                        $USER = "root";
                                        $PASS = "";
                                        $dbname ="pfe";
                                        $users = "sujet"; 
                                        $base = mysqli_connect($HOST, $USER, $PASS);

                                mysqli_select_db($base, $dbname);
                                $handler = mysqli_query($base, "SELECT id_ex FROM inter_ex ORDER BY id_ex DESC LIMIT 1");

                                    $data = mysqli_fetch_assoc($handler);
                                    $id = $data['id_ex'];
                                    $id = $id + 1;


   $insertuser= $bdd ->prepare("INSERT INTO inter_ex(id_ex,nom_complet,statut,nom_entr,email,year) VALUES(?,?,?,?,?,?)");
   $insertuser -> execute(array($id,$nom,$statut,$nom_entreprise,$mail,$date));

$insertuser1= $bdd ->prepare("INSERT INTO suj_ex(sujet,des_suj,annee,fil_suj,id_ex) VALUES(?,?,?,?,?)");
   $insertuser1 -> execute(array($titre,$description,$date,$fil,$id));
   header('location:prp_sjt_ext.php');
  
}else{ $erreur='veuillez saisir tout les champs';}        }

?> 




<!DOCTYPE html>
<html>
<head>
    <title>Proposer</title>
</head>



        <style type="text/css">

        html{
     height: 100%;
     overflow-x: hidden;
   }
.icon1 {
    font-size: 80px;
    justify-content: right;
    margin-left: 20px;
}
   *{
  padding: 0;
  margin: 0;

  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: 'Montserrat';
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
  width: 50%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-color:#81c4eb;
  margin: 2em 2em 0 0;
  border-radius: 0.5em;
  color: white;
  padding: 25px;
  padding-top: 1em;
  border-radius: 1em;
 margin-left: 100px;
}

.user-card {
 
  display: block;
  padding: 1em;
  text-align: center;
 

}

.user-img  {
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
  margin-top: 1em;
  padding: 1em;
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
button {
    width: 50%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background-color: #367D8E;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;h
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
}

button:hover {
    background-color: #254E58;
}

input {
   justify-content: center;
  background-color: white;
  height: 2em;
   width: 60%;
  outline: none;
  font-size: 1em;
  color: black;
  margin: 1em;
   display: flex;
  margin-bottom: 0;
  border: none;
  text-align: center;
  border: #1F1E2C;
  border-radius: 0.5em;
  padding: 10px;
  margin-left: 120px;
   font-weight: bold;
}
input{
    width: 60%;
    height: 2em;
    background-color: white;
    justify-content: center;
    display: flex;
   margin: 1em;
    padding: 10px;
    border:none;
    outline: none;
    border-radius: 5px;

}
textarea {
  background-color: white;
 
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
.main {
    width: 400px;
    height: 470px;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1, ,  #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
}




.login {
    position: relative;
    width: 100%;
    height: 100%;   
}








<!--  body {
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    background-color: black;
    background: url('img/background.jpeg');
}

* {
    padding: 0px;
    margin: 0px;
    text-decoration: none;
}

.main {
    width: 50%;
    height: 100%;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1, ,  #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
}




button {
    width: 50%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background-color: #367D8E;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
}

button:hover {
    background-color: #254E58;
}

/*-----------------------login error message---------------*/

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 40%;
   border-radius: 5px;
   margin: 20px auto;
}


input[type=radio]{
    margin: 10px;
   height: 20px;
   width: 20px;
}

table{
    align-items: center;
    align-content: center;
    justify-content: center;
    text-align: center;
    align-self: center;
    margin-left: 30%;

}
#titre{
    margin-left:25%;
    border-radius: 10px;
    width: 50%;
    text-align: center;
    font-weight: bold;

}



label {
    color: black;
    font-weight: bold;
    font-family: Arial;
    font-size: 2.1em;
    justify-content: center;
    display: flex;
    margin-top: 0px;
    margin-bottom: 20px;
    padding-top: 0px;
    padding-bottom: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
    background-color: linear-gradient(#C2CDD1, ,);
}

#logo {
  font-weight: bold;
  width: 70px;
  background-color:#367D8E ;
  text-align: center;
  height: 25px;
}*/


#description1 {
    width: 94%;
    margin-left: 20px ;
    resize: vertical; 
    justify-content: center;
    min-height: 150px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    font-size: 2em;
}


#description {
    width: 94%;
    margin-left: 20px ;
    resize: vertical; 
    justify-content: center;
    min-height: 300px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
}
h2 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100%;

    }

    </style>
  <body>

  <div class="wrapper">
   <div class="wrapper">
        <nav>
            <div class="logo">
                <img src="img/ensa.png" >
            </div>
            <div style="clear: both;"></div>
 
        </nav>

    </div>
    
<div class="user-container">
        <div class="user-card">
            <div class="user-card-info"><img class="user-img" width="150px" src="img/int.png" ></div>
         
            
        </div>
        <div class="info-container">
            <div class="set-edit">
                <span> <h2> informations de l'intervenant externe</h2></span>
             </div>

            <div class="info">

            <form action="prp_sjt_ext.php" method="POST" >
                <label></label>

  <?php if (isset($erreur)) { ?>
            <p class="error" align="center"><?php echo $erreur; ?></p>
        <?php } ?>
        <input  type= "text" class="#"  placeholder="nom complet" id="username"  name="username">
         <input type="email" placeholder=" votre email" id="email" class="#"  name="email" >
         <input type="text" class="#" placeholder=" votre nom d'entreprise" id="nom_entreprise"  name="nom_entreprise">
         <input type="text" class="#"  placeholder="votre statut" id="statut"  name="statut" >
        <textarea placeholder="titre du sujet " id="titre" cols="30" name="titre"></textarea>
        <textarea placeholder="description" id="description" cols="30" name="description"></textarea>
        <table>
                 <tr> <td><input type="radio" name="mon_champ" value="giia">giia</td> <td> <input type="radio" name="mon_champ" value="gi">gi </td>
                    <td> <input type="radio" name="mon_champ" value="gat">gat </td>
                <td><input type="radio" name="mon_champ" value="gpa">gpa </td>
                <td> <input type="radio" name="mon_champ" value="gtr">gtr </td>
</table>
</div>

                <div class="set-edit">
                 <button id="edit-btn" type="submit" name="submit"class="btn"><span class="edit">Creer</span></button>
                <button id="edit-btn" class="btn" type="reset" name="reset"><span class="edit">Effacer</span></button>
                 </div>
            </form>
        </div> 
    </div>
</body>
</html>
</body>