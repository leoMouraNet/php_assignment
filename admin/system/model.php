<?php
class Model {
	private $db;
	public function __construct() {
		$this->db = new DB(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	}

	function query($sql) {
		return $this->db->query($sql);
	}

	function escape($value) {
		return $this->db->real_escape_string($value);
	}

	function getLastId() {
		return $this->db->insert_id;
	}
}
?>