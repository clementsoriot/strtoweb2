<?php

Class statistiques{
	
	public function __construct(){

		if(isset($_SESSION[session_key]['id'])):
			$this->user_id = $_SESSION[session_key]['id'];
			$this->bd = $GLOBALS['db'];
		endif;
	
	}
	
	public function get_stat($token){
		
		if(isset($_SESSION[session_key]['id'])):
		$date = time()-604800;
		
		$req1 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d1=1");
		$req2 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d2=1");
		$req3 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d3=1");
		$req4 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d4=1");
		$req5 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d5=1");
		$req6 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d6=1");
		$req7 = $this->bd->query("SELECT * FROM visitor WHERE v_site_token='$token' AND v_timestamp >= $date AND d7=1");
		return array(
			
			'd1'=>count($req1),
			'd2'=>count($req2),
			'd3'=>count($req3),
			'd4'=>count($req4),
			'd5'=>count($req5),
			'd6'=>count($req6),
			'd7'=>count($req7),
			'dt'=>count($req1)+count($req1)+count($req2)+count($req3)+count($req4)+count($req5)+count($req6)+count($req7),
		
		);
		
		endif;
		
		
		



	}

	

}