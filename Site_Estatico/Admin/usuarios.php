<?php

require_once 'connect.php';
require_once 'header.php';

?>


<?php
$sql = "SELECT * FROM tbUsuario";
$result = $con->query($sql);

if ($result->num_rows > 0) {
?>
    <main id="registros">

        <div class="container">
            <h2><i class="fa-solid fa-user-gear"></i>&nbsp;Lista de Usuários</h2>

            <!-- Caixa de pesquisa -->
            <form style="all: unset;" action="" method="get">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="search" name="pesquisar" value="<?php if (isset($_GET['pesquisar'])) echo $_GET['pesquisar']; ?>" class="form-control" placeholder="Pesquisar">
                    <button type="submit" class="btn btn-success">Pesquisar</button>
                </div>
            </form>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Nível de Acesso</th>
                        <th>Data de Cadastro</th>
                        <th>Cadastrado Por</th>
                        <th width="70px">Editar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (isset($_GET['pesquisar'])) {
                        $filtervalues = $_GET['pesquisar'];
                        $query = "SELECT * FROM tbUsuario WHERE CONCAT(idUsuario,nomeUsuario,nivelAcesso,dataCadastro) LIKE '%$filtervalues%' ";
                        $result = mysqli_query($con, $query);
                    }

                    while ($row = $result->fetch_assoc()) {
                        echo "<form action='' method='POST'>";
                        echo "<input type='hidden' value='" . $row['idUsuario'] . "' name='idUsuario' />";
                        echo "<tr>";
                        echo "<td>" . $row['idUsuario'] . "</td>";
                        echo "<td>" . $row['nomeUsuario'] . "</td>";
                        echo "<td>" . $row['nivelAcesso'] . "</td>";
                        echo "<td>" . $row['dataCadastro'] . "</td>";
                        echo "<td>" . $row['cadastradoPor'] . "</td>";
                        echo "<td><a style='background-color:#3cab7b; border:none; color:#fff;' href='editar-usuario.php?id=" . $row['idUsuario'] . "' class='btn btn-info'><i class='fa-solid fa-pen-to-square'></i></a></td>";
                        echo "</tr>";
                        echo "</form>";
                    }
                    ?>
                </tbody>
            </table>

        <?php
    } else {
        echo "<br><br><div class='alert alert-warning'>Nenhum registro encontrado</div>";
    }
        ?>
        </div>
        </div>
    </main>
    <p style="padding-bottom:13%;"></p>

    <?php
    require_once 'footer.php';
