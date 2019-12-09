<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

if ($pagina == 'alunos') {
    include 'views/alunos.php';
} elseif ($pagina == 'turmas') {
    include 'views/turmas.php';
} elseif ($pagina == 'escolas') {
    include 'views/escolas.php';
} else {
    include 'views/home.php';
}

# Rodapé
include 'footer.php';