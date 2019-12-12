<?php

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}

switch ($pagina) {
    case 'alunos': include 'views/alunos.php'; break;
    case 'turmas': include 'views/turmas.php'; break;    
    case 'escolas': include 'views/escolas.php'; break;
    case 'matricula': include 'views/matricula.php'; break;
    case 'buscar_alunos': include 'models/buscar_alunos.php'; break;
    case 'buscar_turmas': include 'models/buscar_turmas.php'; break;
    case 'buscar_escolas': include 'models/buscar_escolas.php'; break;
    case 'pesquisar_aluno': include 'pesquisar_aluno.php'; break;
    case 'excluir_aluno': include 'excluir_aluno.php'; break;
    case 'excluir_turma': include 'excluir_turma.php'; break;
    case 'excluir_escola': include 'excluir_escola.php'; break;
    case 'editar_aluno': include 'editar_aluno.php'; break;
    case 'editar_turma': include 'editar_turma.php'; break;
    case 'editar_escola': include 'editar_escola.php'; break;    
    default: include 'views/home.php'; break;    
}
