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
        include '/comon/topMenuPrestador.php';
        ?>

        <div class="container">
            <?php
            include '/comon/menuPreServico.html';
            ?>
            <?php
            $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");

//Obter id do Presente utilizador/prestador

$query_s = "SELECT idUtilizador FROM utilizador where perfil= 'prestador' and username='$logado'";
$results = mysql_query($query_s);
$id = mysql_fetch_row($results);
$idUtilizador=$id[0];




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
    ?><button type="submit"><a href="Validations/validCandidatura.php?cod=<?=$ename?>&estado=<?="Submetido"?>&idC=<?=$idUtilizador?>&username=<?=$logado?>">Candidatar</a></button><button type="submit"><a href="Validations/updateFavorito.php?cod=<?=$ename?>&estado=<?="Favorito"?>&idC=<?=$idUtilizador?>&username=<?=$logado?>">Guardar como Favorito</a></button><section></section> <?php
}
            ?>
        </div>
        <?pHP
        include '/comon/footer.php';
        ?>
    </body>
</html>
