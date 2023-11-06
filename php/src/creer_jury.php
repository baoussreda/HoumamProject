<?php
session_start();

$bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');
    $conn = mysqli_connect("mydb", "root", "", "pfe");
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
    if(isset($_POST['add']))

    {


$HOST = "mydb";
$USER = "root";
$PASS = "";
$dbname ="pfe";
$users = "encadrant"; 
$base = mysqli_connect($HOST, $USER, $PASS);
$fill = $_SESSION['nom_fil'];
mysqli_select_db($base, $dbname);





            
            $selected = $_POST['checkbox'];

                $i =0;

                 $email=htmlspecialchars(trim($_POST['email']));
                 $password=$_POST['password'];

                 if (count($selected) <= 2){
                    $handler = mysqli_query($base, "SELECT id_jury FROM jury ORDER BY id_jury DESC LIMIT 1 ");
$data = mysqli_fetch_assoc($handler);
$ide = $data['id_jury'];
$ide++;
    
        foreach ($selected as $id) {
                if (isset($id)) {

                    

            mysqli_query($conn, "UPDATE encadrant SET id_jury = $ide  WHERE id_enc = ".$selected[$i]." ");



   $i++;        

   $insertuser= $bdd ->prepare("INSERT INTO jury(id_jury,mail_jury,password) VALUES(?,?,?)");
   $insertuser -> execute(array($ide,$email,$password)); 
 header('location:add_jury.php'); 

   }else{
    echo "Il faut choisir au plus 2 encadrant";

   }    

                }
        }


        
    }
      header('location:add_jury.php'); 
    
    
?>