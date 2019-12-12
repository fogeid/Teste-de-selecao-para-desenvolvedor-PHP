<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$db = 'aplicacao_estudadotcom';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

# - - - CONSULTAS - - - 
# Consulta Turmas
$query1 = "SELECT * FROM turmas";
$consulta_turmas = mysqli_query($conexao, $query1);

$query2 = "SELECT A.nome, E.nome, T.serie, T.nivel_ensino, T.turno, T.ano
        FROM alunos A,
        turmas T,
        escolas E,
WHERE E.id_escola = id_escola and T.id_turma = id_turma";
$consulta_turma_escola = mysqli_query($conexao, $query2);

# Consulta Alunos    
$query = "SELECT * FROM alunos";
$listar_alunos = mysqli_query($conexao, $query);

# Consulta Escolas
$query = "SELECT * FROM escolas";
$consulta_escolas = mysqli_query($conexao, $query);
