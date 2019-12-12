<?php 

include 'db.php';

$id_turma = $_POST['id_turma'];
$serie = $_POST['serie'];
$nivel_ensino = $_POST['nivel_ensino'];
$turno = $_POST['turno'];
$ano = $_POST['ano'];

$query = "UPDATE turmas SET serie='$serie', nivel_ensino='$nivel_ensino', turno='$turno', ano=$ano
        WHERE id_turma = $id_turma";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_turmas');
