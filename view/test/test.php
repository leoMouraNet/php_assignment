<h1>Choice a test</h1>
<div class="row">
	<?php
	foreach ($testList as $test) : ?>
	<a href="?route=test/test&method=start&parameter=<?=$test['test_id'];?>"><div class="col-md-6"><img src="<?php echo $test['image'];?>"/><br/><?php echo $test['name']; ?><br/><?php echo $test['description']; ?> </div></a>
	<?php
	endforeach; ?>
</div>
