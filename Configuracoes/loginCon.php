<?php
$hostname= "localhost";
$db="bancario";
$user="root";
$pass="";


$conn=new mysqli($hostname,$user,$pass,$db);

//verificar conexao
if($conn->connect_errno){

    echo "Falha de conexao:(". $conn->connect_error. ")" .$conn->connect_errno;

}else{
    echo "conexao bem sucedicissima";
}

?>
