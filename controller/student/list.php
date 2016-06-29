<?php
	class ControllerStudentList extends Controller {
		function index() {
			$model_student_student = $this->loadModel('student/student');
			$studentList = $model_student_student->getAllStudents();
			
			include('view/common/header.php');
			include('view/student/list.php');
			include('view/common/footer.php');
		}
	}
?>