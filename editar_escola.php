<?php 

include 'db.php';

$id_escola = $_POST['id_escola'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$data_cad = $_POST['data_cad'];
$situacao = $_POST['situacao'];

$query = "UPDATE escolas SET nome='$nome', endereco='$endereco', data_cad='$data_cad', situacao='$situacao'
        WHERE id_escola = $id_escola";
        
mysqli_query($conexao, $query);

header('location:index.php?pagina=buscar_escolas');