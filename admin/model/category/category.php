<?php
class ModelCategoryCategory extends Model {
	
	function getAllCategories() {
		$categories = $this->query("SELECT * FROM category WHERE status=1");
		return $categories->rows;
	}


	function getCategory($category_id) {
		$category = $this->query("SELECT * FROM category WHERE category_id = '" . (int)$category_id . "'");
		return $category->row;
	}

	function insertCategory($category){
		$this->query("INSERT INTO category set name = '" . $category['name'] . "', last_name = '" . $category['last_name'] . "', email='" . $category['email'] . "', password = '" .  $category['password'] . "', phone = '" . $category['phone'] . "', address = '" . $category['address'] . "', status=1, date_add = NOW()");
	}

	function updateCategory($category) {
		$this->query("UPDATE category set first_name = '" . $category['first_name'] . "', last_name = '" . $category['last_name'] . "', email='" . $category['email'] . "', password = '" .  $category['password'] . "', phone = '" . $category['phone'] . "', address = '" . $category['address'] . "', status=1 WHERE category_id = '" . (int)$category['category_id'] . "'");
	}

	function deleteCategory($category_id) {
		$this->query("UPDATE category set status = '0' WHERE category_id = '" . (int)$category_id . "'");
	}


}

?>