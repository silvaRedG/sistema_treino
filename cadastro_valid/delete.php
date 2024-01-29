<?php

if(!empty($_GET['id']))

{
    require_once '../login_db/db.php';

    $id = $_GET['id'];
    

    $sqlSelect = "SELECT * FROM users WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if ($result -> num_rows > 0) {
        
        $sqlDelete = "UPDATE FROM users WHERE id = $id";
        $resultDelete = $conn->query($sqlDelete);
    }

}

header('Location: ../home.php');

?>