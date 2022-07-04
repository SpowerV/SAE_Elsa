<?php 
require('./views/ajout.view.php');

if(isset($_POST['btn_enregistrer']))
{
    //charger les données
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $uname = $_POST['uname'];
     $profil = $_POST['profil'];
     $mdp = $_POST['mdp'];
      
   //echo "$nom";

   $db->query('INSERT INTO user (nom, prenom, user_name, profil, password) VALUES ("'.$nom.'", "'.$prenom.'", "'.$uname.'", "'.$profil.'", "'.$mdp.'")');

   if($db)
   {
      echo'<script> alert("Utilisateur Ajouté avec succès"); </script>';
      
   }
   else
   {
      echo'<script> alert("Utilisateur non ajouté"); </script>';
   }
   
}


?>

<!--############################################################################################################### -->


<?php 


if(isset($_POST['btn_modif']))
{
    //charger les données
     $id= $_POST['update_id'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $uname = $_POST['uname'];
     $profil = $_POST['profil'];
     $mdp = $_POST['mdp'];
      
   //echo "$nom";

   $db->query("UPDATE user SET nom='$nom',prenom='$prenom',user_name='$uname',profil='$profil',password='$mdp' WHERE id=$id");
   if($db)
   {
      echo'<script> alert("Utilisateur modifier avec succès"); </script>';
      
   }
   else
   {
      echo'<script> alert("Utilisateur non modifier"); </script>';
   }
   
}


?>


<!--############################################################################################################### -->

<?php
if(isset($_POST['btn_delete']))
{  
   //recupérer id
   $id= $_POST['delete_id'];

   $db->query("DELETE FROM user WHERE id=$id");
   if($db)
   {
      echo'<script> alert("Utilisateur supprimer avec succès"); </script>';
      
   }
   else
   {
      echo'<script> alert("Utilisateur non supprimer"); </script>';
   }
}







?>
