<?php


    $bdd=new PDO('mysql:host=mydb;dbname=pfe','root','');

        if(isset($_POST['submit'])){

            $titre=htmlspecialchars(trim($_POST['titre']));
            $description=str_replace(" ","&nbsp;",$_POST['description']);
            $nom=htmlspecialchars(trim($_POST['username']));
            $mail=htmlspecialchars(trim($_POST['email']));
            $statut=htmlspecialchars(trim($_POST['statut']));
            $nom_entreprise=htmlspecialchars(trim($_POST['nom_entreprise']));
            $fil = $_POST['mon_champ'];
            $date=date("Y");
          

                if($titre&&$description&&$fil&&$nom&&$mail&&$statut&&$nom_entreprise){
                    
        
                                        $HOST = "mydb";
                                        $USER = "root";
                                        $PASS = "";
                                        $dbname ="projet";
                                        $users = "sujet"; 
                                        $base = mysqli_connect($HOST, $USER, $PASS);

                                mysqli_select_db($base, $dbname);
                                $handler = mysqli_query($base, "SELECT id_ex FROM inter_ex ORDER BY id_ex DESC LIMIT 1");

                                    $data = mysqli_fetch_assoc($handler);
                                    $id = $data['id_ex'];
                                    $id = $id + 1;


   $insertuser= $bdd ->prepare("INSERT INTO inter_ex(id_ex,nom_complet,statut,nom_entr,email,year) VALUES(?,?,?,?,?,?)");
   $insertuser -> execute(array($id,$nom,$statut,$nom_entreprise,$mail,$date));

$insertuser1= $bdd ->prepare("INSERT INTO suj_ex(sujet,des_suj,annee,fil_suj,id_ex) VALUES(?,?,?,?,?)");
   $insertuser1 -> execute(array($titre,$description,$date,$fil,$id));
   header('location:prp_sjt_ext.php');
  
}else{ $erreur='veuillez saisir tout les champs';}        }

?> 




<!DOCTYPE html>
<html>
<head>
    <title>Proposer</title>
</head>


 <div class="wrapper">
   <div class="wrapper">
        <nav>
            <a href="profile_adm.php"><span class="icon1"><i class="fas fa-arrow-left"></i></span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="logo">
                <img src="img/ens.png" >
            </div>
            <div style="clear: both;"></div>
 
        </nav>

    </div>
        <style type="text/css">
        $col-accent: #FFF;
$col-primary: #f72f4e;
$col-dark: #140228;
$formElements: 5;

$font-stack: Roboto, sans-serif;
$easer: cubic-bezier(0.4, 0, 0.2, 1);

body {
  font-family: $font-stack;
  width: 100%;
  font-size: 16px;
  margin: 0;
  padding: 0;
  background: #FAFAFA;
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
h1, h2 {
  font-weight: 700;
  color: $col-accent;
  font-weight: 700;
  font-size: 4em;
  margin: 0;
  padding: 0 20px;
}

.form-overlay {
  width: 0%;
  height: 100%;
  top: 0; left:0;
  position: fixed;
  opacity: 0;
  background: #000;

  transition: background 1s, opacity 0.4s, width 0s 0.4s;
}
.show-form-overlay {
  .form-overlay {
    width:100%;
    opacity: 0.7;
    z-index: 999;

    transition: background 1s, opacity 0.4s, width 0s;
  }
  
  &.form-submitted .form-overlay {
    background: #119DA4;
    transition: background 0.6s;
  }
}


#form-container {
  cursor: pointer;
  color: $col-accent;
  z-index: 1000;
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: 5vh;  
  background-color: $col-primary;
  overflow: hidden;
  border-radius: 50%;
  width: 60px;
  max-width: 60px;
  height: 60px;
  text-align: center;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);

  transition: all 0.2s 0.45s,
              height 0.2s $easer 0.25s, 
              max-width 0.2s $easer 0.35s, 
              width 0.2s $easer 0.35s;
  
  &.expand {
    cursor: auto;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.17);
    border-radius: 0;
    width: 70%;
    height: 610px;
    max-width: 610px;
    padding: 0;
    
    transition: all 0.2s, 
                max-width 0.2s $easer 0.1s, 
                height 0.3s ease 0.25s;
  }
}

