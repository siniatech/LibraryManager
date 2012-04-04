<?php

namespace \com\siniatech\libraryBrowser\model;

class Author {
	private $id;
	private $firstName;
	private $surame;

	function __construct( $id, $firstName, $surname ) {
		$this->id = $id;
		$this->firstName = $firstName;
		$this->surame = $surname;
	}

	function getId() {
		return $this->id;
	}

	function getSurname() {
		return $this->surname;
	}

	function getFirstName() {
		return $this->firstName;
	}
}

?>