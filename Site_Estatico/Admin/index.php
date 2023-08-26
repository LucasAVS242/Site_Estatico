<?php

require_once 'connect.php';
require_once 'header.php';

?>
<main>
    <p style="padding-left: 1%;"><i style="color: #46d160;" class="fa-solid fa-circle fa-2xs"></i>&nbsp;Usuário logado: <?php echo $_SESSION['usuario']; ?></p>
    <div class="container">

        <img style="margin-top: 5%; background:none; max-width:100%;height:auto;" class="rounded" src="../images/LOGO BVM CONTABILIDADE(logo 2).png" width="1140" alt="">

    </div>
    </div>
</main>

<?php
require_once 'footer.php';
