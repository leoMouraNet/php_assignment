<?php
class ModelUserUser extends Model {
	
	function login($email, $password) {
		$user = $this->query("SELECT * FROM user1 WHERE email = '" . $email . "' and password='" . $password . "'");
		return $user->row;
	}

	function getAllUsers() {
		$user = $this->query("SELECT * FROM user1");
		return $user->rows;
	}


	function getUser($user_id) {
		$user = $this->query("SELECT * FROM user1 WHERE user_id = '" . (int)$user_id . "'");
		return $user->row;
	}

	function insertUser($user){
		$result = $this->query("INSERT INTO user1 set first_name = '" . $user['first_name'] . "', last_name = '" . $user['last_name'] . 
			"', email='" . $user['email'] . 
			"', password = '" .  $user['password'] . 
			"', status=1, date_add = NOW()");
	}

	function updateUser($user) {
		$result = $this->query("UPDATE user1 set first_name = '" . $user['first_name'] . 
			"', last_name = '" . $user['last_name'] . 
			"', email='" . $user['email'] . 
			"', password = '" .  $user['password'] . 
			"', status=1 WHERE user_id = '" . (int)$user['user_id'] . "'");
	}

}

?>