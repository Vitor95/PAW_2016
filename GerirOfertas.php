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
   
            ?>
            <button id="ver">Ver formulário</button>
            <div id="buttons">
            <p>Adicionar Oferta</p>
            <form action="Validations/validOferta.php" method="post">
                <label>titulo<input placeholder="titulo" type="text" name="titulo"></label><br>
                <label>descritivo<input placeholder="descritivo" type="text" name="descritivo"></label><br>
                <label>requisitos<input placeholder="requisitos" type="text" name="requisitos"></label><br>
                <label>valores<input placeholder="valores" type="text" name="valores"></label><br>
                <label>periodo<input placeholder="periodo" type="text" name="periodo"></label><br>
                <label>tipoHorario<input placeholder="tipoHorario" type="text" name="tipoHorario"></label><br>
                <label>categoria_geral<input placeholder="categoria_geral" type="text" name="categoria_geral"></label><br>
                <label>categoria_esp<input placeholder="categoria_esp" type="text" name="categoria_esp"></label><br>
                <button type="submit" class="addEmp">Adicionar</button>
            </form>
            </div>
            <?php
            $a=new UtilizadorManager();
            $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
            $query_select = "SELECT * FROM ofertastrabalho";
$result_select = mysql_query($query_select) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
foreach($rows as $row){ 
    ?><section></section><?php
    $ename = ($row['idoferta']);
    $eemail = ($row['titulo']);
    $epost = ($row['descritivo']);
    $eid = $row['requisitos'];
    
    echo $eid . '<br/>';

    echo $ename . '<br/>';

    echo $eemail . '<br/>';

    echo $epost . '<br/><br/><br/><br/>';
    ?><button type="submit"><a href="Validations/validEliminarEmp.php?cod=<?=$ename?>">Eliminar</a></button><section></section> <?php
}
            ?>
        </div>

            <?php
            include '/comon/footer.php';
            ?>
    </body>
</html>

