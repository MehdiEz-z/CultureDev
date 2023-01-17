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

    $result = $user->login();
    
    if($result){
        $_SESSION['errorSignup'] = 'Cet utilisateur exist deja'; 
    }else{
        $user->signup();
    }
    header("Location:../../public/index.php");

} 

function Login(){
    $user = new User();
    
    $user->setEmail($_POST["email"]);
    $user->setPassword($_POST["password"]);

    $result = $user->login();
    if($result){
        $_SESSION['email'] = $result['email'];
        $password_v = password_verify($_POST["password"],$result['password']);
        if($password_v == $_POST["password"]){
            $_SESSION['username'] = $result['username'];
            header('location:dashboard.php');
            die();

        }else{
            $_SESSION['errorLogin']= 'Mot de passe incorect';    
        }
    }else{
        $_SESSION['errorLogin']= "Email incorrect";
    }

    header('location: ../../public/index.php');
}


?>
