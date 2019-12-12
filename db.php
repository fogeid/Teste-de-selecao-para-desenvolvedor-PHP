<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$db = 'aplicacao_estudadotcom';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

# - - - CONSULTAS - - - 
# Consulta Turmas
$query = "SELECT E.nome, T.serie, T.nivel_ensino, T.turno, T.ano
        FROM escolas E,
        turmas T,
        alunos_turmas AT
WHERE E.id_escola = AT.id_escola and T.id_turma = AT.id_turma";
$consulta_turmas = mysqli_query($conexao, $query);

# Consulta Alunos    
$query1 = "SELECT * FROM alunos";
$listar_alunos = mysqli_query($conexao, $query1);