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
				$_SESSION['student_test_id'] = $student_test_id;
				header('Location: http://localhost/php_assignment/index.php?route=student/question');
			} else {
				$errorMsg = "Test is not available";
				include('view/common/header.php');
				include('view/common/error.php');
				include('view/common/footer.php');
			}	
		}

		function end($student_test_id) {
			echo $student_test_id;
			exit;
		}
	}
?>