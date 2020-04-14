<?php
Class Actualites{
	
	public $titre;
	public $text;

	public function GetLastActualite(){


		$bd = $GLOBALS['db'];

		$requette = $bd->query("SELECT * FROM actualites ORDER by id_actualites DESC");

		if(!empty($requette[0])):

			$this->titre = $requette[0]->actualites_titre;
			$this->text = $requette[0]->actualites_text;
			$this->date = $requette[0]->actualites_date;
			$this->auteur = $requette[0]->actualites_auteur;

		endif;



	}

}