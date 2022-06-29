<?php 
require("./config/database.php");


if(isset($_POST['insertdata']))
{
  //charger les données
      $fname = $_POST['fname'];
      $pname = $_POST['pname'];
      $uname = $_POST['uname'];
      $profil = $_POST['profil'];
      $password = $_POST['password'];
        
    // echo "ok";
     

    $db->query('INSERT INTO user (fname, pname, uname, profil, password) VALUES ("'.$nom.'", "'.$prenom.'", "'.$user_name.'", "'.$profil.'", "'.$password.'")');
  if($db)
  {
     echo'<script> alert("Utilisateur ajouté"); </script>';
     header('Locataion:ajout.php');
}
  else
  {
      echo'<script> alert("Utilisateur non ajouté"); </script>';
  }

}




?>