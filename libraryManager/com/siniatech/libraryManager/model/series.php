<?php

namespace \com\siniatech\libraryBrowser\model;

class Series {
	private $id;
	private $name;
	private $noOfBooks;

	function __construct( $id, $name, $noOfBooks ) {
		$this->id = $id;
		$this->name = $name;
		$this->noOfBooks = $noOfBooks;
	}

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}
	
	function getNoOfBooks() {
		return $this->noOfBooks;
	}
}

?>