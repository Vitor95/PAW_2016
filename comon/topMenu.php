<div class="container">
    <div class="Autenticacao">

        <div class="lfloat"> 
            <a href="index.php">  <img id="img_logo" src="images/img_logo.png" > </a>
        </div>
        <div class="rfloat">
            <p class="title">AUTENTICAÇÃO</p>
            <form action="Validations/validUtilizador.php" method="post">
            <table>
                <tbody> 
                    <tr>
                        <td>
                            <label class="subtitle" > Nome Utilizador </label>
                        </td>
                        <td>
                            <label class="subtitle" > Password </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input placeholder="Utilizador" type="text" name="username">
                        </td>
                        <td>
                            <input placeholder="" type="password" name="password">
                        </td>
                        <td>
                            <button id="btn_iniciar_sessao" type="submit">Iniciar sessão</button>
                        </td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><label class="subtitle" >Esqueceste-te da tua conta?</label></td>
                        <td><a href="Registo.php"><button id="btn_registar">Regista-te</a></button></td>
                    </tr>
                </tbody> 
            </table></form>
            <hr id="linha_autenticacao">
            
        </div>
    </div>
</div>
<div class="menubar">
    <div id="nav">
        <ul>
            <li><a href="index.php">PÁGINA INICIAL</a></li>
            <li><a href="ofertasEmprego.php">OFERTAS DE EMPREGO</a></li>
            <li><a href="pesquisarOfertas.php">PESQUISAR OFERTAS</a></li>
            <li><a href="">CONTACTOS</a></li>
            <li><a href="">SOBRE</a></li>
        </ul>
    </div>

</div>

