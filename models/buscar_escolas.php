<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=escolas" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=editar_escola" class="btn btn-primary px-4">Edição</a>
  <a href="?pagina=buscar_escolas" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Listar Escolas</h1>
<table class="table container col-lg-10 center" id="buscar_turmas">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Data do Cadastro</th>
      <th scope="col">Situação</th>
    </tr>
    <?php
      while($linha = mysqli_fetch_array($consulta_escolas)) {
        echo 
        '</thead>
          <tbody>
            <tr>
              <td>'.$linha['nome'].'</td>';
          echo '<td>'.$linha['endereco'].'</td>';
          echo '<td>'.$linha['data_cad'].'</td>';
          echo '<td>'.$linha['situacao'].'</td>';
    ?>

          <td><a href="excluir_escola.php?id_escola=<?php echo $linha['id_escola']; ?>">Deletar</a></td>
            </tr>
          </tbody>

   <?php
      }
   ?>
</table>