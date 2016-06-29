      <div class="starter-template">
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
      </div>  
		  <button type="submit" class="btn btn-default">Save</button>
		</form>