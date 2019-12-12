<?php

include 'db.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$data_cad = $_POST['data_cad'];
$situacao = $_POST['situacao'];

$query = "INSERT INTO escolas(nome, endereco, data_cad, situacao)
        VALUES('$nome', '$endereco', '$data_cad', '$situacao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_escolas');