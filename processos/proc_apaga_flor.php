<?php
    require('../bd/conecta.php');

    $id = $_GET['id'];

    //agr vamos criar a string de update e executar
    $consulta = "DELETE FROM estoque_flores WHERE id_flor = $id";
    $conexao->query($consulta);

    header('Location: ../estoque.php');
?>