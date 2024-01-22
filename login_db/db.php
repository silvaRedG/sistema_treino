<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$bancodedados = 'tarefa_treino';

$conn = mysqli_connect($hostname,$username,$password,$bancodedados);

if (mysqli_connect_error()) {

    echo "Falha na conexão".mysqli_connect_error();

}


?>