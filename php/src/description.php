<?php 
 
$bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');
$conn = mysqli_connect("mydb", "root", "", "pfe");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
foreach($_POST as $name => $content) {
        //echo "The TOURNAMENT NAME IS: $name <br>";
        $tournament = $name;
       
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

	<style type="text/css">
		body {
    margin: 0;
    padding: 0;
    height: 100%;
    min-height: 100vh;
    text-decoration: none;
    display: flex;
    flex-direction: column;
}

* {
    padding: 0px;
    margin: 0px;
    text-decoration: none;
}

.info_pfe {
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1, ,  #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
}
.wrapper {
	display: absolute;
	margin-top: 0;
	padding-top: 0;
}


.center{
    background-color: #77BDC2;
    position: absolute;
    width: 700px;
    height: 76%;
   	align-items: center;
   	align-content: center;
    top:calc(20% - 20px/2); /* height divided by 2*/
    left:calc(25% - 37px/2); /* width divided by 2*/
}
h3{
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
.info {
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1, ,  #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    font-weight: bold;
    font-family: Arial;
    font-size: 20px;
}

  nav{
    display: flex;

    align-items: center;
    min-height: 10vh;
 
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    float: right;
}
.logo{
    color: rgb(225, 225, 225);
    letter-spacing: 5px;
    font-size: 20px;
   padding: 19px;
    margin: -4px;
}
#logo {
  font-weight: bold;

}
.icon1 {
    font-size: 50px;
    justify-content: right;
    margin-left: 20px;
}

	</style>


	 	<div class="wrapper">
        <nav>
        	<a href="gestion.php"><span class="icon1"><i class="fas fa-arrow-left"></i></span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="logo">
                <img src="img/ens.png">
            </div>
 
        </nav>

    </div>


<div class="container">
	<div class="center">
		<div class="info" align="center">
			<?php
echo "<div class='info_pfe'>";
		echo "</br>";
		echo "</br>";
		echo "</br>";
 echo "La description : ";
 echo "</br>";
		echo "</br>";
		echo "</br>";
 echo $name;
    }
    ?>
    </div>
</body>
</html>







