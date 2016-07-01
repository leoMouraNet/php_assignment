
      <div class="starter-template">
        <h1>Test Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Option List</h3>
      <br>
      <div id="menu_option" align="right">
        <a href="?route=test/option&method=newOption&parameter=<?=$question_id; ?>&test_id=<?=$test_id; ?>">New Option</a>
        <a href="?route=test/question&parameter=<?php echo $test_id; ?>">Back</a>
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Description</th>
                <th>Correct Option</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        foreach ($showOption as $rows) :?>
          <tr class="item_row">
                <td><?php echo $rows['question_option_id']; ?></td>
                <td> <?php echo $rows['description']; ?></td>
                <td> <?php echo $rows['correct_option']; ?></td>
                <td>
                <a href="?route=test/option&method=correct&parameter=<?php echo $rows['question_option_id']; ?>&question_id=<?php echo $question_id; ?>&test_id=<?=$test_id; ?>">Set Answer</a>
                <a href="?route=test/option&method=delete&parameter=<?php echo $rows['question_option_id']; ?>&question_id=<?php echo $question_id; ?>&test_id=<?=$test_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Del</a>
                <a href="?route=test/option&method=edit&parameter=<?php echo $rows['question_option_id']; ?>&question_id=<?php echo $question_id; ?>&test_id=<?=$test_id; ?>">Edit</a>
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

