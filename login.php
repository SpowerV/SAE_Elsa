<?php 
require("./config/database.php");
require("./includes/functions.php");

if(isset($_POST['uname']) && isset($_POST['password']))
{


    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    if(empty($uname))
    {
       header("Location: index.php?error=veuillez metre un username svp");
    }
    else if(empty($password))
    {
        header("Location: index.php?error=veuillez metre un password svp");
    }
    
    else
    {
        
        $VerifiUser = $db->query('SELECT * FROM user WHERE user_name="'.$uname.'" AND password="'.$password.'" ');
        $UserData = $VerifiUser->fetch();
        if($VerifiUser->rowCount() == 1)
        {
            header("Location: index2.php");
        }
        else
        {
            header("Location: index.php?error=Veuillez créer un compte auprès de l'admin");
        }
       
    } 
}
else
{
    header("Location: index.php");
    exit();
}


?>
