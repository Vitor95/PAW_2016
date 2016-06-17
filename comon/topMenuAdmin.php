<?php
session_start();  //para validar se a sessao foi iniciada
if ((!isset($_SESSION['username']) == true) and ( !isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('location:index.php');
}
if (isset($_GET['success']) && $_GET['success'] == 1) {
    ?>
    <script>
        alert('Sucesso');
        window.location.href = 'indexAdministrador.php?success=1';
    </script>
    <?php
}$logado = $_SESSION['username'];?>
<div class="container">
    <div class="Autenticacao">

        <div class="lfloat"> 
            <a href="paginaInicialAdmin.php">  <img id="img_logo" src="images/img_logo.png" > </a>
        </div>
        <div class="rfloat">
         <?php   print "Bem vindo, $logado";?><a id="LoginAdmin" href="logout.php"><button id="BotaoLogin" style="vertical-align:middle"><span>Logout</span></button></a>
         <br> 
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


