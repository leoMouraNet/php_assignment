<?php
class ModelStudentStudent extends Model {
	
	function getAllStudents() {
		$students = $this->query("SELECT * FROM student WHERE status=1");
		return $students->rows;
	}


	function getStudent($student_id) {
		$student = $this->query("SELECT * FROM student WHERE student_id = '" . (int)$student_id . "'");
		return $student->row;
	}

	function insertStudent($student){
		$this->query("INSERT INTO student set first_name = '" . $student['first_name'] . "', last_name = '" . $student['last_name'] . "', email='" . $student['email'] . "', password = '" .  $student['password'] . "', phone = '" . $student['phone'] . "', address = '" . $student['address'] . "', status=1, date_add = NOW()");
	}

	function updateStudent($student) {
		$this->query("UPDATE student set first_name = '" . $student['first_name'] . "', last_name = '" . $student['last_name'] . "', email='" . $student['email'] . "', password = '" .  $student['password'] . "', phone = '" . $student['phone'] . "', address = '" . $student['address'] . "', status=1 WHERE student_id = '" . (int)$student['student_id'] . "'");
	}

	function deleteStudent($student_id) {
		$this->query("UPDATE student set status = '0' WHERE student_id = '" . (int)$student_id . "'");
	}


}

?>