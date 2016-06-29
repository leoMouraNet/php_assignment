      <div class="starter-template">
        <h1>Test Statistics</h1>
        <p class="lead">show current test statistics </p>
      </div>


<div class="container">
      <h3>Summary Students Test Status</h3>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Course</th>
                <th>Student</th>
                <th>Score (pts)</th>
                <th>Status</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($summaryTest as $rows) :?>
          <tr class="item_row">
                <td><?php echo ++$total; ?></td>
                <td> <?php echo $rows['name']; ?></td>
                <td> <?php echo $rows['first_name'] . " " . $rows['last_name']; ?></td>
                <td> <?php echo $rows['score']; ?></td>
                <!-- <td class="danger"> --> 
                    <?php 
                        if ($rows['score'] > 80){ 
                          echo "<td class = success>";
                          echo "pass";
                          echo "</td>";
                        }else {
                          echo "<td class = danger>";
                          echo "Fail";
                          echo "</td>";
                        } 

                    ?>
                <!-- </td> -->
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

      <div class="container" id="resume">
      <h3>Totals</h3>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>User Approved</th>
                <th>User Not Approved</th>
                <th>Avg Scores</th>
                <th>Currently Writing Test</th>
          </tr>
          </thead>
        <tbody>
          <tr class="item_row">
                <td><?php  echo $passedTest['passed']; ?></td>
                <td> <?php echo $notPassedTest['notPassed']; ?></td>
                <td> <?php echo $avgScoreAttempted['avgScore']; ?></td>
                <td> <?php echo $currentlyUsers['actualUsers']; ?></td>
          </tr>


        </tbody>
        </table>


      </div>

