<?php

class Vrsta {

	private $mysqli;

	public function __construct($mysqli) {
		$this->mysqli = $mysqli;
	}

	public function select() {
			$kafe= $this->mysqli->query('select * from vrsta ');
			return $kafe;
	}



}

?>
