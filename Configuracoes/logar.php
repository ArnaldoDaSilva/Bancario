<?php
session_start();
include("loginCon.php");

$nome = $_POST['nome'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM usuarios Where nome= '$nome'";
$result=$conn->query($sql);

if($result->num_rows > 0){
    $usuarios =$result ->fetch_assoc();

    //verificar senha
    if(password_verify($pass, $usuarios['pass'])){
        $_SESSION['usuarios'] = $usuarios ['nome'];
         header("Location: painel.php");
         exit();
    }else{
        echo "senha incorreta!";
    }
}else{
    echo " Usuario nao encotrado";
}
$conn->close();


?>