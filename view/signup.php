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
                    <form action="" method="POST" class="signup" enctype="multipart/form-data">
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
                                <input class="input-field" name="Fname" id="fname" type="text">
                                <label>Nom</label>
                                <span class="fnameErr1">Nom obligatoir</span>
                                <span class="fnameErr2">Nom invalide</span>
                            </div>
                            <div class="inputs">
                                <input class="input-field" name="Lname" id="lname" type="text">
                                <label>Prenom</label>
                                <span class="lnameErr1">Prenom obligatoir</span>
                                <span class="lnameErr2">Prenom invalide</span>
                            </div>
                            <!-- Email Input -->
                            <div class="inputs">
                                <input class="input-field" name="Semail" id="Semail" type="text">
                                <label>Email</label>
                                <span class="SemailErr1">Adresse mail obligatoir</span>
                                <span class="SemailErr2">Adresse mail invalide</span>
                            </div>
                            <!-- Password Input -->
                            <div class="inputs">
                                <input class="input-field" name="Spassword" id="Spassword" type="password">
                                <label>Mot de Passe</label>
                                <span class="SpassErr1">Mot de passe obligatoir</span>
                                <span class="SpassErr2">Mot de passe invalide</span>
                            </div>
                            <div class="image-upl">
                                <label>Selectioner une images</label>
                                <input class="" name="img" id="img" type="file">
                            </div>
                            <!-- Signup Button -->
                            <input type="submit" class="continue-btn" name="signup" value="Inscrivez-vous" >
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
<script src="../Assets/Javascript/input-animation.js"></script>
<script src="../Assets/Javascript/signup.js"></script>
</html>