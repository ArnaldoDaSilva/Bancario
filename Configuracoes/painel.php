<?php
session_start();

if(!isset($_SESSION['usuarios'])){
    header("Location:MenuGerenciavel.html");
    exit();
}
echo "<h2>Bem-vindo, " .$_SESSION['usuarios'] . "!</h2";
echo "<a href = 'logout.php'> Sair</a>";
?>