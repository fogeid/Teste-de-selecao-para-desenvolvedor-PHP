<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=turmas" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=editar_turma" class="btn btn-primary px-4">Edição</a>
  <a href="?pagina=excluir_turma" class="btn btn-primary px-4">Excluir</a>
  <a href="?pagina=buscar_turmas" class="btn btn-primary px-4">Listar</a>
</div>

<h1 class="container mb-4 text-center">Cadastrar Turmas</h1>
<form class="container d-flex flex-column col-md-8" method="POST" action="processa_turma.php">
  <div class="form-row justify-content-center">
    <div class="form-group col-md-4">
      <label for="serie">Série</label>
      <select id="serie" name="serie" class="form-control">
        <option selected>Selecione</option>
        <option>1º Ano</option>
        <option>2º Ano</option>
        <option>3º Ano</option>
        <option>4º Ano</option>
        <option>5º Ano</option>
        <option>6º Ano</option>
        <option>7º Ano</option>
        <option>8º Ano</option>
        <option>9º Ano</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="nivel_ensino">Nível de Ensino</label>
      <select id="nivel_ensino" name="nivel_ensino" class="form-control">
        <option selected>Selecione</option>
        <option>Fundamental</option>
        <option>Médio</option>
      </select>
    </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="form-group col-md-4">
      <label for="turno">Turno</label>
      <select id="turno" name="turno" class="form-control">
        <option selected>Selecione</option>
        <option>Matutino</option>
        <option>Vespertino</option>
        <option>Noturno</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="ano">Ano</label>
      <input type="number" name="ano" class="form-control" id="ano" placeholder="Ex: 2019">
    </div>
  </div>  
  <button type="submit" class="btn btn-primary col-md-2 container">Cadastrar</button>
</form>