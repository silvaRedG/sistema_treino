<?php

session_start();

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>
<body>


    <header>
        <span>
            <?php
            
            echo $user_name;
            
            ?>
        </span>
    </header>

    
</body>
</html>