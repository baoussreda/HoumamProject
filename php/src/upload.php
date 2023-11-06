<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Upload</title>
  </head>
 
 
  <body background-color: black;>

  <style type="text/css">
    button[name="save"] {
        width: 150px; /* Adjust the desired width */
        height: 50px; /* Adjust the desired height */
        font-size: 18px; /* Adjust the desired font size */
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
  background: url('img/background.jpeg');
  margin: 2em 2em 0 0;
  border-radius: 0.5em;
  color: black;
  padding: 25px;
  padding-top: 1em;
  border-radius: 1em;
 margin-left: 300px;
}
input[type=file] {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
  border-radius: 5px;
}
button{
  width: 30%;
    height: 40px;
    margin:3px auto;
    justify-content: center;
    display: block;
    color: black;
    background-color:#BED5D6 ;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
    border: 0.1em solid #637E80;
   

}
h3 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
h1 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}

  </style>
  <div class="wrapper">
        <nav>
            <div class="logo">
                <img src="img/ensa.png">
            </div>
            <div style="clear: both;"></div>

        </nav>
     <style type="text/css">

* {
  padding:0;
  margin:0;
  text-decoration: none;
  font-weight: bold;
}

body {
  font-family: "Montserrat", sans-serif;
}

          nav{
            padding: 0;
            margin: 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    
}

.logo{
  
    letter-spacing: 5px;
    font-size: 20px;
}
            form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #555;
  border-radius: 5px; 
   box-shadow: 10px 20px 30px 20px #000;
}
input[type=file] {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
  border-radius: 5px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
.icon1 {
    font-size: 50px;
    justify-content: left;
}
        </style>
    </div>
    <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>Profil d'étudiant</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="profile_etu.php" ><span class="fa fa-home"></span><span>Profil</span></a>
        </li>
    <li>
      <a href="info_pfe.php">
            <span class="icon"><i class="fas fa-user-plus"></i></span>
            <span class="title">Consulter les informations</span>
          </a>
        </li>
        <li>
          <a href="upload.php" class="active">
            <span class="icon"><i class="fas fa-users"></i></span>
            <span class="title">Mettre en ligne des documents</span>
          </a>
        </li>
        <li>
          <a href="etudiant_docs.php">
            <span class="icon"><i class="fas fa-paperclip"></i></span>
            <span class="title">Mes documents</span>
          </a>
        </li>
            
        <li>
          <a href="logout.php">
            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
            <span class="title">Se deconnecter</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

    <div class="user-container">
      <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data" >
          <h3>Upload</h3>
          <br>
          <input type="file" name="myfile" title=" "><br>
          Rapport d'avancement &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="mon_champ" value="2"><br><br><br>
           Rapport final &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="mon_champ" value="1"><br><br>
           
          <button type="submit" name="save">Upload</button>
        </form>
      </div>
    </div>
  </body>
</html>