<?php
	class ModelTestOption extends Model {
		function insert($option){
			$result = $this->query("INSERT INTO question_option set question_id = '" . $option['question_id'] . 
				"', description = '" . $option['description'] .
				"', correct_option = 0, status = 1, date_add = NOW()");
		}

		function update($option) {
			$result = $this->query("UPDATE question_option set description = '" . $option['description'] . 
			"', status = 1 WHERE question_option_id = '" . (int)$option['question_option_id'] . "'");
		}

		function delete($question_option_id){
			$result = $this->query("UPDATE question_option set status = '0' WHERE question_option_id = '" . (int)$question_option_id . "'");
		}

		function getOption($question_option_id) {
			$result = $this->query("SELECT * FROM question_option where question_option_id = '" . (int)$question_option_id . "'");
			return $result->row;
		}

		function setCorrect($question_id, $question_option_id) {
			$this->query("UPDATE question_option set correct_option = '0' WHERE question_id = '" . (int)$question_id . "'");
			$this->query("UPDATE question_option set correct_option = '1' WHERE question_option_id = '" . (int)$question_option_id . "'");
		}
	}
?>
