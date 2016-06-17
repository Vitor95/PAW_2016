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
                <div id="divPesquisaCategoria">
                    <div id="formPesquisa">
                        <img src="images/search_icon.png" alt="Pesquisar..."/>
                        <input type="text" id="txtPesquisa" placeholder="Pesquisar..."/>
                        <select name="categoriaPesquisa" id="categoriaPesquisa" >
                            <option value="*">Todas as categorias</option>
                            <!--                        <option value="">Saab</option>
                                                        <option value="fiat">Fiat</option>
                                                        <option value="audi">Audi</option>-->
                        </select>
                        <!--<input type="text" id="txtPesquisa" placeholder="Selecione a categoria..."/>-->
                        <button id="btnPesquisa">Pesquisar</button>
                    </div>
                </div>
                <hr id="linha_pesquisa">
          
        </div>

        <?pHP
        include '/comon/footer.php';
        ?>

        <?php
        ?>
    </body>
</html>
