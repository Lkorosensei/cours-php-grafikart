<?php
function est_connecte(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function forcer_utilisateur_connecte (): void {
    var_dump(est_connecte()); // ligne à mettre si on veut voir si la personne est co ou nn
    if (!est_connecte()) {
        header('Location: /login.php');
        exit();
    };
}