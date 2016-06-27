      <div class="starter-template">
        <h1>Admin Panel (LOCP)</h1>
        <p class="lead">CRUD<br></p>
      </div>



      <form class="form-signin" action="?route=user/login&method=login" method="post">
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=$errorMsg;?>
          </div>
        <?php } ?>
        <h2 class="form-signin-heading" align="center">Login</h2>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>