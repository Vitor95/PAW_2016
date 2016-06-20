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
        echo "Publicado na area pública!!!";
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
            $a=new UtilizadorManager();
            $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
            $select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
            
            function expirado($id){
               
            $querys="SELECT idoferta FROM ofertastrabalho WHERE idoferta='$id' and dataExpiracao <= DATE(NOW())";
            $result = mysql_query($querys);
            $id = mysql_fetch_row($result);
            $idUtilizador=$id[0];
                       // print_r($idUtilizador);
            return $idUtilizador;
            }
            
            function update($id){
            $sql = "UPDATE ofertastrabalho SET estado = 'Finalizada' WHERE idoferta = '$id'";
            mysql_query($sql);
            }
            
            
            
            
            
            $query_select = "SELECT * FROM ofertastrabalho inner join ofertautilizador on ofertastrabalho.idoferta=ofertautilizador.idoferta where ofertautilizador.utilizador='$logado'";
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
    
    $ename = ($row['utilizador']);
    $eemail = ($row['titulo']);
    $epost = ($row['descritivo']);
    $eid = $row['TipoHorario'];
    $idOferta = $row['idoferta'];$res=expirado($idOferta);
    
    
    echo $eid . '<br/>';echo $idOferta . '<br/>';

    echo $ename . '<br/>';

    echo $eemail . '<br/>';

    echo $epost ;
    
       if($res!==null){
        print_r("<br>"."expirado"."<br>");
                update($idOferta);
      ?>  <button type="submit"><a href="Validations/eliminarOferta.php?cod=<?=$idOferta?>">Eliminar</a></button><section></section><br/><br/><br/>
   <?php   }else{?>
        <button type="submit"><a href="Validations/updateOferta.php?estado=<?="Publicada"?>&cod=<?=$idOferta?>">Publicar</a></button><button type="submit"><a href="Validations/eliminarOferta.php?cod=<?=$idOferta?>">Eliminar</a></button><section></section><br/> <?php
        }
        
        }
            ?>
        </div>

            <?pHP
            include '/comon/footer.php';
            ?>
    </body>
</html>
