<?php if (!isset($_GET['editar'])) { ?>

<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=alunos" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=buscar_alunos" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Cadastrar Alunos</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="processa_aluno.php">
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="nome">Nome completo</label>
      <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="data_nascimento">Data de nascimento</label>
      <input type="text" name="data_nascimento" class="form-control" id="data_nascimento" placeholder="Ex: 01-01-2000">        
      </select>
    </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="form-group col-md-3">
      <label for="genero">Gênero</label>
      <select id="genero" name="genero" class="form-control">
        <option selected>Selecione</option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Ex: 65987654321">
    </div>
    <div class="form-group col-md-4">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
  </div>    
  <button type="submit" class="btn btn-primary col-md-2 container">Cadastrar</button>
</form>

<?php } else { ?>
  <?php while ($linha = mysqli_fetch_array($listar_alunos)) { ?>
    <?php if ($linha['id_aluno'] == $_GET['editar']) { ?>

<h1 class="container mb-4 mt-5 text-center">Editar Aluno</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="editar_aluno.php">
  <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="nome">Nome completo</label>
      <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $linha['nome']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="data_nascimento">Data de nascimento</label>
      <input type="text" name="data_nascimento" class="form-control" id="data_nascimento" placeholder="Ex: 01-01-2000" value="<?php echo $linha['data_nascimento']; ?>">        
      </select>
    </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="form-group col-md-3">
      <label for="genero">Gênero</label>
      <select id="genero" name="genero" class="form-control" value="<?php echo $linha['genero']; ?>">
        <option selected>Selecione</option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Ex: 65987654321" value="<?php echo $linha['telefone']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control" id="email" value="<?php echo $linha['email']; ?>">
    </div>
  </div>    
  <button type="submit" class="btn btn-primary col-md-2 container">Editar</button>
</form>
    <?php } ?>
	<?php } ?>
<?php } ?>