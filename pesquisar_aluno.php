<?php
    include 'db.php';

    $buscar_aluno = $_POST['buscar_aluno'];
    $query = "SELECT * FROM alunos WHERE nome LIKE '%$buscar_aluno%' LIMIT 5";
    $pesquisar_aluno = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Teste de seleção para desenvolvedor PHP</title>
        <link href="https://fonts.googleapis.com/css?family=Blinker:300,400,600,700&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            .conteudo {
                height: 650px;
            }
        </style>
    </head>
    <body>
        <!-- HEADER -->
        <header class="header">
           <a href="/estudadotcom/?pagina=index"><img src="img/logo.png" alt="Logo"></a>
            <nav class="menu">
                <ul>
                    <li><a href="/estudadotcom/?pagina=alunos">Alunos</a></li>
                    <li><a href="/estudadotcom/?pagina=turmas">Turmas</a></li>
                    <li><a href="/estudadotcom/?pagina=escolas">Escolas</a></li>
                    <li><a href="/estudadotcom/?pagina=matricula" class="btn-sucesso">Matricula</a></li>
                </ul>
            </nav>
        </header>

        <!-- CONTEÚDO -->
        <div class="conteudo">
            <div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
                <a href="/estudadotcom/?pagina=alunos" class="btn btn-primary px-4">Cadastro</a>
                <a href="/estudadotcom/?pagina=editar_aluno" class="btn btn-primary px-4">Edição</a>
                <a href="/estudadotcom/?pagina=excluir_aluno" class="btn btn-primary px-4">Excluir</a>
                <a href="/estudadotcom/?pagina=buscar_alunos" class="btn btn-primary px-4">Listar</a>
            </div>

            <h1 class="container mb-4 text-center">Pesquisar Aluno</h1>
            <table class="table container col-lg-10 center mt-5" id="pesquisar_aluno">
            <thead>
                <tr>
                <th scope="col">Nome do Aluno</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Gênero</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                </tr>
                <?php
                while($linha = mysqli_fetch_array($pesquisar_aluno)) {
                    echo 
                    '</thead>
                    <tbody>
                        <tr>
                        <td>'.$linha['nome'].'</td>';
                    echo '<td>'.$linha['data_nascimento'].'</td>';
                    echo '<td>'.$linha['genero'].'</td>';
                    echo '<td>'.$linha['telefone'].'</td>';
                    echo '<td>'.$linha['email'].'</td></tr></tbody>';
                }
                ?>
            </table>
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <p>Developed by Diego Batista</p>
        </footer>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>