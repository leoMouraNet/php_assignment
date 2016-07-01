<?php
	class ControllerStudentLogin extends Controller {
		function index() {
			include('view/common/header.php');
			include('view/student/login.php');
			include('view/common/footer.php');			
		}

		function login() {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$model_student_student = $this->loadModel("student/student");
			$studentLogin = $model_student_student->login($email,$password);

			if (!isset($studentLogin['student_id'])) {
				$errorMsg = "Email or password wrong.";
				include('view/common/header.php');
				include('view/student/login.php');
				include('view/common/footer.php');
			} else {
				$student = new Student();
				$student->setStudent($studentLogin);

				$model_student_student->checkTest();

				header('Location: http://localhost/php_assignment/index.php?route=common/dashboard');
			}
		}

		function logout(){
			$_SESSION = array();
			header('Location: http://localhost/php_assignment/index.php');		
		}
	}
?>