#form-close{
  cursor: pointer;
}

//Icon toggling
.icon::before {
  cursor: pointer;
  font-size: 30px;
  line-height: 60px;
  display: block;
  transition: all 0.7s $easer;
}
.icon:hover::before{
  animation: wiggle 0.1s linear infinite;
}
.fa-pencil::before{
  display: block;
}
.fa-close::before{
  display: none;
}
.expand.fa-pencil::before {
  display: none;
}
.expand.fa-close::before{
  display: block;
  animation: none;
}

#form-content {
  font-family: $font-stack;
  transform: translateY(150%);
  width: 100%;
  opacity: 0;
  text-align: left;
  transition: transform 0.2s $easer, opacity 0.2s 0.2s;
 
  &.expand {
    transform: translateY(0px);
    opacity: 1;

    transition: transform 0.7s $easer 0.3s, opacity 0s;
  }
  
  form {
    color: $col-accent;
    width: 100%;
    height: 100%;
    padding: 0 20px 20px 20px;
    margin-bottom: 10px;
    box-sizing: border-box;
    text-align: left;
  }
}

#form-head {
  font-size: 100%;
  padding: 0;
  margin: 0 20px;
  color: $col-accent;
  text-align: center;
  transition: all 0.8s 0.6s;
  
  h1, p {
    padding: 0;
    margin: 0;
  }
  .pre {
    display: block;
  }
  .post {
    display: none;
  }
}

.form-submitted#form-head {
  transform: translateY(250%);
  .pre {
    display: none;
  }
  .post {
    display: block;
  }
} 

.input {
  background: rgba(0,0,0,0.2);
  display: block;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  padding: 0 10px;
  border-width: 0;
  box-sizing: border-box;
  border: none;
  outline: none;
  box-shadow: none;
  transform: translateX(0);
}
::-webkit-input-placeholder {/* Safari, Chrome and Opera */
  color: rgba(255,255,255,0.8);
  font-size: 90%;
}/* Firefox 18- */:-moz-placeholder {
  color: rgba(255,255,255,0.8);
  font-size: 90%;
}/* Firefox 19+ */::-moz-placeholder {
  color: rgba(255,255,255,0.8);
  font-size: 90%;
}/* IE 10+ */:-ms-input-placeholder {
  color: rgba(255,255,255,0.8);
  font-size: 90%;
}/* Edge */::-ms-input-placeholder {
  color: rgba(255,255,255,0.8);
  font-size: 90%;
}/* Default */:placeholder-shown {
  color: rgba(255,255,255,0.8);
  font-size: 90%;
}

input, select, textarea{
    color: $col-accent;
}

.input.message {
  resize: none;
  height: 150px;
  padding: 10px;
}

.input.submit{
  background-color: $col-accent;
  color: $col-primary;
  font-size: 120%;
  height: 80px;
  box-shadow: 0 5px rgba(0,0,0,0.5);
  transition: all 0.1s, transform 0s 0.6s;

  &:active{
    margin-top: 15px;
    box-shadow: 0 0 rgba(0,0,0,0.5);
  }
}

.input.form-error{
  animation: error 0.8s ease;
  background: rgba(0,0,0,0.7);
}


select option {
  background: $col-primary;
  color: $col-accent;
  border: none;
  box-shadow: none;
  outline: none;
}
select option:disabled {
  font-style: italic;
  color: rgba(255,255,255,0.9);
  font-size: 90%;
}

//Handle input submit and return transitions last.
.input{
  transition: transform 0s 1s;
}
.form-submitted .input{
  transform: translateX(150%);
  opacity: 0;
  transition: all 0.5s, transform 0.4s $easer 0s;
  
  @for $i from 1 to ($formElements + 1) {
    &:nth-child(#{$i}) {
      transition-delay: #{$i / 10}s;
    }
  }
}
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px #FFF inset;
}

