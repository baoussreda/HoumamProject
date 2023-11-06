<?php 
session_start();




if (isset($_SESSION['id_enc']) && isset($_SESSION['email_enc']) && isset($_SESSION['nom_complet'])&& isset($_SESSION['nom_fil'])) {
 $myFil = $_SESSION['nom_fil'];
 $email=$_SESSION['email_enc'];
 $nom=$_SESSION['nom_complet'];
 $id=$_SESSION['id_enc'];

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
  margin-top: 0em;
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
  font-size: 2em;
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
          <a href="profile_enc.php" class="active"><span class="fa fa-home"></span><span>Profil</span></a>
    
        <li>
          <a href="info_pfe_enc.php"><span class="fas fa-info-circle"></span><span>info</span></a>
        </li>
        <li>
          <a href="prop_sjt.php"><span class="fas fa-file-powerpoint"></span>Proposer les sujets<span></span></a>
        </li>
        <li>
          <a href="consult_doc.php"><span class="fas fa-file-alt"></span>Consulter les documentdes etudiants<span></span></a>
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
        <div class="user-card">
            <div class="user-card-info"><img class="user-img" width="150px" src="img/stad1.png"></div>
            <div class="name-mail">
                <span class="name"><?php echo  $nom; ?></span><br>
                <span class="mail"><?php echo $email; ?></span>
            </div>
            
        </div>
        <div class="info-container">
            <div class="set-edit">
                <span> Informations du profil</span>
                <button id="save-btn" class="btn" type="submit"><span class="edit">Save</span></button>

            </div>

            <div class="info">
              <form method="post">
                <div class="div_info"><label class="labels"><span class="details"> Nom complet</span></label><input
                        type="text" class="input_info" value="<?php echo $nom; ?>" readonly></div>
                <div class="div_info"><label class="labels"><span class="details">Identifiant</span></label><input
                        type="text" class="input_info"  value="<?php echo $id; ?>" readonly></div>
                <div class="div_info"><label class="labels"><span class="details">Filiere</span></label><input
                        type="text" class="input_infosss" value="<?php echo $myFil; ?>" readonly></div>
   
                <div class="div_info"><label class="labels"><span class="details">E-mail</span></label><input
                        type="text" class="input_info"  value="<?php echo $email; ?>" readonly></div>
             
              </form>          
            </div>
        </div>
    </div>
 </body>
 </html>

 <?php 
}else{
    header("Location: login_enc.php");
    exit();
}
?>