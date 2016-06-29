<?php
  class ControllerTestHistory extends Controller {
    function index() {
      $model_student_test = $this->loadModel("student/test");
      $userTest = $model_student_test->getAllTest();
      include('view/common/header.php');
      include('view/test/history.php');
      include('view/common/footer.php');      
    }

    function viewTest($student_test_id) {
      $model_student_test = $this->loadModel("student/test");
      $test_result = $model_student_test->getHistoryTest($student_test_id);
      $test_info = $model_student_test->getTest($student_test_id);

      include('view/common/header.php');
      include('view/test/answer.php');
      include('view/common/footer.php'); 
    }

  }
?>