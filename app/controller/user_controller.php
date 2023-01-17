<?php
session_start();
require_once __DIR__.'/../model/user.php';


if(isset($_POST["signup"]))  Signup();
if(isset($_POST["login"]))  Login();


function Signup(){
    $user = new User();

    $user->setUsertName($_POST["Susername"]);
    $user->setEmail($_POST["Semail"]);
    $user->setPassword(password_hash($_POST['Spassword'],PASSWORD_BCRYPT));

    $result = $user->checkEmail();
    
    if($result){
        $_SESSION['errorSignup'] = 'Cet utilisateur exist deja'; 
    }else{
        $user->signup();
    }
    header("Location:../../public/index.php");

} 



?>
