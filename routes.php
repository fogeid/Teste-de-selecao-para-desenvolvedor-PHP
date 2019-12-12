<?php

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

if ($pagina == 'alunos') {
    include 'views/alunos.php';
} elseif ($pagina == 'buscar_alunos') {
    include 'models/buscar_alunos.php';
} elseif ($pagina == 'pesquisar_aluno') {
    include 'pesquisar_aluno.php';
} elseif ($pagina == 'turmas') {
    include 'views/turmas.php';
} elseif ($pagina == 'buscar_turmas') {
    include 'models/buscar_turmas.php';
} elseif ($pagina == 'escolas') {
    include 'views/escolas.php';
} elseif ($pagina == 'matricula') {
    include 'views/matricula.php';
} else {
    include 'views/home.php';
}