@media (max-width: 600px) {
  #form-container.expand {
    height: 100%;
    width: 100%;
    max-width: 100%;
    overflow: initial;
    overflow-x: hidden;
    bottom: 0;
  }  
  h1 {
    font-size: 300%;
  }
  .icon:hover::before{
    animation: none;
  }
  .form-overlay {
    display: none;
    transition: none;
  }
}
table{
    align-items: center;
    align-content: center;
    justify-content: center;
    text-align: center;
    align-self: center;
    margin-left: 30%;

}

@keyframes error {
    0%, 100% {transform: translateX(0);}
    10%, 30%, 50%, 70%, 90% {transform: translateX(-6px);}
    20%, 40%, 60%, 80% {transform: translateX(6px);}
}

@keyframes wiggle {
    0%, 100% {transform: rotate(-15deg);}
    50% {transform: rotate(15deg);}
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 40%;
   border-radius: 5px;
   margin: 20px auto;
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
    background-color: #632626;
}
.icon1 {
    font-size: 50px;
    justify-content: right;
    margin-left: 20px;
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

 </style>
  <script>
    var formContainer = $('#form-container');

bindFormClick();
//Opening the form
function bindFormClick(){
  $(formContainer).on('click', function(e) {
    e.preventDefault();
    toggleForm();
    //Ensure container doesn't togleForm when open
    $(this).off();
  });
}

//Closing the form
$('#form-close, .form-overlay').click(function(e) {
  e.stopPropagation();
  e.preventDefault();
  toggleForm();
  bindFormClick();
});

function toggleForm(){
  $(formContainer).toggleClass('expand');
  $(formContainer).children().toggleClass('expand');
  $('body').toggleClass('show-form-overlay');
  $('.form-submitted').removeClass('form-submitted');
}

//Form validation
$('form').submit(function() {
  var form = $(this);
  form.find('.form-error').removeClass('form-error');
  var formError = false;
  
  form.find('.input').each(function() {
    if ($(this).val() == '') {
      $(this).addClass('form-error');
      $(this).select();
      formError = true;
      return false;
    }
    else if ($(this).hasClass('email') && !isValidEmail($(this).val())) {
      $(this).addClass('form-error');
      $(this).select();
      formError = true;
      return false;
    }
  });
  
  if (!formError) {
    $('body').addClass('form-submitted');
    $('#form-head').addClass('form-submitted'); 
    setTimeout(function(){
      $(form).trigger("reset");
    }, 1000);
  }
  return false;
});

;

  </script>
  <div class='form-overlay'></div>
<div class='icon fa fa-pencil' id='form-container'>
  <span class='icon fa fa-close' id='form-close'></span>
  <div id='form-content'>
    <div id='form-head'>
      <h1 class='pre'>Intervenant externe</h1>
      <p class='pre'>Good Subject...</p>
      <h1 class='post'>Thanks!</h1>
      <p class='post'>I'll be in touch ASAP</p>
    </div>
    <form action="prp_sjt_ext.php" method="POST">
        <?php if (isset($erreur)) { ?>
            <p class="error" align="center"><?php echo $erreur; ?></p>
        <?php } ?>
      <input class='input name' name='username' placeholder=' votre nom complet' type='text'>
      <input class='input email' name='email' placeholder='Votre email' type='text'>
        <input class='input name' name='nom_entreprise' placeholder=' votre nom d entreprise' type='text'>
        <input class='input name' name='statut' placeholder=' votre statut' type='text'>
         <textarea  class='input message' placeholder="titre du sujet " id="titre" cols="30" name="titre"></textarea>
          <textarea class='input message' placeholder="description" id="description" cols="30" name="description"></textarea>
           <table>
                 <tr> <td><input type="radio" name="mon_champ" value="ge">gii</td> <td> <input type="radio" name="mon_champ" value="gi">gi </td>
                    <td> <input type="radio" name="mon_champ" value="gi">ga </td>
                <td><input type="radio" name="mon_champ" value="gp">gpma </td>
                <td> <input type="radio" name="mon_champ" value="tm">gtr</td>
                </tr>
</table>

          <input class='input submit' type='submit' value='Send Message'>
    </form>
  </div>
</div>
</body>
</html>
</body>
