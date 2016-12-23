<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('ROOT',__DIR__);
var_dump($_SERVER['SERVER_NAME']);exit;

session_start(); 
//var_dump($_SESSION);
//$_SESSION = array();
//session_destroy();
//if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
//echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
//echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить";




require_once ROOT.'/core/load.php';

require_once ROOT.'/views/layouts/main.php';


?>