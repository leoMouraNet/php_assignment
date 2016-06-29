<?php
	class ControllerStudentEdit extends Controller {
		function index() {
			$model_student_student = $this->loadModel("student/student");
			$student = $model_student_student->getStudent($this->student->getID());

			include('view/common/header.php');
			include('view/student/edit.php');
			include('view/common/footer.php');			
		}

		function update() {
			$student = array(
				'student_id'	=> $this->student->getID(),
				'first_name' 	=> $_POST['first_name'],
				'last_name' 	=> $_POST['last_name'],
				'email' 		=> $_POST['email'],
				'password' 		=> $_POST['pwd1'],
				'phone' 		=> $_POST['phone'],
				'address' 		=> $_POST['address']
			);

			$model_student_student = $this->loadModel("student/student");
			$model_student_student->updateStudent($student);

			$studentLogin = $model_student_student->login($student['email'],$student['password']);
			$this->student->setStudent($studentLogin);

			header('Location: http://localhost/php_assignment/index.php?route=common/dashboard');
		}
	}
?>