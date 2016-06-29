<?php
	class ControllerTestOption extends Controller {
		function index($question_id) {
			$test_id = $_GET['test_id'];
			$model_test_center = $this->loadModel("test/test_center");
			$showOption = $model_test_center->getAnswer($question_id);
			
			include('view/common/header.php');
			include('view/test/test_option.php');
			include('view/common/footer.php');	
		}

		function delete($question_option_id) {
			$model_test_option = $this->loadModel("test/option");
			$model_test_option->delete($question_option_id);
			header('Location: http://localhost/php_assignment/admin/index.php?route=test/option&parameter=' . $_GET['question_id'] . "&test_id=" . $_GET['test_id']);
		}

		function newOption($question_id) {
			include('view/common/header.php');
			include('view/test/new_option.php');
			include('view/common/footer.php');	
		}

		function insert() {
			$new_option = array(
				'question_id' => $_POST['question_id'],
				'description' => $_POST['description']
			);
			$model_test_option = $this->loadModel("test/option");
			$model_test_option->insert($new_option);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/option&parameter=' . $_POST['question_id'] . "&test_id=" . $_GET['test_id']);
		}

		function edit($question_option_id) {
			$question_id = $_GET['question_id'];
			$model_test_option = $this->loadModel("test/option");
			$option = $model_test_option->getOption($question_option_id);

			include('view/common/header.php');
			include('view/test/edit_option.php');
			include('view/common/footer.php');	
		}

		function save() {
			$option = array(
				'question_option_id'	=> $_POST['question_option_id'], 
				'description' 			=> $_POST['description']
			);
			$model_test_option = $this->loadModel("test/option");
			$model_test_option->update($option);
			header('Location: http://localhost/php_assignment/admin/index.php?route=test/option&parameter=' . $_POST['question_id'] . "&test_id=" . $_GET['test_id']);
		}

		function correct($question_option_id){
			$question_id = $_GET['question_id'];
			$model_test_option = $this->loadModel("test/option");
			$model_test_option->setCorrect($question_id,$question_option_id);
			header('Location: http://localhost/php_assignment/admin/index.php?route=test/option&parameter=' . $question_id . "&test_id=" . $_GET['test_id']);

		}



		
	}
?>
