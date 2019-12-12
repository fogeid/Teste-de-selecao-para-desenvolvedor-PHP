<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=alunos" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=editar_aluno" class="btn btn-primary px-4">Edição</a>
  <a href="?pagina=excluir_aluno" class="btn btn-primary px-4">Excluir</a>
  <a href="?pagina=buscar_alunos" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Pesquisar Aluno</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="pesquisar_aluno.php">
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="buscar_aluno">Nome completo</label>
      <input type="text" name="buscar_aluno" class="form-control" id="buscar_aluno">
    </div>
  </div>
  <button type="submit" class="btn btn-primary col-md-2 container">Enviar</button>
</form>

<table class="table container col-lg-10 center mt-5" id="listar_alunos">
  <thead>
    <tr>
      <th scope="col">Nome do Aluno</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Gênero</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
    </tr>
    <?php
      while($linha = mysqli_fetch_array($listar_alunos)) {
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