<?php

require_once 'connect.php';
require_once 'header.php';

?>
<main>
    <p>Usuário logado: <?php echo $_SESSION['usuario']; ?></p>
    <div class="container">

        <img style="margin-top: 5%; background:none;" class="rounded" src="../images/LOGO BVM CONTABILIDADE(logo 2).png" width="1140" alt="">

    </div>
    </div>
</main>

<?php
require_once 'footer.php';
