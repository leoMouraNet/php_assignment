<?php
class ModelStudentStudent extends Model {
	
	function login($email, $password) {
		$student = $this->query("SELECT * FROM student WHERE email = '" . $email . "' and password='" . $password . "'");
		return $student->row;
	}

	function getAllStudents() {
		$students = $this->query("SELECT * FROM student");
		return $students->rows;
	}


	function getStudent($student_id) {
		$student = $this->db->query("SELECT * FROM student WHERE student_id = '" . (int)$student_id . "'");
		return $student->row;
	}

	function insertStudent($student){

	}

	function updateStudent($student) {

	}

}

?>