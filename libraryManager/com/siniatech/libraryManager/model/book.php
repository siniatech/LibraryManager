<?php

namespace \com\siniatech\libraryBrowser\model;

class Book {
	private $id;
	private $authors;
	private $publisher;
	private $size;
	private $score;
	private $readings;
	private $noOfPages;
	private $volume;
	private $series;
	private $name;
	private $noOfCopies;

	function __construct( $id, $authors, $publisher, $size, $score, $readings, $noOfPages, $volume, $noOfCopies, $series, $name) {
		$this->id = $id;
		$this->name = $name;
		$this->authors = $authors;
		$this->publisher = $publisher;
		$this->size = $size;
		$this->score = $score;
		$this->readings = $readings;
		$this->noOfPages = $noOfPages;
		$this->volume = $volume;
		$this->noOfCopies = $noOfCopies;
		$this->series = $series;
	}

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}
	
	function getAuthors() {
		return $this->authors;
	}
	
	function getPublisher() {
		return $this->publisher;
	}
	
	function getSize() {
		return $this->size;
	}
	
	function getScore() {
		return $this->score;
	}
	
	function getReadings() {
		return $this->readings;
	}
	
	function getNoOfPages() {
		return $this->noOfPages;
	}
	
	function getVolume() {
		return $this->volume;
	}
	
	function getNoOfCopies() {
		return $this->noOfCopies;
	}

	function getSeries() {
		return $this->series;
	}
	
}


?>