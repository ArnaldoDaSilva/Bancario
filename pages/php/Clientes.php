<?php
// include("conexao.php");
var_dump($_POST);
var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"]!="POST"){
    die("Erro: Metodo invalido! Apenas Post e permitido! esta certo");
}


if($_SERVER["REQUEST_METHOD"]="POST"){
 
    // $nome = isset($_POST['nome']) ? $_POST['nome']: null;
    // $apelido = isset($_POST['apelido']) ? $_POST['apelido']: null;
    // $data = isset($_POST['data']) ? $_POST['data']: null;
    // $identidade = isset($_POST['identidade']) ? $_POST['identidade']: null;
    // $nuit = isset($_POST['nuit']) ? $_POST['nuit']: null;
    // $residencia = isset($_POST['residencia']) ? $_POST['residencia']: null;

    if(
        isset($_POST['nome']) && isset($_POST['apelido']) &&
        isset($_POST['data']) && isset($_POST['identidade']) &&
        isset($_POST['nuit']) && isset($_POST['residencia'])
    ){
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $data = $_POST['data'];
        $identidade = $_POST['identidade'];
        $nuit = $_POST['nuit'];
        $residencia = $_POST['residencia'];

        $sql= "INSERT INTO cliente (nome, apelido, data, identidade, nuit ,residencia) VALUES (?,?,?,?,?,?)";



// if ($nome && $apelido && $data &&$identidade && $nuit && $residencia){
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss",'$nome','$apelido','$data','$identidade','$nuit','$residencia');

    if($stmt->execute()){
        echo "Usuario Cadastrado com sucesso";
    }
    else {
        echo "ERRo: " . $stmt->error;
    }
    $stmt->close();
    }else{
        echo "Por favor, preencha todos os  campos!";
    }
    }else{
        echo "Metodo invalido";
    }





?>