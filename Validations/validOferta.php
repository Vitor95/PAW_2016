<?php session_start();  //para validar se a sessao foi iniciada
if ((!isset($_SESSION['username']) == true) and ( !isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
}
require_once '../Config.php';
use Config as Conf;
require_once '../Application/Manager/OfertaTrabalhoManager.php';
require_once '../Application/Model/OfertasTrabalho.php';
require_once '../Application/Manager/ofertautilizadorManager.php';
require_once '../Application/Model/ofertautilizador.php';

$num=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$num1=filter_input(INPUT_POST, 'descritivo', FILTER_SANITIZE_SPECIAL_CHARS);
$num2=filter_input(INPUT_POST, 'requisitos', FILTER_SANITIZE_SPECIAL_CHARS);
$num3=filter_input(INPUT_POST, 'valores', FILTER_SANITIZE_SPECIAL_CHARS);
$num4=filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_SPECIAL_CHARS);
$num5=filter_input(INPUT_POST, 'tipoHorario', FILTER_SANITIZE_SPECIAL_CHARS);
$num6=filter_input(INPUT_POST, 'categoria_geral', FILTER_SANITIZE_SPECIAL_CHARS);
$num7=filter_input(INPUT_POST, 'categoria_esp', FILTER_SANITIZE_SPECIAL_CHARS);
$num8=filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);

$bd=filter_input(INPUT_POST, 'BD', FILTER_SANITIZE_SPECIAL_CHARS);
$con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor"); 
$select = mysql_select_db("tp_paw") or die("Sem acesso ao DB, Entre em contato com o Administrador");
if($bd==='AdicionarBD'){
    $num8="Pendente";
    $a=new OfertasTrabalho("", $num, $num1, $num2, $num3, $num4, $num5, $num6, $num7,$num8);
    $w=new OfertaTrabalhoManager();
    header("location:../CriarOfertasTrabalhoEmpregador.php");
}else{
    $num8="Publicadas";
    $a=new OfertasTrabalho("", $num, $num1, $num2, $num3, $num4, $num5, $num6, $num7,$num8);
    $w=new OfertaTrabalhoManager();
    header("location:../GerirOfertas.php");
}

 
$w->createOferta($a); 
$query_select = "SELECT MAX(idoferta) FROM ofertastrabalho";
$result = mysql_query($query_select);
$id = mysql_fetch_row($result);
$idUtilizador=$id[0];
$z=new ofertautilizador($idUtilizador, $_SESSION['username']);
$zz=new ofertautilizadorManager();
$zz->createofertautilizador($z);

