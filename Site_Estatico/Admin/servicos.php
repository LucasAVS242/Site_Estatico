<?php

require_once 'connect.php';
require_once 'header.php';

?>


<?php
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = intval($_GET['page']);
} else {
    $currentPage = 1;
}

$itemsPerPage = 10;
$offset = ($currentPage - 1) * $itemsPerPage;
$sql = "SELECT * FROM tbServico LIMIT $offset, $itemsPerPage";
$result = $con->query($sql);

if ($result->num_rows > 0) {
?>
    <main id="registros">

        <div class="container">
            <h2><i class="fa-regular fa-clipboard"></i>&nbsp;Lista de Serviços</h2>

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
                        <th>Serviço</th>
                        <th>Descrição</th>
                        <th>Observação</th>
                        <th>Valor</th>
                        <th>Data de Cadastro</th>
                        <th>Cadastrado Por</th>
                        <th width="70px">Editar</th>
                    </tr>
                </thead>

                <tbody>
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
                        echo "<td><a href='editar-servico.php?id=" . $row['idServico'] . "' class='btn btn-editar'><i class='fa-solid fa-pen-to-square'></i></a></td>";
                        echo "</tr>";
                        echo "</form>";
                    }
                    ?>
                </tbody>
            </table>

        <?php
        // Cálcula o número total de páginas
        $sql = "SELECT COUNT(*) AS total FROM tbServico";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $totalItems = $row['total'];
        $totalPages = ceil($totalItems / $itemsPerPage);

        echo  "<ul class='pagination'>";
        // Links para a primeira página e próxima página
        if ($currentPage > 1) {
            echo "<li class='page-item'><a class='page-link' href='?page=1'><i class='fa-solid fa-angles-left'></i></a></li>";
            echo "<li class='page-item'><a class='page-link' href='?page=" . ($currentPage - 1) . "'><i class='fa-solid fa-angle-left'></i></a></li>";
        }


        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $currentPage) {
                echo "<li class='page-item'><span class='page-link active'>$i</span></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
            }
        }

        // Links para a página anterior e para a última página
        if ($currentPage < $totalPages) {
            echo "<li class='page-item'><a class='page-link' href='?page=" . ($currentPage + 1) . "'><i class='fa-solid fa-angle-right'></i></a></li>";
            echo "<li class='page-item'><a class='page-link' href='?page=$totalPages'><i class='fa-solid fa-angles-right'></i></a></li>";
        }
        echo "</ul>";

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
