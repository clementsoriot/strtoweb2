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

	public function GetMonnaie(){

		$id  = $_SESSION[session_key]['id'];
		$req = $GLOBALS['db']->query("SELECT * FROM u_monnaie WHERE u_userid='$id' ORDER by id ASC");
		$montant = 0;
		foreach ($req as $value) {

			$montant = $montant + $value->u_montant;
			
		}

		return $montant;

	}

	public function GetSiteList(){

		$id  = $_SESSION[session_key]['id'];
		$req = $GLOBALS['db']->query("SELECT * FROM site WHERE site_owner='$id'");

		foreach ($req as $value) {
		?>

		<p onclick="LeftDropDowntkt('site<?= $value->site_id ?>')"><i class="far fa-browser"></i> <?= $value->site_domain ?></p>
        <div class="in" id="site<?= $value->site_id ?>" style="display:none;">
          <a style="display:block;"  href="<?= siteurl ?>/tableau-de-bord/category/boutique/"><i class="fas fa-cogs"></i> Boutique</a>
          <a style="display:block;"  href="<?= siteurl ?>/tableau-de-bord/category/renouvellement/"><i class="fas fa-cogs"></i> Renouvellement</a>
		  <a href="<?= siteurl ?>/tableau-de-bord/category/analytiques"><i class="fas fa-chart-line"></i> Analytiques</a>
        </div>

		<?php

		}

		
	}


	public function GetSiteCount(){

		$id  = $_SESSION[session_key]['id'];
		$req = $GLOBALS['db']->query("SELECT * FROM site WHERE site_owner='$id'");

		return count($req);

		
	}

	public function GetWMList(){

		$id  = $_SESSION[session_key]['id'];
		$req = $GLOBALS['db']->query("SELECT * FROM webmail_list WHERE access_user_id='$id'");

		foreach ($req as $value) {
			$mail = new M();
			$mail->set($value->wm_imap_adr,$value->wm_imap_port,$value->wm_adress,$value->wm_password);
		?>

		<p onclick="LeftDropDowntkt('wm<?= $value->wm_id ?>')"><i class="far fa-browser"></i> <?= $value->wm_adress ?></p>
        <div class="in" id="wm<?= $value->wm_id ?>" style="display:none;">
          <a style="display:block;"  href="<?= siteurl ?>/tableau-de-bord/category/boutique/"><i class="fas fa-cogs"></i> Boîte Mail (<?= $mail->ListWMBoxCount() ?>)</a>
          <a style="display:block;"  href="<?= siteurl ?>/tableau-de-bord/category/renouvellement/"><i class="fas fa-cogs"></i> Ecrire un mail</a>
        </div>
        <?php // print_r($mail->mail()) ?>
        <?php // $mail->ListWMBox() ?>
		<?php

		}


	}

	public function GetWMCount(){

		$id  = $_SESSION[session_key]['id'];
		$req = $GLOBALS['db']->query("SELECT * FROM webmail_list WHERE access_user_id='$id'");

		return count($req);


	}

	public function GetMonnaieHistory(){

		$id  = $_SESSION[session_key]['id'];
		$req = $GLOBALS['db']->query("SELECT * FROM u_monnaie WHERE u_userid='$id' ORDER by id DESC");
		$montant = 0;
		$MyMontant;
		foreach ($req as $value) {
	
			$montant_precedent = $montant;
			$montant = $montant + $value->u_montant;

			$MyMontant[] = array(
				'Montant' => $value->u_montant,
				'Solde' => $montant,
				'SoldeBack' => $montant_precedent,
				'Raison' => $value->u_reason,
				'Raison' => $value->u_reason,


			);
			
		}

		foreach ($MyMontant as $key => $value):
		?>
		<tr>
          <td>
  			

  			<div style="display:flex;align-items:center;justify-content:space-between;">
  				<div style="text-align:center;">
  					<i style="font-size:3rem;<?php if($value['Montant'] < 0): echo 'color:#fc4e42;'; else: echo'color:#6cbd4b;'; endif; ?>" class="fas fa-donate"></i>
  					<p>20.04.2000</p>
  				</div>
  				<div style="text-align:center;">
  					<p><?= $value['Raison'] ?></p>
  				</div>
  				<div style="display:flex;flex-direction:column;">
  		  			<a style="margin:.5rem"><i class="fas fa-donate"></i> <?= $value['Montant'] ?>€ </a>
  				</div>
  			</div>
  		


  			</td>
        </tr>
        <?php
		endforeach;

	}
	
}