<?php 

require_once("app/Core/Core.php");
require_once("app/controller/HomeController.php");
require_once("app/controller/ProductsController.php");
require_once("app/model/Cadastro.php");
require_once("app/controller/ServicesController.php");
require_once("app/controller/CurriculumController.php");
require_once("lib/database/Connection.php");

$templete = file_get_contents('app/view/templete.html');

ob_start();
    $core =  new Core;
    $core->start($_GET);
    $saida = ob_get_contents();
ob_end_clean();

$templetePronto = str_replace('{{area dinamica}}',$saida,$templete);

echo $templetePronto ;

 