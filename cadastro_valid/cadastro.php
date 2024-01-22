<?php

session_start();

if (isset($_SESSION['alert'])) {
    
    echo ($_SESSION['alert']);
    unset ($_SESSION['alert']);
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