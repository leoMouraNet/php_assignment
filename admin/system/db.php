<?php
class DB {
	private $datab;
	public function __construct($hostname, $username, $password, $database) {
		$this->datab = new \mysqli($hostname, $username, $password, $database);

		if ($this->datab->connect_error) {
			trigger_error('Error: Could not make a database link (' . $this->datab->connect_errno . ') ' . $this->datab->connect_error);
			exit();
		}

		$this->datab->set_charset("utf8");
		$this->datab->query("SET SQL_MODE = ''");
	}

	public function query($sql) {
		$query = $this->datab->query($sql);

		if (!$this->datab->errno) {
			if ($query instanceof \mysqli_result) {
				$data = array();

				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->num_rows = $query->num_rows;
				$result->row = isset($data[0]) ? $data[0] : array();
				$result->rows = $data;

				$query->close();

				return $result;
			} else {
				return true;
			}
		} else {
			trigger_error('Error: ' . $this->datab->error  . '<br />Error No: ' . $this->datab->errno . '<br />' . $sql);
		}
	}

	public function escape($value) {
		return $this->datab->real_escape_string($value);
	}

	public function countAffected() {
		return $this->datab->affected_rows;
	}

	public function getLastId() {
		return $this->datab->insert_id;
	}

	public function __destruct() {
		$this->datab->close();
	}
}
?>