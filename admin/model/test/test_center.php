<?php
class ModelTestTestCenter extends Model {
	
	function getAllTest() {
		$test = $this->query("SELECT * FROM test where status = 1");
		return $test->rows;
	}


	function statusTest($test_id){
		$enable = 1;
		$disable = 0;

		$actual_status = $this->query("SELECT status from test WHERE test_id = '" . (int)$test_id . "'");

			if ($actual_status == 1){
				$result = $this->query("UPDATE test set status = '" . $disable . "' WHERE test_id = '" . (int)$test_id . "'");
			}else {
				$result = $this->query("UPDATE test set status = '" . $enable . "' WHERE test_id = '" . (int)$test_id . "'");
			}
	}

	function getTest($test_id) {
		$test = $this->query("SELECT * FROM test WHERE test_id = '" . (int)$test_id . "'");
		return $test->row;
	}


	function getQuestion($test_id) {
		$test = $this->query("SELECT question_id, question FROM question WHERE test_id = '" . (int)$test_id . "' ORDER BY question_id ASC");
		return $test->rows;
	}


	function getAnswer($question_id){
		$test = $this->query("SELECT question_option_id,question_id,description, correct_option  FROM question_option WHERE question_id = '" . (int)$question_id . "' ORDER BY question_option_id ASC");
		return $test->rows;
	}


	function insertTest($test){
		$result = $this->query("INSERT INTO test set name = '" . $test['name'] . 
			"', category_id = '" . $test['category_id'] .
			"', image = '" . $test['image'] .
			"', description = '" . $test['description'] . 
			"', total_question='" . $test['total_question'] . 
			"', pass_score = '" .  $test['pass_score'] . 
			"', time = '" .  $test['time'] . 
			"', status = 1, date_add = NOW()");
	}

	function updateTest($test) {
		$result = $this->query("UPDATE test set name = '" . $test['name'] . 
			"', category_id = '" . $test['category_id'] . 
			"', image = '" . $test['image'] . 
			"', description = '" . $test['description'] . 
			"', total_question='" . $test['total_question'] . 
			"', pass_score = '" .  $test['pass_score'] . 
			"', time = '" .  $test['time'] . 
			"', status = 1 WHERE test_id = '" . (int)$test['test_id'] . "'");
	}

}

?>