<?php
	class ControllerCommonMain extends Controller {
		function index() {
			if ($this->user->isLogged()) {
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