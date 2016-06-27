<?php 
class user {
	private $first_name;
	private $last_name;
	private $user_id;

	public function isLogged() {
		return isset($this->user_id);
	}

	public function getId() {
		return $this->user_id;
	}

	public function getName() {
		return $this->first_name . ' ' . $this->last_name;
	}

	public function setUser($data) {
		if (isset($data['user_id'])) {
			$this->user_id = $data['user_id'];
		} else {
			$this->user_id = 0;
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

		session_start();
		$_SESSION['user'] = $this;
	}	
}
?>
