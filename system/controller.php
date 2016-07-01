<?php
class Controller {
	public $student;
		function load($url) {
			require($url . '.php');
		}

		function loadModel($url) {
			$this->load('model/'. $url);
			$class = 'Model' . preg_replace('/[^a-zA-Z0-9]/', '', $url);
			$model = new $class();
			$model->student = $this->student;			
			return $model;
		}
}
?>