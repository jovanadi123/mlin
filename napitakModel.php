<?php

class Napitak {

	private $mysqli;

	public function __construct($mysqli) {
		$this->mysqli = $mysqli;
	}

	public function select() {
			$kafe= $this->mysqli->query('select * from napitak n join vrsta v on n.vrstaID = v.vrstaID join kategorija k on n.kategorijaID=k.kategorijaID');
			return $kafe;
	}

	public function save() {

		$naziv = $this->mysqli->real_escape_string(trim($_POST['naziv']));
		$cena = $this->mysqli->real_escape_string(trim($_POST['cena']));
		$vrsta = $this->mysqli->real_escape_string(trim($_POST['vrsta']));
		$kategorija = $this->mysqli->real_escape_string(trim($_POST['kategorija']));

		$this->mysqli->query("INSERT INTO napitak(naziv,cena,vrstaID,kategorijaID) VALUES ('$naziv', $cena, $vrsta, $kategorija) ");
		return true;

	}

	public function update($id) {

		$cena = $this->mysqli->real_escape_string(trim($_POST['cena']));
		$this->mysqli->query("UPDATE napitak SET cena=$cena WHERE napitakID = $id");
		return true;

	}
	public function delete($id) {

		$this->mysqli->query("DELETE FROM napitak WHERE napitakID = $id");
		return true;

	}

}

?>
