<?php

session_start();

require_once 'db.php';

$user_email = $_POST['email'];
$user_password = $_POST['password'];


$query_login = "SELECT * FROM users WHERE email = '$user_email' AND password = '$user_password'";
$conn_login_acess = mysqli_query($conn,$query_login);

$result = mysqli_fetch_assoc($conn_login_acess);



if (mysqli_num_rows($conn_login_acess) < 1 ) {

    echo "Usuario/senha invalido";


}else{

        // validar acesso da sessão com estilo variavel global e atribuir info do banco que desejo capturar

    $_SESSION['user_id'] = $result['id'];
    $_SESSION['user_name'] = $result['name'];
    $_SESSION ['user_email']= $result['email'];
    $_SESSION ['user_end']= $result['endereco'];
    $_SESSION ['user_number_end']= $result['number_end'];
    $_SESSION['user_phone'] = $result['phone'];

   
    

    header('Location: ../home.php');

}




?>