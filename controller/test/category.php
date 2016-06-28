<?php
	class ControllerTestCategory extends Controller {
		function index() {
			$model_test_test = $this->loadModel('test/test');
			$categoryList = $model_test_test->getAllCategory();

			include('view/common/header.php');
			include('view/test/category.php');
			include('view/common/footer.php');			
		}
	}
?>