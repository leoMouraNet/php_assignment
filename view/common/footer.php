    </div><!-- /.container -->


    <div id="myfooter">
        <?php
        if (!$this->student->isLogged()) { 
            echo "<p>Sign-up for a free membership account now and get access to all our free courses</p>";
        } else { 
            echo "<p>&copy; copyright " . date("Y"); 
        } ?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>