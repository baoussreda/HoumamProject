<?php
session_start();

  $bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');

    if(isset($_POST['submit'])){

      $username=htmlspecialchars(trim($_POST['username']));
      $email=htmlspecialchars(trim($_POST['email']));
      $password=$_POST['password'];
      $repeatpassword=$_POST['repeatpassword'];


        if($username&&$email&&$password&&$repeatpassword&&($nom_fil=$_SESSION['nom_fil'])){
            $usernamelength=strlen($username);
              if($usernamelength<=100){

                }
                else $erreur="votre pseudo est trop grand";

            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
              $recemail=$bdd -> prepare("SELECT * FROM etudiant WHERE email_etu=?");
              $recemail->execute(array($email));
              $emailexiste=$recemail-> rowCount();
              if($emailexiste==0){
 
                if($password==$repeatpassword){
                    if(strlen($password)>0){
                      $HOST = "mydb";
                    $USER = "root";
                    $PASS = "";
                    $dbname ="pfe";
                    $users = "etudiant"; 
                    $base = mysqli_connect($HOST, $USER, $PASS);

                mysqli_select_db($base, $dbname);
                  $handler = mysqli_query($base, "SELECT id_etu FROM etudiant ORDER BY id_etu DESC LIMIT 1");

                  $data = mysqli_fetch_assoc($handler);
                  $id = $data['id_etu'];
                  $id = $id + 1;

                                    $annee = date("Y");
          



   $insertuser= $bdd ->prepare("INSERT INTO etudiant(id_etu,nom_complet,email_etu,password,nom_filliere,annee) VALUES(?,?,?,?,?,?)");
   $insertuser -> execute(array($id,$username,$email,$password,$nom_fil,$annee));
   $_SESSION['comptecree']="Le compte a bien ete cree";
   header('location:add_etu.php');
  }
  else { $erreur= 'password insuffisant';}
  }else {$erreur= 'les mots de passe ne sont pas identique';}
}else { $erreur="adresse deja utlise";}

  } 
  else { $erreur= "votre adresse mail n est pas valide ";}
}else{ $erreur='veuillez saisir tout les champs';}        }

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
   <div class="wrapper">
        <nav>
            
            <div class="logo">
                <img src="img/ens.png" >
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
#sub1{
  height: 0px;
  visibility: hidden;
}
#sub2{
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
  width: 40%;
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
 margin-left: 300px;
}

.user-card {
 
  display: block;
  padding: 1em;
  text-align: center;
 

}
.icon1 {
    font-size: 50px;
    justify-content: right;
    margin-left: 20px;
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


body {
      background: url('img/background.jpeg');
      min-height: 100%;

    }







  </style>

 
   
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
           <li class="normal"><a href="" class="active">Etudiant</a></li>

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
          <a href="#" onclick="sub2()">
            <span class="icon"><i class="fas fa-paperclip"></i></span>
            <span class="title">Affecter les sujets</span>
            <span id="down" class="fas fa-caret-down"></span>
          </a>
          </div>
           <ul class='sub2' id="sub2">
           <li class="normal"><a href="affect_pfe.php">Automatiquement</a></li>

           <li class="normal"><a href="affect_pfe_man.php">Manuellement</a></li>
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
 <div class="user-container">
        <div class="user-card">
            <div class="user-card-info"><img class="user-img" width="150px" src="img/etu.png" ></div>
         
            
        </div>
        <div class="info-container">
            <div class="set-edit">
                <span> Information de l'etudiant</span>
                

            </div>

            <div class="info">
              <form action="add_etu.php" method="POST" >
                <label></label>

  <?php if (isset($erreur)) { ?>
            <p class="error" align="center"><?php echo $erreur; ?></p>
        <?php } ?>
         <div class="div_info"><label class="labels"><span class="details"> Nom d'utilisateur</span></label><input type="text" id="nom1" name="username" class="#" placeholder="saisissez le nom complet"> </div>
          <div class="div_info"><label class="labels"><span class="details"> E-mail</span></label><input type="email" id="nom2" name="email" class="#" placeholder="saisissez l'E-mail"> </div>
          <div class="div_info"><label class="labels"><span class="details"> Mot de passe </span></label><input type="password" id="nom3" name="password" class="#" placeholder=" saisissez le mot de passe"> </div>
          <div class="div_info"><label class="labels"><span class="details"> Répetez le mot de passe</span></label><input type="password" id="nom3" name="repeatpassword" class="#" placeholder="répétez le mot de passe"> </div>

                <div class="set-edit">
                 <button id="edit-btn" type="submit" name="submit"class="btn"><span class="edit">Creer</span></button>
                <button id="edit-btn" class="btn" type="reset" name="reset"><span class="edit">Effacer</span></button>
                 </div>
            </form>         
            </div>
        </div>
    </div>
 </body>
 </html>

