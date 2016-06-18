<!DOCTYPE html>
<?php
require_once (realpath(dirname(__FILE__)) . './Config.php');

use Config as Conf;

require_once './Application/Manager/OfertaTrabalhoManager.php';
?>
<html>

    <?php
    include './comon/header.php';
    ?>
    <body>
        <?php
        include '/comon/topMenu.php';
        ?>

        <div class="container">


            <p class="title center">OFERTAS DE EMPREGO</p>  
            <hr id="linha">
            <?php
            $a = new OfertaTrabalhoManager();
            $con = mysql_connect("localhost", "root", "") or die("Sem conexão com o servidor");
            $select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
            $query_select = "SELECT * FROM ofertastrabalho";
            $result_select = mysql_query($query_select) or die(mysql_error());
            $rows = array();
            while ($row = mysql_fetch_array($result_select))
                $rows[] = $row;

            echo '<table class="tables">';
            echo '<tr>
                <td class="table_title">TÍTULO</td>
                <td class="table_title">DESCRITIVO</td>
                <td class="table_title">REQUISITOS</td>
                <td class="table_title">CATEGORIA</td>
                </tr>';

            foreach ($rows as $row) {

                $titulo = ($row['titulo']);
                $descritivo = ($row['descritivo']);
                $requisitos = ($row['requisitos']);
                $categoria_especifica = $row['categoria_especifica'];
                echo '<tr>
                <td>' . $titulo . '</td>
                <td>' . $descritivo . '</td>
                <td>' . $requisitos . '</td>
                <td>' . $categoria_especifica . '</td>
                </tr>';
            }
            echo '</table>';
            ?>
        </div>

        <?php
        include '/comon/footer.php';
        ?>

    </body>
</html>
