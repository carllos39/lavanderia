<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>

<table>
    <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Ação</th>
    </tr>
    <?php clientes=listaCliente($conexao);
    foreach( $clientes as $cliente){
    ?>
    <tr>
        <td><?=$cliente['id'] ?></td>
        <td><?=$cliente['nome'] ?></td>
        <td><?=$cliente['email'] ?></td>
        <td><?=$cliente['telefone'] ?></td>
        <td><a href="removeCliente.php? id=<?=$cliente['id']?>">Remover</a></td>
    </tr>
    <?php 
    }
    ?>
</table>