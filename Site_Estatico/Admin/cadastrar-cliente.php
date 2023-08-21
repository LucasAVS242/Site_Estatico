<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php
    if (isset($_POST['addnew'])) {

        if (
            empty($_POST['nome']) || empty($_POST['cnpj']) ||
            empty($_POST['email']) || empty($_POST['telefone']) ||
            empty($_POST['estado']) || empty($_POST['cidade']) ||
            empty($_POST['cep']) || empty($_POST['bairro']) ||
            empty($_POST['rua']) || empty($_POST['telefone']) ||
            empty($_POST['dataCadastro'] || empty($_POST['cadastradoPor']))
        ) {
            echo "<div class='alert alert-danger'>Por favor preencha todos os campos</div>";
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

            $sql = "INSERT INTO tbCliente(nome,cnpj,email,telefone,estado,cidade,cep,bairro,rua,dataCadastro,cadastradoPor)
                VALUES('$nome','$cnpj','$email','$telefone','$estado','$cidade','$cep','$bairro','$rua','$dataCadastro','$cadastradoPor')";

            if ($con->query($sql) === TRUE) {

                echo "<div class='alert alert-success'>Cliente cadastrado com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro: Ocorreu um erro ao cadastrar as informações do cliente</div>";
            }
        }
    }

    ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="fa-solid fa-plus"></i>&nbsp;Cadastrar Cliente</h3><br>
                <form action="" method="POST" class="row g-3">

                    <div class="col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control"><br>
                    </div>

                    <div class="col-md-4">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" name="cnpj" id="cnpj" class="form-control"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="email">E-mail</label><br>
                        <input type="email" name="email" id="email" class="form-control"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control"><br>
                    </div>

                    <div class="col-md-2">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control form-select">
                            <option value="">...</option>
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

                    <div class="col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="form-control"><br>
                    </div>

                    <div class="col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control"><br>
                    </div>

                    <div class="col-12">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" class="form-control"><br>
                    </div>

                    <div class="col-12">
                        <label for="rua">Rua</label>
                        <input type="text" id="rua" name="rua" class="form-control"><br>
                    </div>

                    <div class="col-md-6">
                        <label for="dataCadastro">Data de Cadastro</label>
                        <input type="text" id="dataCadastro" name="dataCadastro" class="form-control read-only" value="<?php echo date("d/m/Y") ?>" readonly><br>
                    </div>

                    <div class="col-md-6">
                        <label for="cadastradoPor">Cadastrado Por</label>
                        <input type="text" id="cadastradoPor" name="cadastradoPor" class="form-control read-only" value="<?php echo $_SESSION["usuario"] ?>" readonly><br>
                    </div>

                    <br>

                    <div class="col-12">
                        <input type="submit" name="addnew" class="btn btn-success" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';
