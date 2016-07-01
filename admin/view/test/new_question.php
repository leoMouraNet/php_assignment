      <div class="starter-template">
        <h1>Register a new question</h1>
      </div>
		<form role="form" action="?route=test/question&method=insert" method="post">
      <input type="hidden" name="test_id" value="<?=$test_id;?>">
      <div class="form-group">
        <label for="name">Question:</label>
        <input type="text" class="form-control" id="question" name="question" required>
      </div>
		  <button type="submit" class="btn btn-default">Add</button>
		</form>