<h1 class="container mb-4 mt-4 text-center">Matricular Aluno</h1>
<table class="table container col-lg-10 center" id="busca_turmas">
  <thead>
    <tr>
      <th scope="col">Escola</th>
      <th scope="col">Série</th>
      <th scope="col">Nível de Ensino</th>
      <th scope="col">Turno</th>
      <th scope="col">Ano</th>
    </tr>
    <?php
      while($linha = mysqli_fetch_array($consulta)) {
        echo 
        '</thead>
          <tbody>
            <tr>
              <td>'.$linha['escola'].'</td>';
          echo '<td>'.$linha['serie'].'</td>';
          echo '<td>'.$linha['nivel_ensino'].'</td>';
          echo '<td>'.$linha['turno'].'</td>';
          echo '<td>'.$linha['ano'].'</td></tr></tbody>';
      }
    ?>
</table>