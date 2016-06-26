      <div class="starter-template">
        <h1>Test Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Test List</h3>
      <br>
      <div id="menu_option" align="right"> 
                  <button type="summit" onclick="?route=user/test_center&method=showTestForm" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Course
                  </button>

                  <br>
                  <br>
                  <a href="?route=user/test_center&method=showTestForm">Add Course</a>
                  <!-- <a href="?route=user/statistics&method=statistics">Statistics</a> -->


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
                  <button type="button" class="btn btn-default btn-xs">
                  <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span> Del
                  </button>

                  <button type="button" class="btn btn-default btn-xs">
                  <span class="glyphicon glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Edt
                  </button>
                </td>
          </tr>
        <?php endforeach;?>
        </tbody>
        </table>


      </div>

