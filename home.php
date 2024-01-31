<?php

session_start();

require_once './login_db/db.php';

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];


$query_users = "SELECT * FROM users WHERE status !=3";
$query_users_conn = mysqli_query($conn, $query_users)



?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>



    <header>
        <span>

            Olá

            <?php

            echo $user_name;

            ?>

        </span>
    </header>




    <section>

        <table border="1" class="tabela">

            <tr class="">

                <td>id</td>
                <td>nome</td>
                <td>email</td>
                <td>endereco</td>
                <td>number_end</td>
                <td>phone</td>
                <td>editar</td>
                <td>excluir</td>


            </tr>

            <?php

            // percorrendo o resultado de uma consulta do banco mysql
            while ($view = mysqli_fetch_assoc($query_users_conn)) {

                $user_id = $view['id'];
                $user_name = $view['name'];
                $user_email = $view['email'];
                $user_end = $view['endereco'];
                $user_number_end = $view['number_end'];
                $user_phone = $view['phone'];

                echo "
            
            
            
            <tr class='table-top-bottom'>
            <td>" . $user_id . "</td>
            <td>" . $user_name . "</td>
            <td>" . $user_email . "</td>
            <td>" . $user_end . "</td>
            <td>" . $user_number_end . "</td>
            <td>" . $user_phone . "</td>
            
            
<td>
        <a class='btn btn-primary' href='./cadastro_valid/edit_cadastro.php?id=$user_id'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
            </svg>
        </a>
    </td>




    <td>
    
            <a  class='btn btn-danger' href='./cadastro_valid/delete.php?id=$user_id'>
            <svg xmlns=http://www.w3.org/2000/svg width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
          <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
        </svg>
            
        </a>
    
    </td>

   

            
            
            </tr>
            
            ";
            }

            ?>

        </table>

    </section>
    <a href="./login_db/index.php">SAIR</a>


</body>

</html>