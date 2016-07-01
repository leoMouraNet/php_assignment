<h1>Choose a test</h1>
<div class="row">
	<?php
	foreach ($testList as $test) : ?>
	<a href="?route=test/test&method=start&parameter=<?=$test['test_id'];?>">
		<div class="col-md-6">
			<div style="width: 200px;">
				<img src="images/<?php echo $test['image'];?>"/><br/>
				<p align="center"><?php echo $test['name']; ?><br/>
				<?php echo $test['description']; ?></p>
			</div>
		</div>
	</a>
	<?php
	endforeach; ?>
</div>
