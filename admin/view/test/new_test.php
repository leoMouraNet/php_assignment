      <div class="starter-template">
        <h1>Register a new test</h1>
      </div>
		<form role="form" action="?route=test/test_center&method=addTest" method="post">
      <div class="form-group">
        <label for="name">Course:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" name="description" required>
      </div>
      <div class="form-group">
        <label for="description">Category:</label>
        <select class="form-control" id="category_id" name="category_id" required>
          <?php foreach ($categoryList as $category) : ?>
            <option value="<?=$category['category_id'];?>"><?=$category['name'];?></option>
          <?php endforeach; ?>
        </select>
      </div>  
      <div class="form-group">
        <label for="description">Image:</label>
        <input type="text" class="form-control" id="image" name="image" required>
      </div>  
		  <div class="form-group">
		    <label for="total_question">Total Questions:</label>
		    <input type="text" class="form-control" id="total_question" name="total_question" required>
		  </div>
		  <div class="form-group">
		    <label for="pass_score">Min Score</label>
		    <input type="text" class="form-control" id="pass_score" name="pass_score" required>
		  </div>
      <div class="form-group">
        <label for="time">Duration:</label>
        <input type="text" class="form-control" id="time" name="time" required>
      </div>  
		  <button type="submit" class="btn btn-default">Add</button>
		</form>