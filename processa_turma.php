<?php

include 'db.php';

$serie = $_POST['serie'];
$nivel_ensino = $_POST['nivel_ensino'];
$turno = $_POST['turno'];
$ano = $_POST['ano'];

$query = "INSERT INTO turmas(serie, nivel_ensino, turno, ano)
        VALUES('$serie', '$nivel_ensino', '$turno', $ano)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_turmas');