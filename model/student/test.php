<?php
class ModelStudentTest extends Model {
	function getAllTests() {
		$student_id = $this->student->getID();
		$tests = $this->query("SELECT * FROM test where student_id = '" . (int)$student_id . "'");
		return $tests->rows;
	}

	function getTest($test_id) {
		$student_id = $this->student->getID();
		$test = $this->query("SELECT * FROM test where test_id = '". (int)$test_id . "' AND student_id = '" . (int)$student_id . "'");
		return $test->row;
	}

	//Return N randon questions ($total_question) from the test_id 
	function getQuestions($test_id, $total_question) {
		$student_id = $this->student->getID();
		$questions = $this->query("SELECT * FROM question WHERE test_id = '" . (int)$test_id . "' ORDER BY RAND() LIMIT " . (int)$total_question . "'");
		return $questions->rows;
	}

	//return 4 choices
	function getChoices($question_id) {
		$question = $this->query("SELECT * FROM question_option WHERE question_id = '" . (int)$question_id . "'");
		return $question->rows;
	}

	//insert the answer chose
	function setAnswer($question) {
		$student_id = $this->student->getID();
		$this->query("INSERT INTO student_test_answer student_test_id = '" . (int)$question['student_test_id'] . "', question_id = '" . (int)$question['question_id'] . ", question_option_id = '" . (int)$question['question_option_id'] . "', date_add=NOW()");
	}

	//insert on table student_test which test and student starting
	function startTest($test_id) {
		$student_id = $this->student->getID();
		$this->query("INSERT INTO student_test SET student_id = '" . (int)$student_id . "', test_id='" . (int)$test_id . "', status=1, date_start = NOW()");
	}

	//update on table student_test the test over and return if user pass (true or false)
	function endTest($test_id,$score) {
		$student_id = $this->student->getID();
		$this->query("UPDATE student_test SET score = '" . (int)$score . "', date_end=NOW() WHERE student_id = '" . (int)$student_id . "' AND test_id='" . (int)$test_id . "'");
	}

?>
