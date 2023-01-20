<?php

$Title='Signup | CultureDev.to';
require_once ('./includes/head.php');

?>

<body>
    <main class="users">
        <div class="box">
            <div class="interior-box">
                <div class="forms">
                    <!-- Sign-up Form -->
                    <form action="../controller/user_controller.php" method="POST" class="signup">
                        <!-- Logo Form-->
                        <div class="logo">
                            <img src="../Assets/Images/logo.png" alt="CultureDevLogo">
                            <h3>ulture<span>D</span>ev</h3>
                        </div>
                        <!-- Head Form-->
                        <div class="head">
                            <h2>REJOINEZ-NOUS</h2>
                            <h6>Vous avez déjà un compte ?</h6>
                            <a href="login.php" class="toggle">Connectez-vous</a>
                        </div>
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
                            <div class="image-upl">
                                <label>Selectioner une images</label>
                                <input class="" name="img" id="img" type="file" >
                            </div>
                            <!-- Signup Button -->
                            <input type="submit" class="login-btn" id="inscriver" name="signup" value="Inscrivez-vous" >
                        </div>
                    </form>
                </div>
                <div class="carousel">
                    <div class="content-carousel">
                        <div class="text-carousel">
                            <h1>Bienvenu</h1>
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
