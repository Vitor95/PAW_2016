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
            <p>Adicionar Prestador</p>
            <form action="Validations/validAddEmpPre.php" method="post">
                <label>nome<input placeholder="Utilizador" type="text" name="nome"></label><br>
                <label>foto<input placeholder="foto" type="text" name="foto"></label><br>
                <label>contacto<input placeholder="contacto" type="text" name="contacto"></label><br>
                <label>email<input placeholder="email" type="text" name="email"></label><br>
                <label>perfil<select placeholder="perfil" type="text" name="tipo" selected="selected">
                                <option>prestador</option>
                    </select><br><label>username<input placeholder="username" type="text" name="username"></label><br>
                <label>password<input placeholder="username" type="password" name="password"></label><br>
                <button type="submit" class="addEmp">Adicionar</button>
            </form>
            </div>
            <?php
            $a=new UtilizadorManager();
            $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
            $query_select = "SELECT * FROM utilizador where perfil= 'prestador'";
$result_select = mysql_query($query_select) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
foreach($rows as $row){ 
    ?><section></section><?php
    $ename = ($row['nome']);
    $eemail = ($row['email']);
    $epost = ($row['perfil']);
    $eid = $row['idUtilizador'];
    
    echo $eid . '<br/>';

    echo $ename . '<br/>';

    echo $eemail . '<br/>';

    echo $epost . '<br/><br/><br/><br/>';
    ?><button type="submit"><a href="Validations/validEliminarEmp.php?cod=<?=$eid?>">Eliminar</a></button><section></section> <?php
}
            ?>
        </div>

            <?php
            include '/comon/footer.php';
            ?>
    </body>
</html>

