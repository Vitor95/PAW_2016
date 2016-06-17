<?php
require_once (realpath(dirname(__FILE__)) . '/Config.php');

use Config as Conf;

require_once (Conf::getApplicationDatabasePath() . 'MyDataAccessPDO.php');
require_once './Application/Model/Utilizador.php';
require_once './Application/Manager/UtilizadorManager.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include './comon/header.php';
    ?>
    <body>
        
            <?php
            include '/comon/topMenu.php';
            ?>
        <div class="container">
            <div id="divPesquisa">
                <img src="images/search_icon.png" alt="Pesquisar..."/>
                <input type="text" id="txtPesquisa" placeholder="Pesquisar..."/>
                <button id="btnPesquisa">Pesquisar</button>
            </div>
        </div>
        <?php
//        $passwords="admin";
//       $AI=  md5($passwords);
//           $a=new Utilizador("Samuels", "ljsfnlei", 911111115, "Samuel@hotmail.com", "admin", "Samuels", $AI);
//        $aa=new UtilizadorManager();
//        $aa->createUtilizador($a);
        ?>
        
        
        
        
            <?pHP
            include '/comon/footer.php';
            ?>
      
    </body>
</html>
