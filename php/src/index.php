<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title></title>
  <style type="text/css">
    * {
      
      padding: 0;
      margin: 0;
      text-decoration: none;
      font-weight: bold;
    }

    body {
      font-family: "Montserrat", sans-serif;
      while: 100px;
      background: url('img/background.jpeg');
    }

    .container {
      height: 60vh;
      align: center;
      margin-top : 40px ;
      display: flex;
      width: 195vh;
    }
    
 

    section {
      height: 70%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1;
      transition: all .5s;
    }

    section:hover {
      flex: 4;
    }

    section h1 {
      background: rgba(0, 0, 0, 0.1);
      color: white;
      padding: 6px 25px;

    }

    .etudiant {
      background: url('img/etu.png');
      background-position: center;
      background-size: cover;
      background-blend-mode: multiply;
      
    }

    .encadrant {
      background: url('img/modif_enc.png');
      background-position: left;
      background-size: cover;
      background-blend-mode: multiply;
    }


    .administrateur {
      background: url('img/modif_adm.png');
      background-position: center;
      background-size: cover;
      background-blend-mode: multiply;
    }

    .jury {
      background: url('img/jury2o.png');
      background-position: center;
      background-size: cover;
      background-blend-mode: multiply;
    }
    .proposition {
      background: url('img/modif_suj.png');
      background-position: center;
      background-size: cover;
      background-blend-mode: multiply;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }



    

    .logo {
      color: rgb(225, 225, 225);
      letter-spacing: 10px;
      font-size: 90px;
      margin-left: 1200px;
    }
    #logo {
      font-weight: bold;
    }

  </style>

  <div class="wrapper">
    <nav>

      <div class="logo">
        <img src="img/ensa.png">
      </div>
   </nav>
    
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

    <section class="proposition">
      <a href="prp_sjt_ext.php"><h1>Proposer sujets</h1></a>
    </section>


  </div>

</body>

</html>
