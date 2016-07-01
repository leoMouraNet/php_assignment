<?php
class ModelStudentTest extends Model {
	function getAllTest() {
		$tests = $this->query("SELECT st.*, t.name, t.pass_score, s.first_name, s.last_name FROM student_test st INNER JOIN test t ON t.test_id = st.test_id INNER JOIN student s on s.student_id = st.student_id");
		return $tests->rows;
	}

	function getTest($student_test_id) {
		$test = $this->query("SELECT st.*, t.name, t.description, t.pass_score FROM student_test st INNER JOIN test t ON t.test_id = st.test_id where st.student_test_id = '". (int)$student_test_id . "'");
		return $test->row;
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
}
?>
