<?php

$Title='Login | CultureDev.to';
require_once ('./includes/head.php');

?>

<body>
    <main class="users">
        <div class="box">
            <div class="interior-box">
                <div class="forms">
                    <!-- Login Form -->
                    <form action="../controller/user_controller.php" method="POST" class="login">
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
                            <input type="button" class="login-btn" id="connecter" name="login" value="Connectez-vous" >
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

<?php
require_once "./includes/footer.php";
?>
</html>