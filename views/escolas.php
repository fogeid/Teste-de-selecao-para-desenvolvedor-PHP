<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=escolas" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=editar_escola" class="btn btn-primary px-4">Edição</a>
  <a href="?pagina=buscar_escolas" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Cadastrar Escola</h1>
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
      <input type="text" name="data_cad" class="form-control" id="data_cad" placeholder="Ex: 01-01-2000">        
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