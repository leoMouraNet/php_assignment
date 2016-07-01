<?php
	class ControllerTestTestCenter extends Controller {
		function index() {
			$model_test_test = $this->loadModel("test/test_center");
			$userTest = $model_test_test->getAllTest();
			include('view/common/header.php');
			include('view/test/test_center.php');
			include('view/common/footer.php');			
		}

		function showTestForm(){
			$model_category_category = $this->loadModel("category/category");
			$categoryList = $model_category_category->getAllCategories();
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

			$model_test_new_test = $this->loadModel("test/test_center");
			$model_test_new_test->insertTest($new_test);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/test_center');

		}

		function viewAnswer($question_id){

			// echo $question_id;

			$model_test_center = $this->loadModel("test/test_center");
			$showAnswer = $model_test_center->getAnswer($question_id);

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
			$model_test_center = $this->loadModel("test/test_center");
			$test_info = $model_test_center->getTest($test_id);
			$model_category_category = $this->loadModel("category/category");
			$categoryList = $model_category_category->getAllCategories();
			
			include('view/common/header.php');
			include('view/test/edit_test.php');
			include('view/common/footer.php');				
		}

		function deleteTest($test_id){
			//Enable-Disable test (status) in DB
			//echo $test_id;
			$model_test_center = $this->loadModel("test/test_center");
			$model_test_center->statusTest($test_id);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/test_center');
		}

		function saveTest(){
			$test = array(
				'test_id'			=> $_POST['test_id'],
				'name' 				=> $_POST['name'],
				'description' 		=> $_POST['description'],
				'category_id' 		=> $_POST['category_id'],
				'image' 			=> $_POST['image'],
				'total_question'	=> $_POST['total_question'],
				'pass_score' 		=> $_POST['pass_score'],
				'time'				=> $_POST['time']
			);

			$model_test_center = $this->loadModel("test/test_center");
			$model_test_center->updateTest($test);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/test_center');
		}

		function showStatistics(){
			//bring Statistics from DB
			//$statisticsTest = array();

			$model_test_total = $this->loadModel("test/test_center");
			$summaryTest = $model_test_total->totalSummaryTest();
			$passedTest = $model_test_total->userPassedTest();
			$notPassedTest = $model_test_total->userNotPassedTest();
			$avgScoreAttempted = $model_test_total->avgScoreAttempted();
			$currentlyUsers = $model_test_total->currentlyUsers();

			//$array = $model_test_total->nueva();

			include('view/common/header.php');
			include('view/test/view_statistics.php');
			include('view/common/footer.php');	
		}

		function showCurrentTest(){
			//bring Test Info from DB

			$scoreTest = array();

			$model_test_score = $this->loadModel("test/test_center");
			$scoreTest = $model_test_score->scoreTest();


			echo $scoreTest['testScoreByDate'] ."<br>";
			echo $scoreTest['allTestScore'] ."<br>";
			echo $scoreTest['highestScore'] ."<br>";
			echo $scoreTest['lowestScore'] ."<br>";

			// //method = scoreTest()
			// include('view/common/header.php');
			// include('view/test/view_scores.php');
			// include('view/common/footer.php');	
		}




	}
?>