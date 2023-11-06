    

<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body  >
        <div class="wrapper">
        <nav>
           <a href="profile_adm.php"><span class="icon1"><i class="fas fa-arrow-left"></i></span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="logo">
                <img src="img/ensa.png">
            </div>
 
        </nav>

    </div>

  <style type="text/css">
    * {
  padding:0;
  margin:0;
  text-decoration: none;
  font-weight: bold;
}

body {
  background: url('img/background.jpeg');
  font-family: "Montserrat", sans-serif;
}

.container {
  height:90vh;
  width:100vh;
  margin:50px;
  display: flex;
}

section {
  height:70%;
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
  background:rgba(0,0,0,0.2);
  color:white;
  padding: 6px 90px;
}

.etudiant{
  background:url('img/etu.png');
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
  margin-left: 30vh;
  margin-right: 50vh;

}

.encadrant{
  background:url('img/stad1.png');
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply;
  margin-right: 40vh;
  margin-left: 0vh;
  padding-left: 15vh;
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
    margin:-250px;
}
#logo {
  font-weight: bold;

}
.icon1 {
    font-size: 50px;
    justify-content: left;

}


    

  </style>
    <script src="./app.js"></script>

  <div class="container">


        <section class="etudiant">
      <a href="add_etu.php"><h1>Etudiant</h1></a>
    </section>

    <section class="encadrant">
      <a href="add_enc.php"><h1>Encadrant</h1></a>
    </section>



  </div>

</body>

</html>