      <div class="starter-template">
        <h1>Test History</h1>
      </div>

      <div class="container">
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>ID</th>
                <th>Course</th>
                <th>Score</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($userTest as $test) :?>
          <tr class="item_row">
                <td><?php echo $test['student_test_id']; ?></td>
                <td> <?php echo $test['name']; ?></td>
                <td> <?php echo $test['score']; ?></td>
                <td> <?php echo $test['date_start']; ?></td>
                <?php
                  if ((int)$test['score']>=(int)$test['pass_score']) {
                    echo "<td class=success>Pass</td>";
                  } else {
                    echo "<td class=danger>Fail</td>";
                  }
                ?>
                <td>
                <a href="?route=test/history&method=viewTest&parameter=<?php echo $test['student_test_id']; ?>">View</a>
                </td>
          </tr>
        <?php endforeach;?>
        </tbody>
        </table>


      </div>