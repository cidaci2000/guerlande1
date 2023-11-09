<?php

    if(!empty($_GET['id']))
    {
        include_once('../config.php');

        $id = $_GET['id_usuario'];

        $sqlSelect = "SELECT *  FROM cliente WHERE id_usuario=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente WHERE id_usuario=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>