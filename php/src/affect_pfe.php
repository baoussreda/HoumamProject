<?php
session_start();

        $conn = mysqli_connect("mydb", "root", "", "pfe");
        $fill = $_SESSION['nom_fil'];
        $annee = date("Y");
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

                        //before affectation
$sql = "SELECT DISTINCT id_groupe FROM etudiant WHERE id_groupe > 0 AND annee = $annee AND id_pfe = 0 AND  nom_filliere = '".$fill."'";
$sql1 = "SELECT id_pfe FROM pfes WHERE id_groupe = 0 AND annee = $annee AND nom_fil = '".$fill."'";
$result = $conn->query($sql);
$result1= $conn->query($sql1);

            $i = 0;
            $j = 0;

            
                ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
<title>SUJET PFE</title>
<style>

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
     *{
            margin: -3.3px;
            padding: 0;
            box-sizing: border-box;*/
        }

        

  
    nav{
    display: flex;

    align-items: center;
    min-height: 10vh;
 
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    float: right;
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
.sidebar{
  width: 20%;
  display: inline-block;
  height: 100%;
  background: #81c4eb  ;
 
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
.sidebar-menu a{
  padding-left: 1rem;
  display: block;
  color: #fff;
  font-size: 1.1rem;
}
.sidebar-menu a:hover {
  background-color: 
#629194;
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
  margin-left:-200px;
 padding: 20px;
}
#logo {
  font-weight: bold;

}
form {
  width: 50%;
  margin: 0 auto;
}
fieldset {
  background: #81c4eb;
  border: 5px solid #637E80;
  width: 50%; 
  




}
div {
  margin-bottom: 10px;
  font-size: 20px;
  color: white;
}
legend {
  padding: 8px;
  background: #637E80;
  color: white;
  font-family :Alpha Geometrique; 
  font-size: 20px;

}

input[type=submit] {
    width: 40%;
    height: 40px;
    margin:3px auto;
    justify-content: center;
    display: block;
    color: black;
    background-color:#BED5D6 ;
    font-size: 0.7em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
    border: 0.1em solid #637E80;
}
button:hover {
  background-color: #f2f2f2;
}

.user-card {
 
  display: block;
  padding: 1em;
  text-align: center;
  margin-left: 100px;

}

.user-img  {
  height: 150px;
  width: 140px;
  border-radius: 0.5em;
  -webkit-box-shadow: 0px 1px 15px -2px white;
          box-shadow: 0px 1px 15px -2px white;
  margin-left: 100px;
 padding: -4px;
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

button {
  width: 20%;
    height: 40px;
    margin:3px auto;
    justify-content: center;
    display: block;
    color: black;
    background-color:#BED5D6 ;
    font-size: 0.7em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in-out;
    cursor: pointer;
    border: 0.1em solid #637E80;
   

}


.icon1 {
    font-size: 50px;
    justify-content: right;
    margin-left: 20px;
}

h1 {
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
h3{
    font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: #374B4C;
}
h4{
     font-family:sans-serif;
    font-weight: bold;
    text-align: center;
    color: black;

}
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 60%;
margin-left: 320px;
}
th {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
background-color:#637E80 ;
background-image: url(sky.jpg);
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 10px;
text-align: center;
background-color: #81c4eb;
}
caption {
font-family: sans-serif;
background-color:#637E80 ;
}
</style>


</head>
<script src="jquery-3.5.1.min.js"></script>
<script type="text/javascript">
   function makePdf(){

    document.getElementById('img').style.visibility = 'visible';
    document.getElementById('img').style.float = 'right';
    document.getElementById('img').style.width = '30%';
    document.getElementById('img').style.height = '40px';

    document.getElementById('global').style.marginTop = '10%';;
    

    var printMe = document.getElementById('table');
    var vme = window.open("","","width:100%,height:800");
    vme.document.write(printMe.outerHTML);
    vme.document.close();

    document.getElementById('img').style.visibility = 'hidden';
    document.getElementById('img').style.height = '1px';
    document.getElementById('img').style.width = '1%';
    document.getElementById('global').style.marginTop = '0%';
    vme.focus();
    vme.print();
    
   }
   </script> 

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
   
<body>

    <div class="wrapper">
        <nav>
           
            <div class="logo">
                <img src="img/ens.png" >
            </div>
            <div style="clear: both;"></div>
            
 
        </nav>
 </div>
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
           <li class="normal"><a href="add_etu.php">Etudiant</a></li>

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
          <a href="#" class="active" onclick="sub2()">
            <span class="icon"><i class="fas fa-paperclip"></i></span>
             <span class="title" >Affecter les sujets</span>
            <span id="down" class="fas fa-caret-down"></span>
          </a>
          </div>
           <ul class='sub2' id="sub2">
           <li class="normal"><a href="active">Automatiquement</a></li>

           <li class="normal"><a href="affect_pfe_man.php" class="active">Manuellement</a></li>
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
  <br><br><br><br>
 
     <div class="user-card">
            <div class="user-card-info"><img class="user-img" width="150px" src="img/adm.png" ></div>
  

   

<?php
  $array1 = array();
if ($result1->num_rows >= $result->num_rows ){
 if ($result && $result->num_rows != 0){ 

                    echo "<form method='POST' action=''>";

                    echo "<input type='submit' name='affect' value='Affecter les sujets aux groupes'/>";

                echo"</form>";

                  

                    while($row = $result->fetch_assoc()) 
                        { 
                            $array1[] = $row;

                            $i++;
                         
                            }

                        
                }else 
                    { 
                        echo "<h1>Tous les groupes ont eux leurs sujets</h1>"; 
                    }

                if ($result1 && $result1->num_rows != 0){

                    $array2 = array();

                    while($row1 = $result1->fetch_assoc()) 
                        {    
                            $array2[] = $row1; 

                            $j++;
                        
                            }

                }else
                    {
                        echo "<h1>Tous les sujets sont affectes</h1>";
                    }

            }else{
                echo '<script>alert("Les sujets ne sont pas suffisants")</script>';
            }



            if(isset($_POST['affect'])){

        
                $array3 = array();
                $num_pfes = count($array2);

                for($i=0; $i<$num_pfes; $i++){

                    $array3[$i] = $array2[$i];
                 
            
                }
                

              
            
foreach ($array1 as $value) {



    $value1 = implode("", $value);

  
   

  
    
    shuffle($array3);

    $pfe = $array3[0];
   

    $pfe1 = implode($pfe);


    array_shift($array3);

   

    mysqli_query($conn,"UPDATE etudiant SET id_pfe = $pfe1  WHERE annee =$annee AND id_groupe = ".$value1."" )		;	
    mysqli_query($conn,"UPDATE pfes SET id_groupe = $value1 WHERE annee =$annee AND id_pfe = ".$pfe1."" );


}

                }

    



            



$sql2 = "SELECT DISTINCT id_groupe FROM etudiant WHERE id_groupe != 0 AND annee = $annee AND id_pfe != 0 AND nom_filliere = '".$fill."'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT suj_pfe FROM pfes  WHERE id_groupe != 0 AND annee = $annee AND nom_fil = '".$fill."' ORDER BY id_groupe";
$result3 = $conn->query($sql3);
                       
                

?>

<?php


        
while($row2 = $result2->fetch_assoc()) 
        {


            $annee1 = $annee+1;


               

            
                echo "<div id='table'>";

                echo "<img src='img/ens.png' id='img' style='visibility:hidden; width:1px; height:1px;'><br><br>";

                echo "<h4>Annee universitaire".$annee."/".$annee1." : </h4><br>";


                    echo "  <table class='table' id='global' border='1' cellpadding='1'>
                    <h3>Tableau récapitulatif</h3><br>
                    
                                <tr>
                                <th>groupe</th>
                                <th>Noms</th>
                                <th>&nbsp&nbsp&nbsp&nbspPFE&nbsp&nbsp&nbsp&nbsp</th>
                                <th>&nbsp&nbspencadrant&nbsp&nbsp</th>
                                </tr> ";
               

                    do{
                        echo "<tr>";

                        $row3 = $result3->fetch_assoc();
                        echo" <td> ".$row2['id_groupe']."</td>";

                        echo "<td>";

                        $sql4 = "SELECT nom_complet FROM etudiant WHERE id_groupe= ".$row2['id_groupe']."";
                        $result4 = mysqli_query($conn, $sql4);
                    
                            while($row4 = $result4->fetch_assoc())
                                {
                                echo $row4["nom_complet"]. ",\n";
                                }
                            

                        echo "</td>
                        <td>" .$row3['suj_pfe']."</td>";

                        $sql5 = "SELECT id_enc FROM pfes WHERE annee = $annee AND id_groupe = '" .$row2['id_groupe'] ."' AND nom_fil = '".$fill."'"; 
                        $result5 = $conn->query($sql5);

                        while($row5 = $result5->fetch_assoc())
            {

            $sql6 = "SELECT nom_complet FROM encadrant WHERE id_enc=".$row5['id_enc']."";
            $result6 = $conn->query($sql6);

            if($result6){

            $row6 = $result6->fetch_assoc();
                    echo "<td>";
                    echo $row6['nom_complet'];
                    echo "</td>";
            }
}
echo "</tr>";

                    }while($row2 = $result2->fetch_assoc());

                    echo "</table>";

                    echo "</div>";

                    echo"<button onclick='makePdf()' type='button' >Voir comme PDF</button>";
                
              }             
                           
                                              
                        $conn->close();
                    ?>
            </table>
            
        </form>
    </body>
</html>

<?php 

   if(isset($_POST['affect'])){
        $annee = date("Y");
        
                $num_grps = count($array1);
                $num_pfes = count($array2);
        
            $array3 = array();
            $array4 = array();
        
        
        
        
        while (!empty($array1)) 
        {
            do {   
            $groupe = rand(1,$num_grps);
        
        }while(in_array($groupe, $array3));
        
            do {   
            $pfe = rand(1,$num_pfes);
        
        }while(in_array($pfe, $array4));
        
            
        
            
            
            $array3[] = $groupe;
            $array4[] = $pfe;
            echo $groupe;
            echo $pfe;
            
        
            mysqli_query($conn,"UPDATE etudiant SET id_pfe = $pfe  WHERE annee =$annee AND id_groupe = ".$groupe."" )		;	
            mysqli_query($conn,"UPDATE pfes SET id_groupe = $groupe WHERE annee =$annee AND id_pfe = ".$pfe."" )		;
        
            unset($array1[$groupe]);
            unset($array2[$pfe]);
        
        
        
        
        }
            
        
        
            }
        
        
?>