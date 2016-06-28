      <div class="starter-template">
        <h1>Lambton's Online Certification Program (LOCP)</h1>
        <p class="lead">The perfect solution to approve MAD3134 - 44 successfully.<br></p>
      </div>

      <?php if (isset($errorMsg)) { ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?=$errorMsg;?>
        </div>
      <?php } ?>