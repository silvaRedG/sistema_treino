<?php

require_once '../login_db/db.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $endereco = $_POST['street'];
    $number_end = $_POST['number'];
    $phone = $_POST['tel'];
    $password = $_POST['password'];

    $query_user_update = "UPDATE users 
    SET name = '$name', 
    email = '$email', 
    endereco = '$endereco', 
    number_end = '$number_end', 
    phone = '$phone', 
    password = '$password', 
    status = 1 
    WHERE id = '$id'";

    $query_conn_new_user = mysqli_query($conn,$query_user_update);
    
}

header('Location: ../home.php');

?>