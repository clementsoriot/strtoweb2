<?php

class User{
	public $auth;
	public $err=false;
	
	public function __construct(){
		
		$this->auth = false;
		if(isset($_SESSION['auth'])):
			$this->auth = true;
		endif;
		
	}

	public function isAuth(){
		if(isset($_SESSION[session_key]['id'])):
			return true;
		else:
			return false;
		endif;
	}
	
	public function login_form(){
		
		if(isset($_POST['login'])):
		
			if(!isset($_POST['login']['user'])): $this->err = "Nom d'utilisateur non indiqué"; return; endif;
			if(!isset($_POST['login']['pass'])): $this->err = "Mot de passe d'utilisateur non indiqué"; return; endif;
			if(strlen($_POST['login']['pass']) <= 3): $this->err = "Mot de passe trop court"; return; endif;

			$val1 = htmlspecialchars(addslashes($_POST['login']['user']));
			$val2 = htmlspecialchars(addslashes($_POST['login']['pass']));

			$req = $GLOBALS['db']->query("SELECT * FROM user_account WHERE user_email='$val1'");

			if(!isset($req[0])):
				$this->err = "Aucun compte avec cette e-mail"; return;
			else:
				if($req[0]->user_password !== $val2):
					$this->err = "Mot de passe incorrect"; return;
				endif;
			endif;


			

			if(!$this->err): // Pas d'erreur

				$_SESSION[session_key]['id'] = $req[0]->user_id;
				header('refresh:0');
			endif;
		
		endif;
		
	}
	
}