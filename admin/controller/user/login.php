<?php
	class ControllerUserLogin extends Controller {
		function index() {
			include('view/common/header.php');
			include('view/user/login.php');
			include('view/common/footer.php');			
		}

		function login() {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$model_user_user = $this->loadModel("user/user");
			$userLogin = $model_user_user->login($email,$password);

			if (!isset($userLogin['user_id'])) {
				$errorMsg = "Email or password wrong.";
				include('view/common/header.php');
				include('view/user/login.php');
				include('view/common/footer.php');
			} else {
				$user = new User();
				$user->setUser($userLogin);

				header('Location: http://localhost/php_assignment/admin/index.php?route=common/main');
			}
		}

		function logout(){
			$_SESSION = array();
			$errorMsg = "You are logout.";
			include('view/common/header.php');
			include('view/user/login.php');
			include('view/common/footer.php');			
		}
	}
?>