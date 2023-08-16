<?php

require_once 'connect.php';
require_once 'header.php';
echo"<div class='container'>";

if(isset($_POST['delete'])){
    $sql="DELETE FROM users WHERE user_id=".$_POST['userid'];

    if($con->query($sql) === TRUE){
        echo"<br><div class='alert alert-success'>Usuário deletado com sucesso</div>";

    }
}
$sql = "SELECT * FROM users";
$result=$con->query($sql);

if($result->num_rows>0)
{
    ?>
    <h2>Lista de Usuários</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Endereço</td>
            <td>Contato</td>
            <td width="70px">Deletar</td>
            <td width="70px">Editar</td>

        </tr>
        <?php

while($row = $result->fetch_assoc()){
    echo "<form action='' method='POST'>";   //added
    echo "<input type='hidden' value='".$row['user_id']."' name='userid' />";   //added
    echo "<tr>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "<td><input type='submit' name='delete' value='DELETAR' class='btn btn-danger'/></td>";
    echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>EDITAR</a></td>";
    echo "</tr>";
    echo "</form>";//added
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



