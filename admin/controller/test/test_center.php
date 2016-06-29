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

		function viewTest($test_id){

			$model_test_test_view = $this->loadModel("test/test_center");
			$showTest = $model_test_test_view->getQuestion($test_id);
			
			include('view/common/header.php');
			include('view/test/test_question.php');
			include('view/common/footer.php');	

		}

		function viewAnswer($question_id){

			// echo $question_id;

			$model_test_test_answer = $this->loadModel("test/test_center");
			$showAnswer = $model_test_test_answer->getAnswer($question_id);

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
			$model_test_test_status = $this->loadModel("test/test_center");
			$model_test_test_status->statusTest($test_id);

			header('Location: http://localhost/php_assignment/admin/index.php?route=test/test_center');
		}

		function saveTest($test_id){

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