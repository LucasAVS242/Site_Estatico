<?php

require_once 'connect.php';
require_once 'header.php';
echo"<div class='container'>";

if(isset($_POST['delete'])){
    $sql="DELETE FROM tbUsuario WHERE idUsuario=".$_POST['idUsuario'];

    if($con->query($sql) === TRUE){
        echo"<br><div class='alert alert-success'>Usuário deletado com sucesso</div>";

    }
}
$sql = "SELECT * FROM tbUsuario";
$result=$con->query($sql);

if($result->num_rows>0)
{
    ?>
    <h2>Lista de Usuários</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Usuário</td>
            <td>Nível de Acesso</td>
            <td>Data de Cadastro</td>
            <td>Cadastrado Por</td>
            <td width="70px">Deletar</td>
            <td width="70px">Editar</td>

        </tr>
        <?php

while($row = $result->fetch_assoc()){
    echo "<form action='' method='POST'>";
    echo "<input type='hidden' value='".$row['idUsuario']."' name='idUsuario' />";
    echo "<tr>";
    echo "<td>".$row['nomeUsuario']."</td>";
    echo "<td>".$row['nivelAcesso']."</td>";
    echo "<td>".$row['dataCadastro']."</td>";
    echo "<td>".$row['cadastradoPor']."</td>";
    echo "<td><input type='submit' name='delete' value='DELETAR' class='btn btn-danger'/></td>";
    echo "<td><a href='editar-usuario.php?id=".$row['idUsuario']."' class='btn btn-info'>EDITAR</a></td>";
    echo "</tr>";
    echo "</form>";
}
?>
</table>
<?php
}
else
{
echo "<br><br><div class='alert alert-warning'>Nenhum registro encontrado</div>";
}
?>
</div>
<?php
require_once'footer.php';



