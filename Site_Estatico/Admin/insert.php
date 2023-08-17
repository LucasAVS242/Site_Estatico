<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php
    if (isset($_POST['addnew'])) {

        if (
            empty($_POST['firstname']) || empty($_POST['lastname']) ||
            empty($_POST['address']) || empty($_POST['contact'])
        ) {
            echo "<div class='alert alert-danger'>Por favor preencha todos os campos</div>";
        } else {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];

            $sql = "INSERT INTO users(firstname,lastname,address,contact)
                VALUES('$firstname','$lastname','$address','$contact')";

            if ($con->query($sql) === TRUE) {

                echo "<div class='alert alert-success'>Usuário adicionado com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro: Ocorreu um erro ao atualizar a informação do usuário</div>";
            }
        }
    }

    ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Adicionar Usuário</h3>
                <form action="" method="POST">
                    <label for="firstname">Nome</label>
                    <input type="text" id="firstname" name="firstname" class="form-control"><br>

                    <label for="lastname">Sobrenome</label>
                    <input type="text" name="lastname" id="lastname" class="form-control"><br>

                    <label for="address">Endereço</label>
                    <textarea rows="4" name="address" class="form-control"></textarea><br>

                    <label for="contact">Contato</label>
                    <input type="text" name="contact" id="contact" class="form-control"><br>

                    <br>

                    <input type="submit" name="addnew" class="btn btn-success" value="Adicionar">

                </form>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';
