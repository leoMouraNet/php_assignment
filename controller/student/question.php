<?php

class ControllerStudentQuestion extends Controller {
	function index($count) {
		if ($count=="") {
			$count=0;
		}

		if (!isset($_SESSION['answer'])) {
		    $_SESSION['answer'] = array();
		}
 
		$answer = $_SESSION['answer'];
		$student_test_id = $_SESSION['student_test_id'];
		$score = $_SESSION['score'];

		$model_student_test = $this->loadModel('student/test');
		if (isset($_SESSION['questions'])) {
			$model_test_test = $this->loadModel('test/test');

			$questions = $_SESSION['questions'];
			if ($count<count($_SESSION['questions'])) {
				$question = $questions[$count];
			} else {
				$question = $questions[0];
			}
			
			$options = $model_student_test->getChoices($question['question_id']);
			$test_info = $model_test_test->getTest($question['test_id']);

			if (isset($_POST['answer'])) {
				$answer[$count-1] = $_POST['answer'];
				$_SESSION['answer'] = $answer;
				$question_save = array();
				$question_save['student_test_id'] = $student_test_id;
				$question_save['question_id'] = $questions[$count-1]['question_id'];
				$question_save['question_option_id'] = $_POST['answer'];
				$model_student_test->setAnswer($question_save);
				$options_check = $model_student_test->getChoices($question_save['question_id']);

				foreach ($options_check as $option) {
					if ($option['correct_option'] && $option['question_option_id']==$_POST['answer']) {
						$score += 10;
						$_SESSION['score'] = $score;
					}
				}
			}
		}

		include('view/common/header.php');
		include('view/test/question.php');
		include('view/common/footer.php');	
	}
}


?>