<?php
/**
* Description of Student
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

	
}