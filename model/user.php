<?php

class User{
	public $auth;
	public $err="None";
	
	public function __construct(){
		
		$this->auth = false;
		if(isset($_SESSION['auth'])):
			$this->auth = true;
		endif;
		
	}
	
	public function login_form(){
		
		if(isset($_POST['login'])):
		
			if(!isset($_POST['login']['user'])): $this->err = "Nom d'utilisateur non indiqué"; return; endif;
			if(!isset($_POST['login']['pass'])): $this->err = "Nom d'utilisateur non indiqué"; return; endif;
		
		endif;
		
	}
	
}