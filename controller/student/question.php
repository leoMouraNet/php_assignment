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
		$student_test_id = (int)$_SESSION['student_test_id'];

		if (isset($_POST['answer'])) {
			$answer[$count-1] = $_POST['answer'];
			$_SESSION['answer'] = $answer;
		}

		if (isset($_SESSION['questions'])) {
			$model_student_test = $this->loadModel('student/test');
			$model_test_test = $this->loadModel('test/test');

			$questions = $_SESSION['questions'];
			if ($count<count($_SESSION['questions'])) {
				$question = $questions[$count];
			} else {
				$question = $questions[0];
			}
			
			$options = $model_student_test->getChoices($question['question_id']);
			$test_info = $model_test_test->getTest($question['test_id']);
		}

		include('view/common/header.php');
		include('view/test/question.php');
		include('view/common/footer.php');	
	}
}


?>