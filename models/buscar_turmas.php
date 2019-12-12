<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=turmas" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=editar_turma" class="btn btn-primary px-4">Edição</a>
  <a href="?pagina=buscar_turmas" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Listar Turmas</h1>
<table class="table container col-lg-10 center" id="buscar_turmas">
  <thead>
    <tr>
      <th scope="col">Série</th>
      <th scope="col">Nível de Ensino</th>
      <th scope="col">Turno</th>
      <th scope="col">Ano</th>
      <th scope="col">Excluir</th>
    </tr>

    <?php
      while($linha = mysqli_fetch_array($buscar_turmas)) {
        echo 
        '</thead>
          <tbody>
            <tr>
              <td>'.$linha['serie'].'</td>';
          echo '<td>'.$linha['nivel_ensino'].'</td>';
          echo '<td>'.$linha['turno'].'</td>';
          echo '<td>'.$linha['ano'].'</td>';     
    ?>
              <td><a href="excluir_turma.php?id_turma=<?php echo $linha['id_turma']; ?>">Deletar</a></td>
            </tr>
          </tbody>
  <?php
   }
  ?>    
</table>