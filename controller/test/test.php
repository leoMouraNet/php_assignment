<?php
	class ControllerTestTest extends Controller {
		function index($category_id = 0) {
			$model_test_test = $this->loadModel('test/test');
			$testList = $model_test_test->getAllTest($category_id);

			include('view/common/header.php');
			include('view/test/test.php');
			include('view/common/footer.php');	
		}

		function start($test_id) {
			$model_test_test = $this->loadModel('test/test');
			$test_info = $model_test_test->getTest($test_id);
			if (isset($test_info['test_id'])) {
				$model_student_test = $this->loadModel('student/test');
				$student_test_id = $model_student_test->startTest($test_id);
				$questions = $model_student_test->getQuestions($test_id, $test_info['total_question']);
				$_SESSION['questions'] = $questions;
				$_SESSION['test_id'] = $test_id;
				$_SESSION['student_test_id'] = $student_test_id;
				$_SESSION['score'] = 0;
				header('Location: http://localhost/php_assignment/index.php?route=student/question');
			} else {
				$errorMsg = "Test is not available";
				include('view/common/header.php');
				include('view/common/error.php');
				include('view/common/footer.php');
			}	
		}

		function end() {
			if (isset($_SESSION['test_id'])) {
				$model_student_test = $this->loadModel('student/test');
				$model_student_test->endTest($_SESSION['student_test_id'],$_SESSION['score']);
				$model_test_test = $this->loadModel('test/test');
				$test_info = $model_test_test->getTest($_SESSION['test_id']);				
				$score = $_SESSION['score'];
				unset($_SESSION['test_id']);
				unset($_SESSION['score']);
				unset($_SESSION['questions']); 
				unset($_SESSION['student_test_id']);

				$message = "";
				if ((int)$score >= (int)$test_info['pass_score']) {
					$message = "Your score is: " . $score . "<br/>You have successfully passed the test. You are now certified in " . $test_info['name'];
				} else {
					$message = "Your score is: " . $score . "<br/>Unfortunately you did not pass the test. Please try again later!";
				}

				include('view/common/header.php');
				include('view/test/result.php');
				include('view/common/footer.php');				
			} else {
				header('Location: http://localhost/php_assignment/index.php?route=test/category');
			}
		}
	}
?>