<?php if (!isset($_GET['editar'])) { ?>

<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=escolas" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=buscar_escolas" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Cadastrar Escolas</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="processa_escola.php">
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="nome">Nome da escola</label>
      <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Ex: CUIABÁ, VÁRZEA-GRANDE ETC..">        
      </select>
    </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="data_cad">Data</label>
      <input type="text" name="data_cad" class="form-control" id="data_cad" placeholder="Ex: 2000-01-01">        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="situacao">Situação</label>
      <select id="situacao" name="situacao" class="form-control">
        <option selected>Selecione</option>
        <option>Em atividade</option>
        <option>Paralisada</option>
      </select>
    </div>    
  </div>    
  <button type="submit" class="btn btn-primary col-md-2 container">Cadastrar</button>
</form>

<?php } else { ?>
  <?php while ($linha = mysqli_fetch_array($consulta_escolas)) { ?>
    <?php if ($linha['id_escola'] == $_GET['editar']) { ?>

<h1 class="container mt-5 mb-4 text-center">Editar Escola</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="editar_escola.php"> 
  <input type="hidden" name="id_escola" value="<?php echo $linha['id_escola']; ?>"> 
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="nome">Nome da escola</label>
      <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $linha['nome']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Ex: CUIABÁ, VÁRZEA-GRANDE ETC.." value="<?php echo $linha['endereco']; ?>">        
      </select>
    </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="form-group col-md-6">
      <label for="data_cad">Data</label>
      <input type="text" name="data_cad" class="form-control" id="data_cad" placeholder="Ex: 2000-01-01" value="<?php echo $linha['data_cad']; ?>">        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="situacao">Situação</label>
      <select id="situacao" name="situacao" class="form-control" value="<?php echo $linha['situacao']; ?>">
        <option selected>Selecione</option>
        <option>Em atividade</option>
        <option>Paralisada</option>
      </select>
    </div>    
  </div>    
  <button type="submit" class="btn btn-primary col-md-2 container">Editar</button>
</form>
    <?php } ?>
	<?php } ?>
<?php } ?>