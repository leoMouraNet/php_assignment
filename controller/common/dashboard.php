<?php
	class ControllerCommonDashboard extends Controller {
		function index() {
			if ($this->student->isLogged()) {
				$model_student_test = $this->loadModel("student/test");
				$summaryTest = $model_student_test->totalSummaryTest();
				include('view/common/header.php');
				include('view/common/dashboard.php');
				include('view/common/footer.php');			
			} else {
				include('view/common/header.php');
				include('view/student/login.php');
				include('view/common/footer.php');			
			}
		}
	}
?>