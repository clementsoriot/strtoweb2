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
	
	public function login_form(){
		print_r($_POST);
		if(isset($_POST['login'])):
		
			if(!isset($_POST['login']['user'][0])): $this->err = "Nom d'utilisateur non indiqué"; return; endif;
			if(!isset($_POST['login']['pass'][0])): $this->err = "Nom d'utilisateur non indiqué"; return; endif;
		echo'ok';
		endif;
		
	}
	
}