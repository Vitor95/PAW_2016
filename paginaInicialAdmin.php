<?php
require_once (realpath(dirname(__FILE__))  .'./Config.php');

use Config as Conf;
require_once './Application/Manager/UtilizadorManager.php';
require_once './Application/Model/Utilizador.php';
require_once './Application/Manager/MoradaManager.php';
require_once './Application/Model/Morada.php';
    ?>
<html>
    <?php
    include './comon/header.php';
    ?>
    <body>

        <?php
        include '/comon/topMenuAdmin.php';
        ?>
        <div class="container">
            <?php
            include '/comon/menuAdmin.html';
            
//            $t=new Morada(1, "rua central", 10, "Braga", 4700-100);
//            $te=new MoradaManager();
//            $te->createMorada($t);
            ?>
            <p> </p>
        </div>

            <?pHP
            include '/comon/footer.php';
            ?>
    </body>
</html>
