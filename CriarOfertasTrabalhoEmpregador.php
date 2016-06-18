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
        include '/comon/topMenuEmpregador.php';
        
        ?>

        <div class="container"> 
            <?php
            include '/comon/menuEmpregador.html';
            ?>
            <p>Adicionar Oferta</p>
            <form action="" method="post" id="forms">
                <label>titulo<input placeholder="titulo" type="text" id="ti" name="titulo"></label><br>
                <label>descritivo<input placeholder="descritivo" type="text" id="des" name="descritivo"></label><br>
                <label>requisitos<input placeholder="requisitos" type="text" id="req" name="requisitos"></label><br>
                <label>valores<input placeholder="valores" type="text" id="valores" name="valores"></label><br>
                <label>periodo<input placeholder="periodo" type="text" id="periodo" name="periodo"></label><br>
                <label>tipoHorario<input placeholder="tipoHorario" type="text" id="tipo" name="tipoHorario"></label><br>
                <label>categoria_geral<input placeholder="categoria_geral" type="text" id="catGeral" name="categoria_geral"></label><br>
                <label>categoria_esp<input placeholder="categoria_esp" type="text" id="catEsp" name="categoria_esp"></label><br>
               
                
                <input type="submit" value="Adicionar temporariamente">
                <input type="submit" value="AdicionarBD" name="BD" id="BD" formaction="Validations/validOferta.php">
                <!-- guardar na bd e meter Pendente-->
                
            </form>
        </div>

            <?pHP
            include '/comon/footer.php';
            ?>
    </body>
</html>
