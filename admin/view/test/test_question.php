
      <div class="starter-template">
        <h1>Test Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Question List</h3>
      <br>
      <div id="menu_option" align="right">
        <a href="?route=test/question&method=newQuestion&parameter=<?php echo $test_id; ?>">New Question</a>
        <a href="?route=test/test_center">Back</a>
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Question</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($showTest as $rows) :?>
          <tr class="item_row">
                <td><?php echo ++$total; ?></td>
                <td> <?php echo $rows['question']; ?></td>
                <td>
                <a href="?route=test/option&parameter=<?php echo $rows['question_id']; ?>&test_id=<?php echo $test_id; ?>">View Options</a>
                <a href="?route=test/question&method=delete&parameter=<?php echo $rows['question_id']; ?>&test_id=<?php echo $test_id; ?>">Del</a>
                <a href="?route=test/question&method=edit&parameter=<?php echo $rows['question_id']; ?>&test_id=<?php echo $test_id; ?>">Edit</a>
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

