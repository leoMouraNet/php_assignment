      <div class="starter-template">
        <h1>Edit Option</h1>
      </div>
		<form role="form" action="?route=test/option&method=save&test_id=<?=$_GET['test_id'];?>" method="post">
      <input type="hidden" name="question_id" value="<?=$question_id;?>">
      <input type="hidden" name="question_option_id" value="<?=$option['question_option_id'];?>">
      <div class="form-group">
        <label for="name">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="<?=$option['description'];?>" required>
      </div>
		  <button type="submit" class="btn btn-default">Save</button>
		</form>