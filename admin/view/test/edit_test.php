      <div class="starter-template">
        <h1>Edit test</h1>
      </div>
		<form role="form" action="?route=test/test_center&method=saveTest" method="post">
      <input type="hidden" name="test_id" value="<?=$test_info['test_id'];?>">
      <div class="form-group">
        <label for="name">Course:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?=$test_info['name'];?>" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="<?=$test_info['description'];?>" required>
      </div>  
      <div class="form-group">
        <label for="description">Category:</label>
        <select class="form-control" id="category_id" name="category_id" required>
          <?php foreach ($categoryList as $category) : ?>
            <option value="<?=$category['category_id'];?>" <?=$category['category_id']==$test_info['category_id']?'selected':'';?>><?=$category['name'];?></option>
          <?php endforeach; ?>
        </select>
      </div>  
      <div class="form-group">
        <label for="description">Image:</label>
        <input type="text" class="form-control" id="image" name="image" value="<?=$test_info['image'];?>" required>
      </div>  
		  <div class="form-group">
		    <label for="total_question">Total Questions:</label>
		    <input type="text" class="form-control" id="total_question" name="total_question" value="<?=$test_info['total_question'];?>" required>
		  </div>
		  <div class="form-group">
		    <label for="pass_score">Min Score</label>
		    <input type="text" class="form-control" id="pass_score" name="pass_score" value="<?=$test_info['pass_score'];?>" required>
		  </div>
      <div class="form-group">
        <label for="time">Duration:</label>
        <input type="text" class="form-control" id="time" name="time" value="<?=$test_info['time'];?>" required>
      </div>  
		  <button type="submit" class="btn btn-default">Save</button>
		</form>