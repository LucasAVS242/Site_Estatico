<?php

require_once 'connect.php';

echo"<div class='container'>";

if(isset($_POST['delete'])){
    $sql="DELETE FROM tbUsuario WHERE idUsuario=".$_POST['idUsuario'];

    if($con->query($sql) === TRUE){
        echo"<div class='alert alert-success'>O usuario foi deletado com sucesso</div>";

    }
}
$sql = "SELECT * FROM tbUsuario";
$result=$con->query($sql);

if($result->num_rows>0)
{
    ?>
    <h2>Lista de todos os usuarios</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Endereço</td>
            <td>Contato</td>
            <td width="70px">Deletar</td>
            <td width="70px">EDIT</td>

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
    echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger'/></td>";
    echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
    echo "</tr>";
    echo "</form>";//added
}
?>
</table>
<?php
}
else
{
echo "<br><br>No Record Found";
}
?>
</div>





