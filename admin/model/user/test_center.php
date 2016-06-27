<?php
class ModelUserTestCenter extends Model {
	
	function getAllTest() {
		$test = $this->query("SELECT * FROM test");
		return $test->rows;
	}


	function getTest($test_id) {
		$test = $this->query("SELECT * FROM test WHERE test_id = '" . (int)$test_id . "'");
		return $test->row;
	}

	function insertTest($test){
		$result = $this->query("INSERT INTO test set name = '" . $test['name'] . 
			"', description = '" . $test['description'] . 
			"', total_question='" . $test['total_question'] . 
			"', pass_score = '" .  $test['pass_score'] . 
			"', time = '" .  $test['time'] . 
			"', status = 1, date_add = NOW()");
	}

	function updateTest($test) {
		$result = $this->query("UPDATE test set name = '" . $test['name'] . 
			"', description = '" . $test['description'] . 
			"', total_question='" . $test['total_question'] . 
			"', pass_score = '" .  $test['pass_score'] . 
			"', time = '" .  $test['time'] . 
			"', status = 1 WHERE test_id = '" . (int)$test['test_id'] . "'");
	}

}

?>