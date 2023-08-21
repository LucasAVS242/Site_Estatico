<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php
    if (isset($_POST['update'])) {
        if (
            empty($_POST['nome']) || empty($_POST['cnpj']) ||
            empty($_POST['email']) || empty($_POST['telefone']) ||
            empty($_POST['estado']) || empty($_POST['cidade']) ||
            empty($_POST['cep']) || empty($_POST['bairro']) ||
            empty($_POST['rua']) || empty($_POST['telefone']) ||
            empty($_POST['dataCadastro'] || empty($_POST['cadastradoPor']))
        ) {
            echo "<div class='alert alert-warning'>Por favor preencha todos os campos</div>";
        } else {

            $nome = $_POST['nome'];
            $cnpj = $_POST['cnpj'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $cep = $_POST['cep'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $dataCadastro = $_POST['dataCadastro'];
            $cadastradoPor = $_POST['cadastradoPor'];
            $sql = "UPDATE tbCliente SET nome='{$nome}', cnpj='{$cnpj}', email='{$email}', telefone='{$telefone}', 
            estado='{$estado}', cidade='{$cidade}', cep='{$cep}', bairro='{$bairro}', rua='{$rua}', 
            dataCadastro='{$dataCadastro}', cadastradoPor='{$cadastradoPor}' WHERE idCliente=" . $_POST['idCliente'];

            if ($con->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Cliente atualizado com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro: Ocorreu um erro ao atualizar as informações do cliente</div>";
            }
        }
    }

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $sql = "SELECT * FROM tbCliente WHERE idCliente={$id}";
    $result = $con->query($sql);

    if ($result->num_rows < 1) {
        header('Location: index.php');
        exit;
    }

    $row = $result->fetch_assoc();
    ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar Cliente</h3><br>
                <form action="" method="POST" class="row g-3">
                    <input type="hidden" value="<?php echo $row['idCliente']; ?>" name="idCliente">

                    <div class="col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" class="form-control" maxlength="50"><br>
                    </div>

                    <div class="col-md-4">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" name="cnpj" id="cnpj" value="<?php echo $row['cnpj']; ?>" class="form-control" maxlength="14"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="email">E-mail</label><br>
                        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control" maxlength="50"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" value="<?php echo $row['telefone']; ?>" class="form-control" autocomplete="tel" maxlength="13"><br>
                    </div>

                    <div class="col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" value="<?php echo $row['cep']; ?>" class="form-control" autocomplete="postal-code" maxlength="9"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']; ?>" class="form-control" maxlength="100"><br>
                    </div>

                    <div class="col-md-2">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control form-select">
                            <option value="<?php echo $row['estado']; ?>"><?php echo $row['estado']; ?></option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select><br>
                    </div>

                    <div class="col-12">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" value="<?php echo $row['bairro']; ?>" class="form-control" maxlength="100"><br>
                    </div>

                    <div class="col-12">
                        <label for="rua">Rua</label>
                        <input type="text" id="rua" name="rua" value="<?php echo $row['rua']; ?>" class="form-control" maxlength="100"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="dataCadastro">Data de Cadastro</label>
                        <input type="text" id="dataCadastro" name="dataCadastro" class="form-control read-only" value="<?php echo $row['dataCadastro']; ?>" readonly><br>
                    </div>

                    <div class="col-md-6">
                        <label for="cadastradoPor">Cadastrado Por</label>
                        <input type="text" id="cadastradoPor" name="cadastradoPor" class="form-control read-only" value="<?php echo $row['cadastradoPor']; ?>" readonly><br>
                    </div>

                    <br>

                    <div class="col-12">
                        <input type="submit" name="update" class="btn btn-success" value="Atualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
