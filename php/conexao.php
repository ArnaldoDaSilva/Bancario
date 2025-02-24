<?php
$hostname= "localhost";
$db="bancario";
$user="root";
$pass="";


//  $conn=new mysqli($hostname,$user,$pass,$db);
//  //verificar conexao
// if($conn->connect_errno){

//     die("Falha de conexao:(". $conn->connect_error. ")" .$conn->connect_errno) ;

//  }else{
//    echo "conexao bem sucedicissima";
 //}
 try{
    $conn = new PDO("mysql:host=$hostname;dbname=$db",$user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado";

 }catch(PDOException $e){
     echo "Database connection failed:" . $e->getMessage();
}

?>
