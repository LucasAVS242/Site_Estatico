<?php

require_once 'connect.php';
require_once 'header.php';

?>


<?php
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM tbServico WHERE idServico=" . $_POST['idServico'];

    if ($con->query($sql) === TRUE) {
        echo "<br><div class='container alert alert-success'>Serviço deletado com sucesso</div>";
    }
}
$sql = "SELECT * FROM tbServico";
$result = $con->query($sql);

if ($result->num_rows > 0) {
?>
    <main id="registros">
        <div class="container">
            <h2><i class="fa-solid fa-user"></i>&nbsp;Lista de Serviços</h2>
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
                    <th>Serviço</th>
                    <th>Descrição</th>
                    <th>Observação</th>
                    <th>Valor</th>
                    <th>Data de Cadastro</th>
                    <th>Cadastrado Por</th>
                    <th width="70px">Deletar</th>
                    <th width="70px">Editar</th>

                </tr>

                <?php
                if (isset($_GET['pesquisar'])) {
                    $filtervalues = $_GET['pesquisar'];
                    $query = "SELECT * FROM tbServico WHERE CONCAT(idServico,nome,descricao,observacao,cadastradoPor,dataCadastro) LIKE '%$filtervalues%' ";
                    $result = mysqli_query($con, $query);
                }


                while ($row = $result->fetch_assoc()) {
                    echo "<form action='' method='POST'>";
                    echo "<input type='hidden' value='" . $row['idServico'] . "' name='idServico' />";
                    echo "<tr>";
                    echo "<td>" . $row['idServico'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['descricao'] . "</td>";
                    echo "<td>" . $row['observacao'] . "</td>";
                    echo "<td>" . $row['valor'] . "</td>";
                    echo "<td>" . $row['dataCadastro'] . "</td>";
                    echo "<td>" . $row['cadastradoPor'] . "</td>";
                    echo "<td><input type='submit' name='delete' value='DELETAR' class='btn btn-danger'/></td>";
                    echo "<td><a style='background-color:#3cab7b; border:none; color:#fff;' href='editar-servico.php?id=" . $row['idServico'] . "' class='btn btn-info'>EDITAR</a></td>";
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
