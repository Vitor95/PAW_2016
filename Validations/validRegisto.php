<?php  session_start(); 
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/UtilizadorManager.php';
require_once '../Application/Model/Utilizador.php';
require_once '../Application/Manager/MoradaManager.php';
require_once '../Application/Model/Morada.php';


$num=filter_input(INPUT_POST, 'Nome/empresa', FILTER_SANITIZE_SPECIAL_CHARS);
$num1=filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_SPECIAL_CHARS);
$num2=filter_input(INPUT_POST, 'Contacto', FILTER_SANITIZE_SPECIAL_CHARS);
$num3=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$num4=filter_input(INPUT_POST, 'Perfil', FILTER_SANITIZE_SPECIAL_CHARS);
$num5=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$num6=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
$num7=filter_input(INPUT_POST, 'Rua', FILTER_SANITIZE_SPECIAL_CHARS);
$num8=filter_input(INPUT_POST, 'Numero_Porta', FILTER_SANITIZE_SPECIAL_CHARS);
$num9=filter_input(INPUT_POST, 'Localidade', FILTER_SANITIZE_SPECIAL_CHARS);
$num10=filter_input(INPUT_POST, 'Codigo-Postal', FILTER_SANITIZE_SPECIAL_CHARS);


$target_dir = "images/";
$target_file = $target_dir . $num1;


$a=new Utilizador("", $num, $target_file, $num2, $num3, $num4, $num5, $num6);
$w=new UtilizadorManager();

 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
$w->createUtilizador($a);
$query_select = "SELECT MAX(idUtilizador) FROM utilizador";
$result = mysql_query($query_select);
$id = mysql_fetch_row($result);
$idUtilizador=$id[0];
$morada=new Morada($idUtilizador, $num7, $num8, $num9, $num10);
$mo=new MoradaManager();
$mo->createMorada($morada);
echo "Registado com sucesso!!!";
echo "<script>setTimeout(\"location.href = '../index.php';\",1500);</script>";
  
