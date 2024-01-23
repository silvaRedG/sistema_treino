<?php

session_start();

require_once '../login_db/db.php';


$name = $_POST['name'];
$email = $_POST['email'];
$endereco = $_POST['street'];
$number_end = $_POST['number'];
$phone = $_POST['tel'];
$password = $_POST['password'];

$query_check_user = "SELECT email FROM users WHERE email = '$email'"; // variavel pra verificar se o usuario já possui email cadastrado
$conn_query_register = mysqli_query($conn, $query_check_user); // criando conexão com o banco e verificando se o user possui cadastro

$alert[] = "";


if (mysqli_num_rows ($conn_query_register) < 1) {
    
    // criar uma variavel para inserir novos dados na tabela
    $query_new_user = "INSERT INTO users (name,email,endereco,number_end,phone,password,status) VALUES ('$name', '$email', '$endereco','$number_end','$phone','$password',1)";
    
    // variavel query pra fazer conexão com o banco e e add novos dados, lembrando que a conn é a quem dentro do arquivo db.php
    $conn_insert = mysqli_query($conn,$query_new_user);
    

    $alert[] = "Usuario cadastrado";

    header('Location: cadastro.php');

} else{


    $alert[] = "Usuario já possui cadastro";

    header('Location: cadastro.php');


}

$_SESSION['alert'] = implode(",",$alert);



?>