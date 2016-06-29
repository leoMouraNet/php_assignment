      <div class="starter-template">
        <h1>Test Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Test List</h3>
      <br>
      <div id="menu_option" align="right"> 
                  <a href="?route=test/test_center&method=showTestForm">Add Course</a>
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Course</th>
                <th>Description</th>
                <th>Time (min)</th>
                <th>Score (pts)</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($userTest as $rows) :?>
          <tr class="item_row">
                <td><?php echo ++$total; ?></td>
                <td> <?php echo $rows['name']; ?></td>
                <td> <?php echo $rows['description']; ?></td>
                <td> <?php echo $rows['time']; ?></td>
                <td> <?php echo $rows['pass_score']; ?></td>
                <td>
                <a href="?route=test/question&parameter=<?php echo $rows['test_id']; ?>">View</a>
                  <a href="?route=test/test_center&method=deleteTest&parameter=<?php echo $rows['test_id']; ?>">Del</a>
                  <a href="?route=test/test_center&method=editTest&parameter=<?php echo $rows['test_id']; ?>">Edit</a>
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

