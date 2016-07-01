      <div class="starter-template">
        <h1>Edit Question</h1>
      </div>
		<form role="form" action="?route=test/question&method=save" method="post">
      <input type="hidden" name="test_id" value="<?=$question['test_id'];?>">
      <input type="hidden" name="question_id" value="<?=$question['question_id'];?>">
      <div class="form-group">
        <label for="name">Question:</label>
        <input type="text" class="form-control" id="question" name="question" value="<?=$question['question'];?>" required>
      </div>
		  <button type="submit" class="btn btn-default">Save</button>
		</form>