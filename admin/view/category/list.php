      <div class="starter-template">
<<<<<<< HEAD
        <h1>Category Center</h1>
=======
        <h1>Student Center</h1>
>>>>>>> 92cba0a4431ee2f9b5e3a867a69b7800c0eda229
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
<<<<<<< HEAD
      <h3>Category List</h3>
      <br>
      <div id="menu_option" align="right">
        <a href="?route=category/list&method=newCategory">New Category</a>
=======
      <h3>Student List</h3>
      <br>
      <div id="menu_option" align="right">
        <a href="?route=student/list&method=newStudent">New Student</a>
>>>>>>> 92cba0a4431ee2f9b5e3a867a69b7800c0eda229
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
<<<<<<< HEAD
                <th>Category</th>
=======
                <th>Name</th>
                <th>E-mail</th>
>>>>>>> 92cba0a4431ee2f9b5e3a867a69b7800c0eda229
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
<<<<<<< HEAD
        foreach ($categoryList as $category) :?>
          <tr class="item_row">
                <td><?php echo $category['category_id']; ?></td>
                <td> <?php echo $category['name'];?></td>
                <td>
                <a href="?route=category/list&method=delete&parameter=<?php echo $category['category_id']; ?>">Del</a>
                <a href="?route=category/list&method=edit&parameter=<?php echo $category['category_id']; ?>">Edit</a>
=======
        foreach ($studentList as $student) :?>
          <tr class="item_row">
                <td><?php echo $student['student_id']; ?></td>
                <td> <?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
                <td> <?php echo $student['email'];?></td>
                <td>
                <a href="?route=student/list&method=delete&parameter=<?php echo $student['student_id']; ?>">Del</a>
                <a href="?route=student/list&method=edit&parameter=<?php echo $student['student_id']; ?>">Edit</a>
>>>>>>> 92cba0a4431ee2f9b5e3a867a69b7800c0eda229
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

