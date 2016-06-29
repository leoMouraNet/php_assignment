      <div class="starter-template">
        <h1><?=$test_info['name'];?></h1>
        <h2><?=$test_info['description'];?></h2>
        <h3>Your score: <?=$test_info['score'];?></h3>
      </div>

      <div class="container">
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>#</th>
                <th>Question</th>
                <th>Your Answer</th>
                <th>Right</th>
                <th>Date</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($test_result as $answer) :?>
          <tr class="item_row">
                <td><?php echo ++$total; ?></td>
                <td> <?php echo $answer['question']; ?></td>
                <td class="<?=$answer['description']==$answer['rAnswer']?'success':'danger';?>"> <?php echo $answer['description']; ?></td>
                <td> <?php echo $answer['rAnswer']; ?></td>
                <td> <?php echo $answer['date_add']; ?></td>
          </tr>
        <?php endforeach;?>
        </tbody>
        </table>


      </div>