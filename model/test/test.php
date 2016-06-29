<?php
class ModelTestTest extends Model {
	function getAllTest($category_id) {
		$sql = "SELECT * FROM test where status = '1'";
		if ($category_id != 0) {
			$sql .= " AND category_id = '" . (int)$category_id . "'";
		}
		$tests = $this->query($sql);
		return $tests->rows;
	}

	function getTest($test_id) {
		$test = $this->query("SELECT * FROM test where test_id = '". (int)$test_id . "' AND status = '1'");
		return $test->row;
	}

	function getAllCategory() {
		$categories = $this->query("SELECT * FROM category where status = '1'");
		return $categories->rows;
	}

	function getCategory($category_id) {
		$category = $this->query("SELECT * FROM category where category_id = '". (int)$category_id . "' and status='1'");
		return $category->row;
	}	
}
?>