<?php
    require_once 'shared.php';
    session_destroy();
    header('location:../view/login.php');
?>