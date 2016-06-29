      <div class="starter-template">
        <h1>Category Center</h1>
        <p class="lead">CRUD<br></p>
      </div>

      <div class="container">
      <h3>Category List</h3>
      <br>
      <div id="menu_option" align="right">
        <a href="?route=category/list&method=newCategory">New Category</a>
      </div>
      <br>
        <table class="table table-bordered">
          <thead align="left" style="display: table-header-group">
          <tr class="info">
                <th>Item</th>
                <th>Category</th>
                <th>Action</th>
          </tr>
          </thead>
        <tbody>
        <?php 
        $total = 0;
        foreach ($categoryList as $category) :?>
          <tr class="item_row">
                <td><?php echo $category['category_id']; ?></td>
                <td> <?php echo $category['name'];?></td>
                <td>
                <a href="?route=category/list&method=delete&parameter=<?php echo $category['category_id']; ?>">Del</a>
                <a href="?route=category/list&method=edit&parameter=<?php echo $category['category_id']; ?>">Edit</a>
                </td>
          </tr>
        <?php endforeach;?>


        </tbody>
        </table>


      </div>

