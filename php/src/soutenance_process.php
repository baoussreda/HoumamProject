<?php 
   

   include "db_connect.php";

    if(isset($_POST['enregistrer'])){

     


        


        if(isset($_POST['date']) && isset($_POST['time']) && isset($_POST['classe'])){

        //$date = $_POST['date'];
        $time = $_POST['time'];
        $classe = $_POST['classe'];
        $grp = $_POST['grp'];




        $date = str_replace('-"', '/', $_POST['date']); $newDate = date("Y/m/d", strtotime($date));
        

       $sql111 = "SELECT * FROM pfes WHERE 1";
       $result111 = $conn->query($sql111);

            while($row111=$result111->fetch_assoc()){
                /*$array1 = array();
                $array2 = array();
                $array3 = array();

               /* $array1 = $row111['date'];
                $array2 = $row111['heure'];
                $array3 = $row111['classe'];

                print_r($array1);
                print_r($array2);
                print_r($array3);*/

              
                        if(($row111['heure'] != $time) && ($row111['date'] != $date) && ($row111['classe'] != $classe)){
    
                            $sql11 = "UPDATE pfes SET date = '".$date."', heure = '".$time."', classe = '".$classe."' WHERE id_groupe = '".$grp."' ";
                            $result11 = $conn->query($sql11);
                            header('Location:soutenance.php');
                        
                        }
       
                        
        
            }

            

            
           
     
         

            

     

            



   


        //$sql11 = "UPDATE pfes SET date = '".$date."', heure = '".$time."', classe = '".$classe."' WHERE id_groupe = '".$grp."' ";

        //$result11 = $conn->query($sql11);
        

        //header('Location:soutenance.php');

        }
    }
?>
