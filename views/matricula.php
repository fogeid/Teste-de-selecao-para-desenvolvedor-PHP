<h1 class="container mb-4 mt-4 text-center">Matricular Aluno</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="processa_escola.php">
  <div class="form-row justify-content-center">
      <div class="form-group col-md-4">
        <label for="escolha_aluno">Aluno</label>
        <select id="escolha_aluno" name="escolha_aluno" class="form-control">
          <option selected>Selecione</option>
          <?php
          while($linha = mysqli_fetch_array($listar_alunos)) {
            echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome'].'</option>';
          }
          ?>      
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="escolha_escola">Escola</label>
        <select id="escolha_escola" name="escolha_escola" class="form-control">
          <option selected>Selecione</option>
          <?php
          while($linha = mysqli_fetch_array($buscar_turmas)) {
            echo '<option value="'.$linha['id_escola'].'">'.$linha['nome'].'</option>';
          }
          ?>      
        </select>
      </div>
  </div>
  <div class="form-row justify-content-center">
      <div class="form-group col-md-3">
        <label for="escolha_turma_serie">Série</label>
        <select id="escolha_turma_serie" name="escolha_turma_serie" class="form-control">
          <option selected>Selecione</option>
          <?php
          while($linha = mysqli_fetch_array($buscar_turmas)) {
            echo '<option value="'.$linha['id_turma'].'">'.$linha['serie'].'</option>';
          }
          ?>      
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="escolha_turma_ne">Nível de Ensino</label>
        <select id="escolha_turma_ne" name="escolha_turma_ne" class="form-control">
          <option selected>Selecione</option>
          <?php
          while($linha = mysqli_fetch_array($buscar_turmas)) {
            echo '<option value="'.$linha['id_turma'].'">'.$linha['nivel_ensino'].'</option>';
          }
          ?>      
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="escolha_turma_turno">Turno</label>
        <select id="escolha_turma_turno" name="escolha_turma_turno" class="form-control">
          <option selected>Selecione</option>
          <?php
          while($linha = mysqli_fetch_array($buscar_turmas)) {
            echo '<option value="'.$linha['id_turma'].'">'.$linha['turno'].'</option>';
          }
          ?>      
        </select>
      </div>
    </div>
  </div>
</form>