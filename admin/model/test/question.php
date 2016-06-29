<?php
	class ModelTestQuestion extends Model {
		function insert($question){
			$result = $this->query("INSERT INTO question set test_id = '" . $question['test_id'] . 
				"', question = '" . $question['question'] .
				"', status = 1, date_add = NOW()");
		}

		function update($question) {
			$result = $this->query("UPDATE question set question = '" . $question['question'] . 
			"', status = 1 WHERE question_id = '" . (int)$question['question_id'] . "'");
		}

		function delete($question_id){
			$result = $this->query("UPDATE question set status = '0' WHERE question_id = '" . (int)$question_id . "'");
		}

		function getQuestion($question_id) {
			$result = $this->query("SELECT * FROM question where question_id = '" . (int)$question_id . "'");
			return $result->row;
		}
	}
?>
