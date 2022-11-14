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

		$naziv = $this->mysqli->escape(trim($_POST['naziv']));
		$cena = $this->mysqli->escape(trim($_POST['cena']));
		$vrsta = $this->mysqli->escape(trim($_POST['vrsta']));
		$kategorija = $this->mysqli->escape(trim($_POST['kategorija']));

		$data = Array (
				"naziv" => $naziv,
				"cena" => $cena,
				"vrstaID" => $vrsta,
				"kategorijaID" => $kategorija
		);


		$this->mysqli->insert('napitak', $data);
		return true;

	}

	public function update($id) {

		$cena = $this->mysqli->escape(trim($_POST['cena']));

		$data = Array ($cena, $id);


		$this->mysqli->rawQuery('update napitak set cena=? where napitakID = ?', $data);
		return true;

	}
	public function delete($id) {


		$data = Array ($id);


		$this->mysqli->rawQuery('delete from napitak where napitakID = ?', $data);
		return true;

	}

}

?>
