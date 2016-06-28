<?php
	class ControllerTestTestCenter extends Controller {
		function index() {
			$model_user_test = $this->loadModel("test/test_center");
			$userTest = $model_user_test->getAllTest();
			include('view/common/header.php');
			include('view/test/test_center.php');
			include('view/common/footer.php');			
		}

		function showTestForm(){
			include('view/common/header.php');
			include('view/test/new_test.php');
			include('view/common/footer.php');	
		}

		function addTest(){
			$new_test = array(
				'name' => $_POST['name'],
				'category_id' => $_POST['category_id'],
				'image' => $_POST['image'],
				'description' => $_POST['description'],
				'total_question' => $_POST['total_question'],
				'pass_score' => $_POST['pass_score'],
				'time' => $_POST['time']
			);

			$model_user_new_test = $this->loadModel("test/test_center");
			$model_user_new_test->insertTest($new_test);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/test_center');

		}

		function viewTest($test_id){

			$model_user_test_view = $this->loadModel("test/test_center");
			$showTest = $model_user_test_view->getQuestion($test_id);
			
			include('view/common/header.php');
			include('view/test/test_question.php');
			include('view/common/footer.php');	

		}

		function viewAnswer($question_id){

			// echo $question_id;

			$model_user_test_answer = $this->loadModel("test/test_center");
			$showAnswer = $model_user_test_answer->getAnswer($question_id);

			// echo "<ul>";
			// foreach ($showAnswer as $rows){
			// 	echo "<li>".$rows['question'] ."</li><br>";
			// }
			// echo "</ul>";

			include('view/common/header.php');
			include('view/test/test_answer.php');
			include('view/common/footer.php');	

		}

		function editTest($test_id){
			echo $test_id;
		}

		function deleteTest($test_id){
			//Enable-Disable test (status) in DB
			//echo $test_id;
			$model_user_test_status = $this->loadModel("test/test_center");
			$model_user_test_status->statusTest($test_id);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/test_center');
		}

		function saveTest($test_id){

		}

		function showStatistics(){
			//bring Statistics from DB
			include('view/common/header.php');
			include('view/test/view_statistics.php');
			include('view/common/footer.php');	
		}

		function showCurrentTest(){
			//bring Test Info from DB
			include('view/common/header.php');
			include('view/test/view_scores.php');
			include('view/common/footer.php');	
		}




	}
?>