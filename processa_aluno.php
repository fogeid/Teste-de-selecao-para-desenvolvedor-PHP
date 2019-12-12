<?php

include 'db.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "INSERT INTO alunos(nome, data_nascimento, genero, telefone, email)
        VALUES('$nome', '$data_nascimento', '$genero', '$telefone', '$email')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_alunos');