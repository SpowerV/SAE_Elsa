<?php 





//Variables Constantes
define('DB_HOST', 'localhost');
define('DB_NAME', 'archive');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

//var_dump(PDO::getAvailableDrivers());
try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

    //Gestion erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die('Erreur Connexion impossible: '.$e->getMessage());
}

?>