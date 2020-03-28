<?php
session_start();
ob_start();
// error_reporting(0);
// Credit to: Gaya & Valak & Spicky & PiouPiou
// Constantes :
	define('root', __dir__);
	define('pre','/');
	define('siteurl','http://localhost/strtoweb2');
	define('sitename','StrToWeb');

// End Configuration //



$PageDisponible['home'] = root.pre.'controller'.pre.'index.php';
$PageDisponible['login'] = root.pre.'controller'.pre.'login.php';
$PageDisponible['transition'] = root.pre.'controller'.pre.'transition.php';
$PageDisponible['dashboard'] = root.pre.'controller'.pre.'dashboard.php';
$PageDisponible['404'] = root.pre.'controller'.pre.'404.php';


// Insert your Dependances here
require root.pre.'model'.pre.'metachanger.php';
require root.pre.'model'.pre.'database.php';
require root.pre.'model'.pre.'user.php';
require 'ClassMvc.php';

$meta=new Meta;
$db1=new Database('localhost','root','','test');
$user = new User;
// Class Mvc
$ClassMvc=new Systeme\mvc;
require $ClassMvc->RequireController;

$GetResultCode=ob_get_clean();
if(isset($WordToReplace)):
	if(is_array($WordToReplace)):
		foreach($WordToReplace as $Word => $To):

			$GetResultCode=str_replace($Word, $To, $GetResultCode);

		endforeach;
	endif;
endif;
echo $GetResultCode;
