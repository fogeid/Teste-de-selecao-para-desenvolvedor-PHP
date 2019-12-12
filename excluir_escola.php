<?php

include 'db.php';

$id_escola = $_GET['id_escola'];

$query = "DELETE FROM escolas WHERE id_escola = $id_escola";

mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_escolas');