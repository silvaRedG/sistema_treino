<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Teste</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    

<header><p></p></header>

<section class="form-login">

    <form action="login.php" method="post">


        <label for="login">

            <p>Email: </p>
            <input type="email" id="email" name="email" autofocus placeholder="Digite seu email" required class="input-login">

            <p>Senha: </p>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required class="input-login">

            <input type="submit" value="Entrar" id="submit-entrar">
            

        </label>

        <a href="../cadastro_valid/cadastro.php">Cadastrar</a>

        


    </form>

</section>




</body>
</html>