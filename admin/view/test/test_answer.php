      <div class="starter-template">
        <h1>Test Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Test List</h3>
      <br>
      <div id="menu_option" align="right"> 
                  <a href="#">Back</a>
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Answer</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($showAnswer as $rows) :?>
          <tr class="item_row">
                <td><?php echo ++$total; ?></td>
                <td> <?php echo $rows['description']; ?></td>
                <td>
                <a href="?route=test/test_center&method=viewTest&parameter=<?php echo $rows['question_option_id']; ?>">Edit</a>
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

