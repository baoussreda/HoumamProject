<?php


    $bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');

        if(isset($_POST['submit'])){

            $titre=htmlspecialchars(trim($_POST['titre']));
            $description=htmlspecialchars(trim($_POST['description']));
            $fil = $_POST['mon_champ'];
            $date=date("Y");
          

                if($titre&&$description&&$fil){
                    
        
                                        $HOST = "mydb";
                                        $USER = "root";
                                        $PASS = "";
                                        $dbname ="pfe";
                                        $users = "sujet"; 
                                        $base = mysqli_connect($HOST, $USER, $PASS);

                                mysqli_select_db($base, $dbname);
                                $handler = mysqli_query($base, "SELECT id_suj FROM sujet ORDER BY id_suj DESC LIMIT 1");

                                    $data = mysqli_fetch_assoc($handler);
                                    $id = $data['id_suj'];
                                    $id = $id + 1;

   $insertuser= $bdd ->prepare("INSERT INTO sujet(id_suj,sujet,des_suj,annee,fil_suj) VALUES(?,?,?,?,?)");
   $insertuser -> execute(array($id,$titre,$description,$date,$fil));

   header('location:suj.php');
  
}else{ $erreur='veuillez saisir tout les champs';}        }

?> 




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="img/bg3.jpg">

		<style type="text/css">
		
 body {
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
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

.main {
    width: 50%;
    height: 100%;
    background: linear-gradient(to bottom, #E9EAEB, #C2CDD1, ,  #ADBDC4);
    border-radius: 10px;
    box-shadow: 10px 20px 30px 20px #000;
    display: flex;
    justify-content: center;
}
input[type=radio]{
    margin: 10px;
   height: 20px;
   width: 20px;
}
#logo {
  font-weight: bold;
}
table{
    align-items: center;
    align-content: center;
    justify-content: center;
    text-align: center;
    align-self: center;
    margin-left: 240px;

}


.login {
    position: relative;
    width: 100%;
    height: 100%;   
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

input{
    width: 60%;
    height: 20px;
    background-color: #;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border:none;
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
    background-color: #2E393D;
}

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

	</style>

	

	<div class="main">  
        <div class="login">

            <form action="suj.php" method="POST" >
                <label></label>

  <?php if (isset($erreur)) { ?>
            <p class="error" align="center"><?php echo $erreur; ?></p>
        <?php } ?>
                <textarea placeholder="titre du sujet" id="description1" cols="30" name="titre"></textarea>
    			<textarea placeholder="Description du sujet" id="description" cols="30" name="description"></textarea>
                <table>
                 <tr> <td><input type="radio" name="mon_champ" value="ge">ge</td> <td> <input type="radio" name="mon_champ" value="gi">gi </td>
                    <td> <input type="radio" name="mon_champ" value="gi">gi </td>
                <td><input type="radio" name="mon_champ" value="gp">gp </td>
                <td> <input type="radio" name="mon_champ" value="tm">tm </td>
                <td> <input type="radio" name="mon_champ" value="tc">tc </td><td><input type="radio" name="mon_champ" value="gea">gea</td></tr>
</table>

                <button type="submit" name="submit">Envoyer</button>
                <button name="reset" type="reset">Effacer</button>
            </form>
        </div> 
    </div>
</body>
</html>
</body>
</html>