<h1>Choose one category level</h1>
<div class="row">
	<?php
	foreach ($categoryList as $category) : ?>
	<a href="?route=test/test&parameter=<?=$category['category_id'];?>">
		<div class="col-md-6">
			<div style="width: 200px;">
				<img src="images/<?php echo $category['image'];?>"/><br/>
				<p align="center"><?php echo $category['name']; ?></p>
			</div>
		</div>
	</a>
	<?php
	endforeach; ?>
</div>
