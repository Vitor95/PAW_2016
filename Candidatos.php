<?php
require_once (realpath(dirname(__FILE__))  .'./Config.php');

use Config as Conf;
require_once './Application/Manager/UtilizadorManager.php';
require_once './Application/Model/Utilizador.php';
require_once './Application/Manager/MoradaManager.php';
require_once './Application/Model/Morada.php';
if(isset($_GET['status'])){
     $status = $_GET['status'];
     if($status == 1){
        echo "Sucesso!!!";
     }else if($status == 0){
        echo "Erro";
     }
 }
    ?>
<html>
    <?php
    include './comon/header.php';
    ?>
    <body>

        <?php
        include '/comon/topMenuEmpregador.php';
        
        ?>

        <div class="container"> 
            <?php
            include '/comon/menuEmpregador.html';
            ?>
          <?php
          $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
            $select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
            
            $query_select = "SELECT * FROM ofertautilizador inner join ofertastrabalho on ofertautilizador.idoferta=ofertastrabalho.idoferta where ofertautilizador.estado='Submetido'";
$result_select = mysql_query($query_select) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
        $rows[] = $row;
    if (empty($rows))
{
        print_r("Não existem ofertas da sua Parte");
}
foreach($rows as $row){
    ?><section class="section"></section><?php
    
    $ename = ($row['username']);
    $idoferta = ($row['idOferta']);
   
    echo 'Candidato:'.$ename . '<br/>';
    echo 'O id da oferta em que '.$ename.' se candidatou foi ' .$idoferta . '<br/>';
    ?> <button type="submit"><a href="Validations/updateexpirado.php?cod=<?=$idoferta?>&estado=<?="Expirado"?>">Aceitar candidatura</a></button><?php

    echo '<br/>'.'<br/>'; 
}
    ?>
   
        </div>

            <?pHP
            include '/comon/footer.php';
            ?>
        
    </body>
</html>
