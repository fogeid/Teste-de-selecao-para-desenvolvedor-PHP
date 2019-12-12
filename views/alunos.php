<div class="menu-turmas btn-group btn-group-justify d-flex justify-content-center py-5" role="group" aria-label="Basic example">
  <a href="?pagina=alunos" class="btn btn-primary px-4">Cadastro</a>
  <a href="?pagina=editar_aluno" class="btn btn-primary px-4">Edição</a>
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