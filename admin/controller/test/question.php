<?php
	class ControllerTestQuestion extends Controller {
		function index($test_id) {
			$model_test_center = $this->loadModel("test/test_center");
			$showTest = $model_test_center->getQuestion($test_id);
			
			include('view/common/header.php');
			include('view/test/test_question.php');
			include('view/common/footer.php');	
		}

		function delete($question_id) {
			$model_test_question = $this->loadModel("test/question");
			$model_test_question->delete($question_id);
			header('Location: http://localhost/php_assignment/admin/index.php?route=test/question&parameter=' . $_GET['test_id']);
		}

		function newQuestion($test_id) {
			include('view/common/header.php');
			include('view/test/new_question.php');
			include('view/common/footer.php');	
		}

		function insert() {
			$new_question = array(
				'test_id' => $_POST['test_id'],
				'question' => $_POST['question']
			);
			$model_test_question = $this->loadModel("test/question");
			$model_test_question->insert($new_question);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/question&parameter=' . $_POST['test_id']);
		}

		function edit($question_id) {
			$test_id = $_GET['test_id'];
			$model_test_question = $this->loadModel("test/question");
			$question = $model_test_question->getQuestion($question_id);

			include('view/common/header.php');
			include('view/test/edit_question.php');
			include('view/common/footer.php');	
		}

		function save() {
			$question = array(
				'question_id'	=> $_POST['question_id'], 
				'question' 		=> $_POST['question']
			);
			$model_test_question = $this->loadModel("test/question");
			$model_test_question->update($question);
			header('Location: http://localhost/php_assignment/admin/index.php?route=test/question&parameter=' . $_POST['test_id']);
		}



		
	}
?>
