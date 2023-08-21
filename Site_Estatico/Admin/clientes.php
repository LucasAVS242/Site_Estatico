<?php

require_once 'connect.php';
require_once 'header.php';

?>


<?php
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM tbCliente WHERE idCliente=" . $_POST['idCliente'];

    if ($con->query($sql) === TRUE) {
        echo "<br><div class='container alert alert-success'>Cliente deletado com sucesso</div>";
    }
}
$sql = "SELECT * FROM tbCliente";
$result = $con->query($sql);

if ($result->num_rows > 0) {
?>
    <main id="registros">
        <div class="container">
            <h2><i class="fa-solid fa-user"></i>&nbsp;Lista de Clientes</h2>
            <form style="all: unset;" action="" method="get">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" name="pesquisar" value="<?php if (isset($_GET['pesquisar'])) echo $_GET['pesquisar']; ?>" class="form-control" placeholder="Pesquisar">
                    <button type="submit" class="btn btn-success">Pesquisar</button>
                </div>
            </form>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>CNPJ</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Bairro</th>
                    <th>Rua</th>
                    <th>Data de Cadastro</th>
                    <th>Cadastrado Por</th>
                    <th>Deletar</th>
                    <th>Editar</th>

                </tr>

                <?php
                if (isset($_GET['pesquisar'])) {
                    $filtervalues = $_GET['pesquisar'];
                    $query = "SELECT * FROM tbCliente WHERE CONCAT(idCliente,nome,cnpj,telefone,estado,cidade,cep,bairro,rua,dataCadastro) LIKE '%$filtervalues%' ";
                    $result = mysqli_query($con, $query);
                }


                while ($row = $result->fetch_assoc()) {
                    echo "<form action='' method='POST'>";
                    echo "<input type='hidden' value='" . $row['idCliente'] . "' name='idCliente' />";
                    echo "<tr>";
                    echo "<td>" . $row['idCliente'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>". $row['cnpj']. "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telefone'] . "</td>";
                    echo "<td>" . $row['estado'] . "</td>";
                    echo "<td>" . $row['cidade'] . "</td>";
                    echo "<td>" . $row['cep'] . "</td>";
                    echo "<td>" . $row['bairro'] . "</td>";
                    echo "<td>" . $row['rua'] . "</td>";
                    echo "<td>". $row['dataCadastro']. "</td>";
                    echo "<td>" . $row['cadastradoPor'] . "</td>";
                    echo "<td><input type='submit' name='delete' value='DELETAR' class='btn btn-danger'/></td>";
                    echo "<td><a style='background-color:#3cab7b; border:none; color:#fff;' href='editar-cliente.php?id=" . $row['idCliente'] . "' class='btn btn-info'>EDITAR</a></td>";
                    echo "</tr>";
                    echo "</form>";
                }
                ?>
            </table>
        <?php
    } else {
        echo "<br><br><div class='alert alert-warning'>Nenhum registro encontrado</div>";
    }
        ?>
        </div>
        </div>
    </main>
    <?php
    require_once 'footer.php';
