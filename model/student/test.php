<?php
class ModelStudentTest extends Model {
	function getAllTest() {
		$student_id = $this->student->getID();
		$tests = $this->query("SELECT st.*, t.name, t.pass_score FROM student_test st INNER JOIN test t ON t.test_id = st.test_id where st.student_id = '" . (int)$student_id . "'");
		return $tests->rows;
	}

	function getTest($student_test_id) {
		$student_id = $this->student->getID();
		$test = $this->query("SELECT st.*, t.name, t.description, t.pass_score FROM student_test st INNER JOIN test t ON t.test_id = st.test_id where st.student_test_id = '". (int)$student_test_id . "' AND st.student_id = '" . (int)$student_id . "'");
		return $test->row;
	}

	//Return N randon questions ($total_question) from the test_id 
	function getQuestions($test_id, $total_question) {
		$student_id = $this->student->getID();
		$questions = $this->query("SELECT * FROM question WHERE test_id = '" . (int)$test_id . "' ORDER BY RAND() LIMIT " . (int)$total_question);
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
		$this->query("INSERT INTO student_test_answer SET student_test_id = '" . (int)$question['student_test_id'] . "', question_option_id = '" . (int)$question['question_option_id'] . "', date_add=NOW()");
	}

	//insert on table student_test which test and student starting
	function startTest($test_id) {
		$student_id = $this->student->getID();
		$this->query("INSERT INTO student_test SET student_id = '" . (int)$student_id . "', test_id='" . (int)$test_id . "', status=1, date_start = NOW()");
		return $this->getLastId();
	}

	//update on table student_test the test over and return if user pass (true or false)
	function endTest($student_test_id,$score) {
		$student_id = $this->student->getID();
		$this->query("UPDATE student_test SET score = '" . (int)$score . "', date_end=NOW() WHERE student_id = '" . (int)$student_id . "' AND student_test_id='" . (int)$student_test_id . "'");
	}

	function getHistoryTest($student_test_id) {
		$sql = "SELECT sta.student_test_answer_id,q.test_id,q.question, qo.description, qo.question_option_id, (SELECT description FROM question_option ";
		$sql .= " WHERE question_option.question_id = q.question_id and correct_option = 1) as rAnswer, sta.date_add FROM `student_test_answer` sta ";
		$sql .= " INNER JOIN question_option qo on qo.question_option_id = sta.question_option_id ";
		$sql .= " INNER JOIN question q on q.question_id = qo.question_id ";
		$sql .= " WHERE sta.student_test_id = " . (int)$student_test_id;

		$tests = $this->query($sql);
		return $tests->rows;	
	}

	function totalSummaryTest(){
		$student_id = $this->student->getID();
		$userPassed = $this->query("SELECT * from student_test " .
					" INNER JOIN test ON test.test_id = student_test.test_id " .
					" INNER JOIN student ON student.student_id = student_test.student_id " .
					" WHERE student.student_id = '" . (int)$student_id . "'" .
					" ORDER BY score DESC LIMIT 5");
		return $userPassed->rows;
	}	
}
?>
