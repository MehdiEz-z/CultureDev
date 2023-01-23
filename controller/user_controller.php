<?php
require_once '../model/user.php';

  
if(isset($_POST["signup"])) signUp();
if(isset($_POST["login"])) logIn();
// class userController extends User{
    
function signUp(){
    $user = new User();

    $user->setFname($_POST["Fname"]);
    $user->setLname($_POST["Lname"]);
    $user->setEmail($_POST["Semail"]);
    $user->setPassword(password_hash($_POST['Spassword'],PASSWORD_BCRYPT));
    $user->setImageName($_FILES['img']['tmp_name']);
    $user->setiImage($_FILES['img']['name']); 
    
    if(empty($user->image)) $user->setiImage('User.jpg');
   

    $result = $user->login();

    if($result){
        $_SESSION['errorSignup'] = 'Cet utilisateur exist déjà'; 
    }else{
        $user->signup();
        header("Location:../view/login.php");  
    }          
}

function logIn(){
    $user = new User();

    $user->setEmail($_POST["email"]);
    $user->setPassword($_POST["password"]);

    $result = $user->login();

    if($result){
        $_SESSION['user']   = $result['id'];
        $_SESSION['fname']  = $result['fname'];
        $_SESSION['lname']  = $result['lname'];
        $_SESSION['image']  = $result['image'];
        $password_v = password_verify($_POST["password"],$result['password']);
        if($password_v == $_POST["password"]){
            header('location:../view/dashboard.php');
        }else{
            $_SESSION['errorLogin']= 'Mot de passe incorect';    
        }
    }else{
        $_SESSION['errorLogin']= "Email incorrect";
    }
}

// function displayUser(){
//     $user = new User();

//     $user->setUserId($_SESSION['user']);
//     return $this->getuser();
// }


?>
