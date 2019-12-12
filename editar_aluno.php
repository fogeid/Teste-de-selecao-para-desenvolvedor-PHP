<?php 

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "UPDATE alunos SET nome='$nome', data_nascimento='$data_nascimento', genero='$genero', telefone='$telefone',
        email='$email'
        WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_alunos');