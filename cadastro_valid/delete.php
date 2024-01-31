<?php


require_once '../login_db/db.php';

//Obetendo ID DO FORMS

$id = $_GET['id'];

// Executando uma consulta sql pra excluir os dados do registro
$query = "UPDATE users SET status = 3 WHERE id=$id";

$result = mysqli_query($conn, $query);


if ($result) {
    
    echo 'Registro excluido com sucesso';
    header('Location: ../home.php');
    
} else {
    echo 'Erro ao excluir registro'.mysqli_error($conn);
}



?>


</body>

</html>