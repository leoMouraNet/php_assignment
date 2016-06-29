<?php
	class ControllerCategoryList extends Controller {
		function index() {
			$model_category_category = $this->loadModel('category/category');
			$categoryList = $model_category_category->getAllCategories();
			
			include('view/common/header.php');
			include('view/category/list.php');
			include('view/common/footer.php');
		}

		function newCategory() {
			include('view/common/header.php');
			include('view/category/new.php');
			include('view/common/footer.php');
		}

		function insert() {
			$category = array(
				'name' => $_POST['name'],
				'image' => $_POST['image']
			);

			$model_category_category = $this->loadModel("category/category");
			$model_category_category->insertCategory($category);

			header('Location: http://localhost/php_assignment/admin/index.php?route=category/list');
		}

		function delete($category_id){
			$model_category_category = $this->loadModel("category/category");
			$category = $model_category_category->deleteCategory($category_id);
			header('Location: http://localhost/php_assignment/admin/index.php?route=category/list');			
		}

		function info($category_id) {
			$model_category_category = $this->loadModel("category/category");
			$category = $model_category_category->getCategory($category_id);

		}

		function edit($category_id) {
			$model_category_category = $this->loadModel("category/category");
			$category = $model_category_category->getCategory($category_id);
			include('view/common/header.php');
			include('view/category/edit.php');
			include('view/common/footer.php');
		}

		function save() {
			$category = array(
				'student_id' => $_POST['student_id'],
				'first_name' => $_POST['first_name'],
				'last_name' => $_POST['last_name'],
				'email' => $_POST['email'],
				'password' => $_POST['pwd1'],
				'phone' => $_POST['phone'],
				'address' => $_POST['address']
			);

			$model_category_category = $this->loadModel("category/category");
			$model_category_category->updateCategory($category);

			header('Location: http://localhost/php_assignment/admin/index.php?route=category/list');
		}
	}
?>