
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
            <div id="divPesquisaCategoria">
                <div id="formPesquisa">
                    <form action="pesquisarOfertas.php" method="get">
                        <img src="images/search_icon.png" alt="Pesquisar..."/>
                        <input id="txtPesquisa"  type="text" name="descritivo" placeholder="Pesquisar..."/>
                        <select name="categoriaPesquisa" id="categoriaPesquisa" >
                            <option value="*">Todas as categorias</option>
                            <!--                        <option value="">Saab</option>
                                                        <option value="fiat">Fiat</option>
                                                        <option value="audi">Audi</option>-->
                        </select>
                        <!--<input type="text" id="txtPesquisa" placeholder="Selecione a categoria..."/>-->
                        <button id="btnPesquisa" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
            <hr id="linha">


            <?php
            // session_start inicia a sessão
            session_start();
            $descritivo = null;
            $categoria = null;
            if(isset($_GET['descritivo']))$descritivo = $_GET['descritivo'];
            if(isset($_GET['categoriaPesquisa']))$categoria = $_GET['categoriaPesquisa'];
            
            if($descritivo!=null||$categoria!=null){
                
          

                $a = new OfertaTrabalhoManager();
                $con = mysql_connect("localhost", "root", "") or die("Sem conexão com o servidor");
                $select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
                
                if($categoria=='*'){
                $query_select = "SELECT * FROM ofertastrabalho WHERE descritivo LIKE '%".$descritivo."%';";
                
                }else{
                $query_select = "SELECT * FROM ofertastrabalho WHERE CONTAINS(descritivo,'".$descritivo."') AND CONTAINS(categoria_geral,'".$categoria."');";
               
                }
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
            
            }
            
            ?>

        </div>

        <?pHP
        include '/comon/footer.php';
        ?>

        <?php
        ?>
    </body>
</html>
