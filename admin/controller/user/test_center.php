<?php
	class ControllerUserTestCenter extends Controller {
		function index() {
			$model_user_test = $this->loadModel("user/test_center");
			$userTest = $model_user_test->getAllTest();
			include('view/common/header.php');
			include('view/user/test_center.php');
			include('view/common/footer.php');			
		}

		function showTestForm(){
			include('view/common/header.php');
			include('view/user/new_test.php');
			include('view/common/footer.php');	
		}

		function addTest(){
			$new_test = array(
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'total_question' => $_POST['total_question'],
				'pass_score' => $_POST['pass_score'],
				'time' => $_POST['time']
			);

			$model_user_new_test = $this->loadModel("user/test_center");
			$model_user_new_test->insertTest($new_test);

			header('Location: http://localhost/php_assignment/admin/index.php?route=user/test_center');


		}

		function editTest(){

		}

		function deleteTest(){

		}

		function saveTest(){

		}


	}
?>