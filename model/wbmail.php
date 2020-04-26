<?php
class M{
	public function __construct(){
		error_reporting(0);
	}
	public function set($smtp,$smtp_port,$username,$password){
		
		$this->hostname = '{'.$smtp.':'.$smtp_port.'/imap/ssl}INBOX';
		$this->username = $username;
		$this->password = $password;
		$this->inbox = imap_open($this->hostname,$this->username,$this->password) or die('Cannot connect to server: ' . imap_last_error());
	}
	public function mail(){



		$emails = imap_search($this->inbox,'ALL');

		if($emails AND isset($_GET['mail_id'])) {
			$output = '';

			if(isset($_GET['delete'])):
				$check = imap_mailboxmsginfo($this->inbox);
				imap_delete($this->inbox, $_GET['mail_id']);
				imap_expunge($this->inbox);
				$check = imap_mailboxmsginfo($this->inbox);
				imap_close($this->inbox);
			endif;
			
				$email_number = $emails[0];
				foreach($emails as $value):
					$mail_disponible[$value] = $value;
				endforeach;
				
				if(isset($_GET['mail_id'])):
					$mail_id = $_GET['mail_id'];


					if(!isset($mail_disponible[$mail_id])): echo'tg'; endif;
					$email_number =$mail_disponible[$mail_id];

					$overview = imap_fetch_overview($this->inbox,$email_number,0);
					$structure = imap_fetchstructure($this->inbox, $email_number);
					$message = imap_fetchbody($this->inbox,$email_number,1);
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
					
					 $from = explode(' ', $overview[0]->from);
					 $from = end($from);
					return array(
						
						"from"=>utf8_decode(imap_utf8($from)),
						"date"=>utf8_decode(imap_utf8($overview[0]->date)),
						"subject"=>utf8_decode(imap_utf8($overview[0]->subject)),
						"id"=>utf8_decode(imap_utf8($overview[0]->msgno)),

						"message"=>$message,
						
					
					);


				endif;

			echo $output;
		}



	}
	
	public function ListWMBox(){
		
		$MC = imap_check($this->inbox);
		
		$result = imap_fetch_overview($this->inbox,"1:{$MC->Nmsgs}",0);
		sort($result);

		 $from = explode(' ', $result[0]->from);
		foreach ($result as $overview) {

		?>
		<td id="mail-id-<?= $overview->msgno ?>">
		
	            <p onclick="modal_open('Visionneur','op','<?= $overview->msgno ?>')"><b><?= htmlspecialchars(end($from)) ?></b> | <?= $overview->subject ?></p>
	            <p><?= $overview->date ?><a onclick="delete_mail('<?= $overview->msgno ?>')"><i class="fas fa-trash"></i></a></p>
        
        </td>
		<?php
		}

		
	}

	public function ListWMBoxCount(){
		
		$MC = imap_check($this->inbox);
		
		$result = imap_fetch_overview($this->inbox,"1:{$MC->Nmsgs}",0);
		return count($result);

		
	}
	
	public function __destruct(){
		imap_close($this->inbox);
	}
}