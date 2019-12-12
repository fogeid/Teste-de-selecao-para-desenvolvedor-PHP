<?php

include 'db.php';

$id_turma = $_GET['id_turma'];

$query = "DELETE FROM turmas WHERE id_turma = $id_turma";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_turmas');