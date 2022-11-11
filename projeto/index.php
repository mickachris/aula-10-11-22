<?php
require 'config.php';

$lista =[];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem de Usuários</h1>

<table border="2">
    <tr>
        <tr>ID</tr>
        <tr>Nome</tr>
        <tr>Email</tr>
        <tr>Ações</tr>
    </tr>
<?php foreach($lista as $usuario):?>
<tr>
    <td><?=$usuario['id'];?></td>
    <td><?=$usuario['nome'];?></td>
    <td><?=$usuario['email'];?></td>
    <td>
        <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
        <a href="excluir.php?id=<?=$usuario['id'];?>">[ Excluir ]</a>
    </td>
</tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Usuário</a>
