<?php
/*
class M{
	public function __construct($username,$password){

		$this->hostname = '{pop.ionos.fr:993/imap/ssl}INBOX';
		$this->username = $username;
		$this->password = $password;
		$this->inbox = imap_open($this->hostname,$this->username,$this->password) or die('Cannot connect to server: ' . imap_last_error());
	}
	public function mail(){



		$emails = imap_search($this->inbox,'ALL');

		if($emails) {
			$output = '';
			rsort($emails);

				$email_number = $emails[3];
				foreach($emails as $value):
					$mail_disponible[$value] = $value;
				endforeach;

				if(isset($_GET['mail_id'])):
					$mail_id = $_GET['mail_id'];
					if(!isset($mail_disponible[$mail_id])): return false; endif;
					$email_number =$mail_disponible[$mail_id];
					$overview = imap_fetch_overview($this->inbox,$email_number,0);
					$structure = imap_fetchstructure($this->inbox, $email_number);

					if(isset($structure->parts) && is_array($structure->parts) && isset($structure->parts[1])) {
						$part = $structure->parts[1];
						$message = imap_fetchbody($this->inbox,$email_number,2);

						if($part->encoding == 3) {
							$message = imap_base64($message);
						} else if($part->encoding == 1) {
							$message = imap_8bit($message);
						} else if($part->encoding ==0) {
							$message = $message;
						} else {
							$message = imap_qprint($message);
						}
					}

					$output.= '<div class="toggle'.($overview[0]->seen ? 'read' : 'unread').'">';

					return array(

						"from"=>utf8_decode(imap_utf8($overview[0]->from)),
						"date"=>utf8_decode(imap_utf8($overview[0]->date)),
						"subject"=>utf8_decode(imap_utf8($overview[0]->subject)),
						"message"=>$message,


					);


					return false;
				endif;

			echo $output;
		}



	}

	public function listmail(){

		$MC = imap_check($this->inbox);

		$result = imap_fetch_overview($this->inbox,"1:{$MC->Nmsgs}",0);
		foreach ($result as $overview) {
			echo "<a href=\"?mail_id={$overview->uid}\">#{$overview->msgno} ({$overview->date}) - From: {$overview->from}
			{$overview->subject}\n</a><br>";
		}


	}

	public function __destruct(){
		imap_close($this->inbox);
	}
}*/
