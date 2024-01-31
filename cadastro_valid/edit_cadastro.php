<?php


if (!empty($_GET['id'])) {
    
    require_once '../login_db/db.php';

    $user_id = $_GET['id'];
    $query_update = "SELECT * FROM users WHERE id = '$user_id' ";
    $conn_update = mysqli_query($conn,$query_update);


    if (mysqli_num_rows($conn_update) > 0) {
    
        
       
        while ($user_data = mysqli_fetch_assoc($conn_update)) {
        
            
            $name = $user_data['name'];
            $email = $user_data['email'];
            $endereco = $user_data['endereco'];
            $number_end = $user_data['number_end'];
            $phone = $user_data['phone'];
            $password = $user_data['password'];

        }
        

       

    }
    
    
    else{
        header('Location: ../login_db/index.php');
    }


   



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

        <form action="saveEdit.php" method="post">

            <label for="name">

                <p>Nome :</p>
                <input type="text" id="name" name="name" autofocus placeholder="Digite seu nome" value="<?php echo $name?>" required>

            </label>

            <label for="email">

                <p>Email :</p>
                <input type="email" id="email" name="email" placeholder="Digite seu email" value="<?php echo $email?>" required>

            </label>

            <label for="street">

                <p>Endereço :</p>
                <input type="text" id="street" name="street" placeholder="Digite seu endereço" value="<?php echo $endereco?>" required>

                <p>Número:</p>
                <input type="number" id="number" name="number"  value="<?php echo $number_end?>" required>

            </label>

            <label for="tel">

                <p>Telefone :</p>
                <input type="tel" id="tel" name="tel" placeholder="Digite seu telefone" value="<?php echo $phone?>" required>

            </label>



            <label for="password">

                <p>Senha :</p>
                <input type="password" id="password" name="password" placeholder="Digite uma senha" value="<?php echo $password?>" required>

            </label>


            <input type="hidden" name="id" value="<?php echo $user_id ?>">
            <input type="submit" value="Cadastrar" class="input-cadastrar" name="update" id="update">
            <a href="../login_db/index.php">Entrar</a>




        </form>



    </section>


</body>

</html>