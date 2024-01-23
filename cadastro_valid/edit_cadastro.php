<?php

session_start();

require_once '../login_db/db.php';


if (isset($_SESSION['alert'])) {

    echo ($_SESSION['alert']);
    unset($_SESSION['alert']);
}


$query_users_conn = mysqli_query($conn, $query_users);

if (mysqli_num_rows($query_users_conn) < 1) {

    // criar uma variavel para inserir novos dados na tabela
    $query_new_user = "UPDATE users 
    SET name = '$name', 
        email = '$email', 
        endereco = '$endereco', 
        number_end = '$number_end', 
        phone = '$phone', 
        password = '$password', 
        status = 1 
    WHERE id = $users_id";

    // variavel query pra fazer conexão com o banco e e add novos dados, lembrando que a conn é a quem dentro do arquivo db.php
    $conn_insert = mysqli_query($conn, $query_new_user);


    $alert[] = "Usuario cadastrado";

    header('Location: cadastro.php');
} else {


    $alert[] = "Usuario já possui cadastro";

    header('Location: cadastro.php');
}





?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Teste</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>

    <header>

        <span>
        </span>

    </header>



    <section class="form-register">

        <form action="validation.php" method="post">

            <label for="name">

                <p>Nome :</p>
                <input type="text" id="name" name="name" autofocus placeholder="Digite seu nome" required>

            </label>

            <label for="email">

                <p>Email :</p>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>

            </label>

            <label for="street">

                <p>Endereço :</p>
                <input type="text" id="street" name="street" placeholder="Digite seu endereço" required>

                <p>Número:</p>
                <input type="number" id="number" name="number" required>

            </label>

            <label for="tel">

                <p>Telefone :</p>
                <input type="tel" id="tel" name="tel" placeholder="Digite seu telefone" required>

            </label>



            <label for="password">

                <p>Senha :</p>
                <input type="password" id="password" name="password" placeholder="Digite uma senha" required>

            </label>

            <input type="submit" value="Cadastrar" class="input-cadastrar">
            <a href="../login_db/index.php">Entrar</a>




        </form>


    </section>


</body>

</html>