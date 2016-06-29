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
		$student = $this->query("SELECT * FROM student WHERE student_id = '" . (int)$student_id . "'");
		return $student->row;
	}

	function insertStudent($student){
		$result = $this->query("INSERT INTO student set first_name = '" . $student['first_name'] . "', last_name = '" . $student['last_name'] . "', email='" . $student['email'] . "', password = '" .  $student['password'] . "', phone = '" . $student['phone'] . "', address = '" . $student['address'] . "', status=1, date_add = NOW()");
	}

	function updateStudent($student) {
		$this->query("UPDATE student set first_name = '" . $student['first_name'] . "', last_name = '" . $student['last_name'] . "', email='" . $student['email'] . "', password = '" .  $student['password'] . "', phone = '" . $student['phone'] . "', address = '" . $student['address'] . "', status=1 WHERE student_id = '" . (int)$student['student_id'] . "'");
	}

	function checkTest(){
		$student_id = $this->student->getID();
		$this->query("UPDATE student_test set date_end = NOW() WHERE date_end=NULL AND student_id = '" . (int)$student_id . "'");
	}


}

?>