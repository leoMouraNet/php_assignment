<?php
class ModelTestTestCenter extends Model {
	
	function getAllTest() {
		$test = $this->query("SELECT * FROM test where status = 1");
		return $test->rows;
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

//-------------------- Statistics ----------------------

	function totalSummaryTest(){
		//$passedScore = 80;
		$userPassed = $this->query("SELECT * from student_test " .
					" INNER JOIN test ON test.test_id = student_test.test_id " .
					" INNER JOIN student ON student.student_id = test.test_id " .
					" ORDER BY score DESC");
		return $userPassed->rows;
	}

	// function totalNotPassedTest(){
	// 	$passedScore = 80;
	// 	$userNotPassed = $this->query("SELECT student.student_id,first_name,last_name, score from student " .
	// 				" INNER JOIN student_test ON student.student_id = student_test.student_id " .
	// 				" WHERE score < '" . (int)$passedScore . "' ORDER BY score ASC");
	// 	return $userNotPassed->rows;
	// }




	function statisticsTest(){
		$passedScore = 50;
		$summary = $this->query("SELECT student.student_id,first_name,last_name, score from student " .
					" INNER JOIN student_test ON student.student_id = student_test.student_id " .
					" INNER JOIN test ON test.test_id = student_test.test_id " .
					" WHERE score > '" . (int)$passedScore . "' ORDER BY score DESC");

		return $summary->rows;

	}

	function userPassedTest(){
		$userPassed = $this->query("SELECT COUNT(*) AS passed from student_test WHERE score > '80'");
		return $userPassed->row;

	}

	function userNotPassedTest(){
		$userNotPassed = $this->query("SELECT COUNT(*) AS notPassed from student_test WHERE score < '80'");
		return $userNotPassed->row;
	}


	function avgScoreAttempted(){
		$avgScoreAttempted = $this->query("SELECT AVG(score) as avgScore from student_test");
		return $avgScoreAttempted->row;
	}

	function currentlyUsers(){
		$currentlyUsers = $this->query("SELECT COUNT(*) AS actualUsers from student_test WHERE status = '1'");
		return $currentlyUsers->row;	
	}



	function scoreTest(){
		$testScoreByDate = 0;
		$allTestScore = 0;
		$highestScore = 0;
		$lowestScore = 0;
		$others_etc = 0;

		$scoreArray = array();
		$scoreArray['testScoreByDate'] = $testScoreByDate ;
		$scoreArray['allTestScore'] = $allTestScore;
		$scoreArray['highestScore'] = $highestScore;
		$scoreArray['lowestScore'] = $lowestScore;

		return $scoreArray;
		
	}

}

?>