<?php 
class test {
	private $test_id;
	private $name;
	private $category_id;
	private $image;
	private $description;
	private $total_question;
	private $pass_score;
	private $time;
	private $status;

	public function getId() {
		return $this->test_id;
	}

	public function getName() {
		return $this->name;
	}

	public function getCategoryId() {
		return $this->category_id;
	}

	public function getImage() {
		return $this->image;
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

	public function getStatus(){
		return $this->status;
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

		if (isset($data['category_id'])) {
			$this->category_id = $data['category_id'];
		} else {
			$this->category_id = 0;
		}

		if (isset($data['image'])) {
			$this->image = $data['image'];
		} else {
			$this->image = "default.jpg";
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

		if (isset($data['status'])){
			$this->status = $data['status'];
		}else {
			$this->status = 1;
		}

	}	
}
?>
