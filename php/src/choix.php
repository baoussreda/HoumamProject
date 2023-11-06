<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body>

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

.container {
  height:100vh;
  display: flex;
}

section {
  height:100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex:1;
  transition: all .5s;
}

section:hover {
  flex:2;
}

section h1 {
  background:rgba(0,0,0,0.6);
  color:white;
  padding: 12px 32px;
}

.etudiant{
  background:url('img/etu.jpg') #C3D0D5;
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
}

.encadrant{
  background:url('img/enc.jpg') #C3D0D5;
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
}

.administrateur{
  background:url('img/adm.jpg') #C3D0D5;
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}

.logo{
    color: rgb(225, 225, 225);
    letter-spacing: 5px;
    font-size: 20px;
}

.nav-links{
    display: flex;
    justify-content: space-around;
    width: 35%;
}

.nav-links li{
    list-style: none;
}

.nav-links a{
    color: black;
    letter-spacing: 2px;
    text-decoration: none;
}

.burger{
    display: none;
}

.burger div{
    width: 27px;
    height: 3px;
    background-color:  rgb(225, 225, 225);
    margin: 5px;
    transition: all 0.3s ease;
}

.content img{
    height: 90vh;
    width: 100%;
}

@media (max-width:1024px){
    .nav-links{
        width: 50%;
    }
}

@media (max-width:768px){
    .wrapper{
        overflow-x: hidden;
        position: relative;
    }
    
    .nav-links{
        position: absolute;
        right: 0px;
        height: 90vh;
        top: 10vh;
        background-color: #3E6A80;
        flex-direction: column;
        align-items: center;
        justify-content:space-evenly;
        width: 50%;
        transform: translateX(100%);
        transition: transform 0.4s ease-in;
        display: flex;
    }

    .nav-links li{
        opacity: 0;
    }

    .burger{
        display: block;
        cursor: pointer;
    }

    .content img{
        object-fit: cover;
    }
}

.nav-active{
    transform: translateX(0%);
}

.burgeranimation .line1{
    transform: rotate(-45deg) translate(-5px);
}

.burgeranimation .line2{
    display: none;
}

.burgeranimation .line3{
    transform: rotate(45deg) translate(-5px);
}

@keyframes navlinkfade{
    from{
        opacity: 0;
        transform: translateX(50px);
    }
    to{
        opacity: 1;
        transform: translateX(0px);
    }
    
}
	</style>


     <div class="wrapper">
        <nav>
            <a href="profile_adm.php"><span class="icon1"><i class="fas fa-arrow-left"></i></span></a>
            <div class="logo">
                <img src="img/logo.png">
            </div>
 
        </nav>

    </div>
	 
    <script src="./app.js"></script>

  <div class="container">

    <section class="etudiant">
      <a href="login_etu.php"><h1>Etudiant</h1></a>
    </section>

        <section class="administrateur">
      <a href="login_adm.php"><h1>Administrateur</h1></a>
    </section>

    <section class="encadrant">
      <a href="login_enc.php"><h1>Encadrant</h1></a>
    </section>



  </div>

</body>

</html>