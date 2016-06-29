<h1>Dashboard Page</h1>

Welcome <?php echo $this->student->getName(); ?>
<br><br>
Please click the menu icon to start your certification exame.

  <h3>Your Last Five Summary Test</h3>
  <br>
    <table class="table table-bordered">
      <thead align="left" style="display: table-header-group">
      <tr class="info">
            <th>Item</th>
            <th>Course</th>
            <th>Student</th>
            <th>Score (pts)</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
      </tr>
      </thead>
    <tbody>
    <?php 
    $total = 0;
    foreach ($summaryTest as $rows) :?>
      <tr class="item_row">
            <td><?php echo ++$total; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['first_name'] . " " . $rows['last_name']; ?></td>
            <td> <?php echo $rows['score']; ?></td>
            <!-- <td class="danger"> --> 
                <?php 
                    if ($rows['score'] >= 80){ 
                      echo "<td class = success>";
                      echo "pass";
                      echo "</td>";
                    }else {
                      echo "<td class = danger>";
                      echo "Fail";
                      echo "</td>";
                    } 

                ?>
              <td><?php echo $rows['date_end']; ?></td>
              <td><a href="?route=test/history&method=viewTest&parameter=<?php echo $rows['student_test_id']; ?>">View</a></td>
            <!-- </td> -->
      </tr>
    <?php endforeach;?>


    </tbody>
    </table>


  </div>
