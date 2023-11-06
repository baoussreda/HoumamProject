<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="wrapper">
        <nav>
            <div class="logo">
                <img src="img/ensa.png" style=" margin-left: 900px;">
            </div>
 
        </nav>

    </div>

   <style type="text/css">
       
       body {
    margin: 0;
    padding: 6;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    background: url('img/background.jpeg');
    

}

* {
    padding: 0px;
    margin: 0px;
    text-decoration: none;


}

.main {
    width: 400px;
    height: 400px;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1, ,  #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
    background: url('img/background.jpeg');
    padding-bottom: 2px;
    

}
.login {
    position: relative;
    width: 100%;
    height: 100%;   
}

label {
    color: #6f9294;
    font-weight: bold;
    font-family: Arial;
    font-size: 2.1em;
    justify-content: center;
    display: flex;
    margin-top: 0px;
    margin-bottom: 25px;
    padding-top: 0px;
    padding-bottom: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
    background-color: linear-gradient(#C2CDD1, ,);
}

input{
    width: 60%;
    height: 20px;
    background-color: #;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border:20 px;
    outline: none;
    border-radius: 5px;

}

button {
    width: 50%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background-color: #696b6b;
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
    background-color: #559be6;
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

h1 {
    text-align: center;
    color: #fff;
}

a {
    width: 50px;
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

a:hover {
    background-color: #632626;
}

   </style>
   <div class="header">
         <img src="img/adm.png"  style="width:15%; heigt:20%; margin-Left: 375px;">

        </div>



    <div class="main">  
        <div class="login">

            <form action="login_process_adm.php" method="POST" >
                <label> Se connecter </label>

  <?php if (isset($_GET['error'])) { ?>
            <p class="error" align="center"><?php echo $_GET['error']; ?></p>
        <?php } ?>

                <input type="email" id="email" name="email" class="#" placeholder="Votre E-mail">
                <input type="password" name="password" id="password" class="#" placeholder="Votre mot de passe">
                <button name="valider" type="submit">Se connecter</button>
            </form>
        </div> 
    </div>

</body>
</html>