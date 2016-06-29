      <div class="starter-template">
        <h1>Register a new option</h1>
      </div>
		<form role="form" action="?route=test/option&method=insert&test_id=<?=$_GET['test_id'];?>" method="post">
      <input type="hidden" name="question_id" value="<?=$question_id;?>">
      <div class="form-group">
        <label for="name">Option:</label>
        <input type="text" class="form-control" id="description" name="description" required>
      </div>
		  <button type="submit" class="btn btn-default">Add</button>
		</form>