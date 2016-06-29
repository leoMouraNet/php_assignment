      <div class="starter-template">
        <h1>Register at LOCP</h1>
        <p class="lead">The perfect solution to approve MAD3134 - 44 successfully.<br><br></p>
      </div>
		<form role="form" action="?route=student/register&method=insert" method="post">
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
      </div>  
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="email" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd1">Password:</label>
		    <input type="password" class="form-control" id="pwd1" name="pwd1" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd2">Re-Password:</label>
		    <input type="password" class="form-control" id="pwd2" name="pwd2" required>
		  </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>  
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>  
		  <button type="submit" class="btn btn-default">Register</button>
		</form>