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
	define('session_key','strtoweb');

// End Configuration //





// Insert your Dependances here
require root.pre.'model'.pre.'metachanger.php';
require root.pre.'model'.pre.'database.php';
require root.pre.'model'.pre.'user.php';
require root.pre.'model'.pre.'actualites.php';
require root.pre.'model'.pre.'statistiques.php';
require root.pre.'model'.pre.'wbmail.php';
require 'ClassMvc.php';


$meta=new Meta;
$db=new Database('localhost','root','','strtoweb');
$user = new User;
$actualites = new Actualites;

$statistiques = new statistiques();

	$PageDisponible['home'] = root.pre.'controller'.pre.'index.php';
	$PageDisponible['connexion'] = root.pre.'controller'.pre.'login.php';
	$PageDisponible['transition'] = root.pre.'controller'.pre.'transition.php';
	if($user->isAuth()):
	$PageDisponible['tableau-de-bord'] = root.pre.'controller'.pre.'dashboard.php';
	else:
	$PageDisponible['tableau-de-bord'] = root.pre.'controller'.pre.'login.php';
	endif;
	$PageDisponible['404'] = root.pre.'controller'.pre.'404.php';





// Class Mvc

$ClassMvc=new Systeme\mvc;
require root.pre.'model'.pre.'actions.php';
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
