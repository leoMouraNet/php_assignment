<?php 
class student {
	private $first_name;
	private $last_name;
	private $student_id;

	public function isLogged() {
		return isset($this->student_id);
	}

	public function getId() {
		return $this->student_id;
	}

	public function getName() {
		return $this->first_name . ' ' . $this->last_name;
	}

	public function setStudent($data) {
		if (isset($data['student_id'])) {
			$this->student_id = $data['student_id'];
		} else {
			$this->student_id = 0;
		}

		if (isset($data['first_name'])) {
			$this->first_name = $data['first_name'];
		} else {
			$this->first_name = "";
		}

		if (isset($data['last_name'])) {
			$this->last_name = $data['last_name'];
		} else {
			$this->last_name = "";
		}
		
		$_SESSION['student'] = $this;
	}	
}
?>
