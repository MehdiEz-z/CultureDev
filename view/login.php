<?php

$Title='Login | CultureDev.to';
require_once './includes/head.php';
require_once '../controller/shared.php';
?>

<body>
    <main class="users">
        <div class="box">
            <div class="interior-box">
                <div class="forms">
                    <!-- Login Form -->
                    <form action="" method="POST" class="login">
                        <!-- Logo Form-->
                        <div class="logo">
                            <img src="../Assets/Images/logo.png" alt="CultureDevLogo">
                            <h3>ulture<span>D</span>ev</h3>
                        </div>
                        <!-- Head Form-->
                        <div class="head">
                            <h2>CONNECTEZ-VOUS</h2>
                            <h6>Vous n'avez pas encore de compte ?</h6>
                            <a href="signup.php" class="toggle" id="inscriver">Inscrivez-vous</a>
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
                                <span class="emailErr1">Adresse mail obligatoir</span>
                                <span class="emailErr2">Adresse mail invalide</span>
                            </div>
                            <!-- Password Input -->
                            <div class="inputs">
                                <input class="input-field" name="password" id="password" type="password" >
                                <label>Mot de Passe</label>
                                <span class="passErr1">Mot de Passe obligatoir</span>
                                <span class="passErr2">Mot de Passe invalide</span>
                            </div>
                            <!-- Login Button -->
                            <button class="login-btn" name="login" type="submit">Connectez-vous</button>
                            <!-- Forgot Password -->
                            <p class="text">
                                Vous avez oublié votre mot de passe?
                                <a href="#">Récuperez-le</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="carousel">
                    <div class="content-carousel">
                        <div class="text-carousel">
                            <h1>Content de vous revoir</h1>
                        </div>
                        <!-- Images Carousel -->
                        <div class="image-carousel">
                            <img src="../Assets/Images/illustration.png" class="imageC" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../Assets/Javascript/input-animation.js"></script>
<script src="../Assets/Javascript/login.js"></script>
</html>