      <div class="starter-template">
<<<<<<< HEAD
        <h1>Edit Category</h1>
      </div>
		<form role="form" action="?route=category/list&method=save" method="post">
      <input type="hidden" name="category_id" value="<?=$category['category_id'];?>" >
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?=$category['name'];?>" required>
      </div>
      <div class="form-group">
        <label for="image">Image Name with extension (e.g image.png):</label>
        <input type="text" class="form-control" id="image" name="image" value="<?=$category['image'];?>" required>
=======
        <h1>Edit Student</h1>
      </div>
		<form role="form" action="?route=student/list&method=save" method="post">
      <input type="hidden" name="student_id" value="<?=$student['student_id'];?>" >
      <div class="form-group">
        <label for="first_name">Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$student['first_name'];?>" required>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="<?=$student['last_name'];?>" required>
      </div>  
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="email" value="<?=$student['email'];?>" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd1">Password:</label>
		    <input type="password" class="form-control" id="pwd1" name="pwd1" value="<?=$student['password'];?>" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd2">Re-Password:</label>
		    <input type="password" class="form-control" id="pwd2" name="pwd2" value="<?=$student['password'];?>" required>
		  </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?=$student['phone'];?>" required>
      </div>  
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" value="<?=$student['address'];?>" required>
>>>>>>> 92cba0a4431ee2f9b5e3a867a69b7800c0eda229
      </div>  
		  <button type="submit" class="btn btn-default">Save</button>
		</form>