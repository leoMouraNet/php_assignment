<?php
	class ControllerStudentList extends Controller {
		function index() {
			$model_student_student = $this->loadModel('student/student');
			$studentList = $model_student_student->getAllStudents();
			
			include('view/common/header.php');
			include('view/student/list.php');
			include('view/common/footer.php');
		}

		function newStudent() {
			include('view/common/header.php');
			include('view/student/new.php');
			include('view/common/footer.php');
		}

		function insert() {
			$student = array(
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
				'password' => $_POST['pwd1'],
				'phone' => $_POST['phone'],
				'address' => $_POST['address']
			);

			$model_student_student = $this->loadModel("student/student");
			$model_student_student->insertStudent($student);

			header('Location: http://localhost/php_assignment/admin/index.php?route=student/list');
		}

		function delete($student_id){
			$model_student_student = $this->loadModel("student/student");
			$student = $model_student_student->deleteStudent($student_id);
			header('Location: http://localhost/php_assignment/admin/index.php?route=student/list');			
		}

		function info($student_id) {
			$model_student_student = $this->loadModel("student/student");
			$student = $model_student_student->getStudent($student_id);

		}

		function edit($student_id) {
			$model_student_student = $this->loadModel("student/student");
			$student = $model_student_student->getStudent($student_id);
			include('view/common/header.php');
			include('view/student/edit.php');
			include('view/common/footer.php');
		}

		function save() {
			$student = array(
				'student_id' => $_POST['student_id'],
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
				'password' => $_POST['pwd1'],
				'phone' => $_POST['phone'],
				'address' => $_POST['address']
			);

			$model_student_student = $this->loadModel("student/student");
			$model_student_student->updateStudent($student);

			header('Location: http://localhost/php_assignment/admin/index.php?route=student/list');
		}
	}
?>