<?php
session_start(); // on initialise les sessions php

// on inclut la page de config
include("config.php");

if(isset($_POST['login']) && isset($_POST['password']))
{
    $login = htmlentities($_POST['login'], ENT_QUOTES);
    $mdp = htmlentities($_POST['password'], ENT_QUOTES);

    // on crypt le mot de passe envoyé par le formulaire
    $password_md5 = md5($mdp);

    if(($_admin_login == $login) && ($password_md5 == $_admin_pass))
    {
        $_SESSION['_login'] = $login;
        $_SESSION['passsword'] = $password_md5;

        echo '<p style="color:green">Connexion réussi! </p>';
        echo '<p><a href="login.php">Page admin</a></p>';
    }
    else
    {
        echo '<p style="color:red">Mauvaise Email, login ou mot de passe</p>';
        exit();
    }

}
?><?php
