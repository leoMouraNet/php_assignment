<?php
	class ControllerCommonMain extends Controller {
		function index() {
			if ($this->user->isLogged()) {
				//bring Statistics from DB
				$model_test_total = $this->loadModel("test/test_center");
				$summaryTest = $model_test_total->totalSummaryTest();
				$passedTest = $model_test_total->userPassedTest();
				$notPassedTest = $model_test_total->userNotPassedTest();
				$avgScoreAttempted = $model_test_total->avgScoreAttempted();
				$currentlyUsers = $model_test_total->currentlyUsers();			
				include('view/common/header.php');
				include('view/common/main.php');
				include('view/common/footer.php');			
			} else {
				include('view/common/header.php');
				include('view/user/login.php');
				include('view/common/footer.php');			
			}
		}
	}
?>