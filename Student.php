<?php
/**
* A class to represent student records
* @author Tim
*/

class Student {
	function __construct() {
		$this->surname = '';
		$this->first_name = '';
		$this->emails = array();
		$this->grades = array();
	}

	function add_email($which, $address) {
		$this->emails[$which] = $address;
	}

	function add_grade($grade) {
		$this->grades[] = $grade;
	}

	//Calcuates the average grade of a student
	function average() {
		$total = 0;
		foreach ($this->grades as $value)
			$total += $value;
		return $total / count($this->grades);
	}

	/*
	Creates string representation of student record in this format:
	Albert Einstein (75)
	home: albert@braniacs.com
	work1: a_einstein@bcit.ca
	work2: albert@physics.mit.edu
	*/
	function toString() {
	    $result = $this->first_name . ' ' . $this->surname;
	    $result .= ' ('.$this->average().")\n";
	    foreach($this->emails as $which=>$what)
	        $result .= $which . ': '. $what. "\n";
	    $result .= "\n";
	    return '<pre>'.$result.'</pre>';
	}
}