      <div class="starter-template">
        <h1>Student Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Student List</h3>
      <br>
      <div id="menu_option" align="right">
        <a href="?route=student/list&method=newStudent">New Student</a>
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($studentList as $student) :?>
          <tr class="item_row">
                <td><?php echo $student['student_id']; ?></td>
                <td> <?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
                <td> <?php echo $student['email'];?></td>
                <td>
                <a href="?route=student/list&method=delete&parameter=<?php echo $student['student_id']; ?>">Del</a>
                <a href="?route=student/list&method=edit&parameter=<?php echo $student['student_id']; ?>">Edit</a>
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

