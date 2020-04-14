<?php

Class statistiques{
	
	public function __construct($user_id){
		$this->user_id = $user_id;
		$this->bd = $GLOBALS['db'];
		$date = time()-86400;

		$req = $this->bd->query("SELECT * FROM visitor,site WHERE visit_token=site_token AND site_owner=$user_id AND visit_timestamp >= $date");


		
	}

	

}
echo'ok';