<?php 

include 'db_connect.php';
include 'profile_jury.php';

$my_id = $_SESSION['id_jury'];

  if (isset($_SESSION['id_jury']) && isset($_SESSION['mail_jury']) && isset($_SESSION['password'])) {

      if(isset($_POST['1']) && isset( $_POST['12']) && isset($_POST['13'])){
        $nfin1=($_POST['1']+ $_POST['12']+$_POST['13'])/3;

          $sql30 = "UPDATE pfes SET note_rapport = $nfin1  WHERE id_pfe = ".$pfe."";
          $result30 = mysqli_query($conn, $sql30);
          $sql="UPDATE document SET n_flag = '1'  WHERE id_pfe = ".$pfe." AND type_doc='1'";
          $result = mysqli_query($conn, $sql);

      }
      if(isset($_POST['2']) && isset($_POST['22']) && isset($_POST['23'])){
    $nfin2=($_POST['2']+$_POST['22']+$_POST['23'])/3;
          $sql31 = "UPDATE pfes SET note_rapport = $nfin2  WHERE id_pfe = ".$pfe1."";
          $result31 = mysqli_query($conn, $sql31);

      }else{}
      if(isset($_POST['3']) && isset($_POST['32']) && isset($_POST['33']) ){
 $nfin3=($_POST['3']+$_POST['32']+$_POST['33'])/3;
          $sql32 = "UPDATE pfes SET note_rapport =  $nfin3 WHERE id_pfe = ".$pfe2."";
          $result32 = mysqli_query($conn, $sql32);

      }
      if(isset($_POST['4']) && isset($_POST['42']) && isset($_POST['43'])){
 $nfin4=($_POST['4']+$_POST['42']+$_POST['43'])/3;
          $sql33 = "UPDATE pfes SET note_rapport = $nfin4 WHERE id_pfe = ".$pfe3."";
          $result33 = mysqli_query($conn, $sql33);

      }
      if(isset($_POST['5']) && isset($_POST['52']) && isset($_POST['53'])){
$nfin5=($_POST['5']+$_POST['52']+$_POST['53'])/3;
          $sql34 = "UPDATE pfes SET note_rapport = $nfin5  WHERE id_pfe = ".$pfe4."";
          $result34 = mysqli_query($conn, $sql34);

      }
      if(isset($_POST['6']) && isset($_POST['62']) && isset($_POST['63'])){
$nfin6=($_POST['6']+$_POST['62']+$_POST['63'])/3;
          $sql35 = "UPDATE pfes SET note_rapport = $nfin6  WHERE id_pfe = ".$pfe5."";
          $result35 = mysqli_query($conn, $sql35);

      }


      header('location:profile_jury.php');
    
  }

  ?>