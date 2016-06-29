      <div class="starter-template">
        <h1>Register a new Category</h1>
      </div>
		<form role="form" action="?route=category/list&method=insert" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="image">Image Name with extension (e.g image.png):</label>
        <input type="text" class="form-control" id="image" name="image" required>
      </div>  
		  <button type="submit" class="btn btn-default">Add</button>
		</form>