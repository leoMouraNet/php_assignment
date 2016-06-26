<?php 
class test {
	private $name;
	private $description;
	private $test_id;
	private $total_question;
	private $pass_score;
	private $time;

	public function getId() {
		return $this->test_id;
	}

	public function getName() {
		return $this->name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getTotalQuestion(){
		return $this->total_question;
	}

	public function getPassScore(){
		return $this->pass_score;
	}

	public function getTime(){
		return $this->time;
	}

	public function setTest($data) {
		if (isset($data['test_id'])) {
			$this->test_id = $data['test_id'];
		} else {
			$this->test_id = 0;
		}

		if (isset($data['name'])) {
			$this->name = $data['name'];
		} else {
			$this->name = "";
		}

		if (isset($data['description'])) {
			$this->description = $data['description'];
		} else {
			$this->description = "";
		}

		if (isset($data['total_question'])){
			$this->total_question = $data['total_question'];
		}else {
			$this->total_question = 0;
		}

		if (isset($data['pass_score'])){
			$this->pass_score = $data['pass_score'];
		}else {
			$this->pass_score = 0;
		}

		if (isset($data['time'])){
			$this->time = $data['time'];
		}else {
			$this->time = 0;
		}

	}	
}
?>
