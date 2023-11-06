<?php
session_start();

$conn = mysqli_connect('mydb', 'root', '', 'pfe');




if (isset($_POST['save'])) { 
   

$pfe = $_SESSION['id_pfe'];


    $filename = $_FILES['myfile']['name'];
    $filename2 = str_replace('.pdf', '', $filename);


    $destination = 'uploads/' . $filename;


    $extension = pathinfo($filename, PATHINFO_EXTENSION);


    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo '<div style="display: flex; justify-content: center;">';
        echo '<p style="text-align: center;"><h1>You file extension must be .zip, .pdf or .docx</h1></p>';
        echo '</div>';
        
    } elseif ($_FILES['myfile']['size'] > 1000000000) { 
        echo "File too large!";
    } else {
   
        if (move_uploaded_file($file, $destination)) {
           if (isset($_POST['mon_champ'])) {
                $type = $_POST['mon_champ'];

            $sql = "INSERT INTO document (name, size, id_pfe, type_doc) VALUES ('$filename2', $size, '$pfe', '$type')";
            if (mysqli_query($conn, $sql)) {
                echo '<div style="display: flex; justify-content: center; align-items: center;">';
                echo '<p style="text-align: center;"><h1>File uploaded successfully</h1></p>';
                echo '</div>';
                

                
            }
            }else{
                echo "choisir le type du fichier";
            }
        } else {
            echo "Failed to upload file.";
            
        }
        
    }
    
}