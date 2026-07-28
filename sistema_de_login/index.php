<?php
session_start();

// Se já está logado, redireciona para o dashboard
if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit();
}

// Caso contrário, redireciona para o login
header("Location: login.php");
exit();
