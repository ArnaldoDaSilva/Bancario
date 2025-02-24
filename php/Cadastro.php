<?php
include("conexao.php");
var_dump($_SERVER["REQUEST_METHOD"]="POST");

if ($_SERVER['REQUEST_METHOD']="POST"){

    if(isset($_POST['btnCadastro'])){
        if(empty($_POST['nome']) || empty($_POST['apelido']) || empty($_POST['data']) ||
        empty($_POST['identidade']) || empty($_POST['nuit'] )|| empty($_POST['residencia'])){

            $_SESSION['status_title'] = "Ocorreu um erro";
            $_SESSION['status'] = "Prencha os Campos";
            echo "Opss ocorreu um erro", "preencha todos os campors";
            header("Location: Cadastro.php");


        }else{
            try{
                $stmt= $conn->prepare("INSERT INTO cliente (nome, apelido, data, identidade, nuit, residencia) VALUES(:nome,:apelido,:data,:identidade,nuit, residencai)");
                $stmt->bindValue(':nome', $_POST['nome']);
                $stmt->bindValue(':apelido', $_POST['apelido']);
                $stmt->bindValue(':data', $_POST['data']);
                $stmt->bindValue(':identidade', $_POST['identidade']);
                $stmt->bindValue(':nuit', $_POST['nuit']);
                $stmt->bindValue(':residencia', $_POST['residencia']);
                $stmt ->execute();

                $ultimoID= $conn->lastInsertId();
                if($stmt){
                    echo"Sucesso";
                    header("Localion: add_clientes.php");
                }


            }catch(PDOException $e){
            
                imap_alerts("Opps..ocorreu um erro!","OCorereu um erro ao registrar");
                header("Location: Cadastro.php?");
            
        }
    }
    }

}
?>