<?php 
// session_start inicia a sessão
session_start();
include '../Config.php';
// as variáveis login e senha recebem os dados introduzidos na página anterior
$login = $_POST['username'];
$password =$_POST['password'];
$log=Config::SGBD_DATABASE_NAME;
//print_r($passwords);
// as próximas 3 linhas são responsáveis pela ligação com a base de dados.
$con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("$log") or die("Sem acesso ao DB, Entre em contato com o Administrador");
//$contra=  md5($password);//encriptar
// A variavel $result pega nas varias $login e $password, faz uma pesquisa na tabela utilizador
//$password=  md5($password);
//print_r($password);
$result = mysql_query("SELECT * FROM `utilizador` WHERE `username` = '$login' AND `password`='$password'  AND `perfil`= 'empregador'");
$resultado = mysql_query("SELECT * FROM `utilizador` WHERE `username` = '$login' AND `password`= '$password' AND `perfil`= 'admin'");
$other = mysql_query("SELECT * FROM `utilizador` WHERE `username` = '$login' AND `password`= '$password' AND `perfil`= 'prestador'");

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registo idêntico o seu valor será igual a 1, se não, se não tiver registos o seu valor será 0. Dependendo do resultado ele redirecionará para a pagina "" ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if (mysql_num_rows($result) > 0) {
    $_SESSION['username'] = $login;
    $_SESSION['password'] = $password;
    header('location:../paginaInicialEmpregador.php');//página redireciona apos utilizador registado ser confirmado
} 
   else {
       if (mysql_num_rows($resultado) > 0) {
    $_SESSION['username'] = $login;
    $_SESSION['password'] = $password;
       header('location:../paginaInicialAdmin.php');//página redireciona apos admin ser confirmado
       }else
           if(mysql_num_rows($other) > 0){
               $_SESSION['username'] = $login;
    $_SESSION['password'] = $password;
    header('location:../paginaInicialPreServico.php');
           }else{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    //header('location:../index.php');//caso falhe o login redireciona para pagina login
       }
       }