<?php

namespace \com\siniatech\libraryBrowser\model;

class Size {
	private $id;
	private $name;

	function __construct( $id, $name) {
		$this->id = $id;
		$this->name = $name;
	}

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}
}

?>