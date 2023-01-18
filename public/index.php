<?php

require_once __DIR__.'/../app/controller/user_controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Icon -->
    <title>CultureDev.to</title>
    <link rel="icon" href="./Assets/Images/logo.png">

    <!-- My Style -->
    <link rel="stylesheet" href="./Assets/Css/mains.css">

    <!-- Fontawesome link -->
    <script src="https://kit.fontawesome.com/f57667c685.js" crossorigin="anonymous"></script>

</head>
<body>
    <main>
        <div class="box">
            <div class="interior-box">
                <div class="forms">
                    <!-- Login Form -->
                    <form action="../app/controller/user_controller.php" method="POST" class="login">
                        <!-- Logo Form-->
                        <div class="logo">
                            <img src="./Assets/Images/logo.png" alt="CultureDevLogo">
                            <h3>ulture<span>D</span>ev</h3>
                        </div>
                        <!-- Head Form-->
                        <div class="head">
                            <h2>CONNECTEZ-VOUS</h2>
                            <h6>Vous n'avez pas encore de compte ?</h6>
                            <a href="#" class="toggle" id="inscriver">Inscrivez-vous</a>
                        </div>
                        <?php if(isset($_SESSION['errorLogin'])){ ?>         
                            <span class="errorLogin"><?= $_SESSION['errorLogin'];?></span>             
                        <?php  unset($_SESSION['errorLogin']); } ?>  
                        <!-- Content Form -->
                        <div class="form-content">
                            <!-- Email Input -->
                            <div class="inputs">
                                <input class="input-field" name="email" id="email" type="text" >
                                <label>Email</label>
                                <span class="emailErr1">Email is required</span>
                                <span class="emailErr2">Invalid email address</span>
                            </div>
                            <!-- Password Input -->
                            <div class="inputs">
                                <input class="input-field" name="password" id="password" type="password" >
                                <label>Mot de Passe</label>
                                <span class="passErr1">Password is required</span>
                                <span class="passErr2">Invalid password</span>
                            </div>
                            <!-- Login Button -->
                            <input type="submit" class="login-btn" id="connecter" name="login" value="Connectez-vous" >
                            <!-- Forgot Password -->
                            <p class="text">
                                Vous avez oublié votre mot de passe?
                                <a href="#">Récuperez-le</a>
                            </p>
                        </div>
                    </form>
                    <!-- Sign-up Form -->
                    <form action="../app/controller/user_controller.php" method="POST" class="signup">
                        <!-- Logo Form-->
                        <div class="logo">
                            <img src="./Assets/Images/logo.png" alt="CultureDevLogo">
                            <h3>ulture<span>D</span>ev</h3>
                        </div>
                        <!-- Head Form-->
                        <div class="head">
                            <h2>REJOINEZ-NOUS</h2>
                            <h6>Vous avez déjà un compte ?</h6>
                            <a href="#" class="toggle">Connectez-vous</a>
                        </div>
                        <?php if(isset($_SESSION['errorSignup'])){ ?>         
                            <span class="errorSignup"><?= $_SESSION['errorSignup'];}?></span>             
                        
                        <!-- Content Form -->
                        <div class="form-content">
                            <!-- Username Input -->
                            <div class="inputs">
                                <input class="input-field" name="Susername" id="username" type="text">
                                <label>Nom d'utilisateur</label>
                                <span class="usernameErr1">Username is required</span>
                                <span class="usernameErr2">Invalid username</span>
                            </div>
                            <!-- Email Input -->
                            <div class="inputs">
                                <input class="input-field" name="Semail" id="Semail" type="text">
                                <label>Email</label>
                                <span class="SemailErr1">Email is required</span>
                                <span class="SemailErr2">Invalid email address</span>
                            </div>
                            <!-- Password Input -->
                            <div class="inputs">
                                <input class="input-field" name="Spassword" id="Spassword" type="password">
                                <label>Mot de Passe</label>
                                <span class="SpassErr1">Password is required</span>
                                <span class="SpassErr2">Invalid password</span>
                            </div>
                            <!-- Signup Button -->
                            <input type="submit" class="login-btn" id="inscriver" name="signup" value="Inscrivez-vous" >
                        </div>
                    </form>
                </div>
                <div class="carousel">
                    <div class="text-carousel">
                        <h1>Bienvenu</h1>
                        <!-- <h4><span>C</span><b>ulture</b><span>D</span><b>ev</b> est une communauté de plusieurs développeurs incroyables.</h4> -->
                    </div>
                    <!-- Images Carousel -->
                    <div class="image-carousel">
                        <img src="./Assets/Images/illustration.png" class="imageC" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<!-- JavaScript -->
<script src="Assets/Javascript/script.js"></script>


<?php
if(isset($_SESSION['errorSignup'])){
    echo '<script>document.querySelector("#inscriver").click();</script>';
}
unset($_SESSION['errorSignup']);
?>



</html>