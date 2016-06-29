<h1>Choice one category list</h1>
<div class="row">
	<?php
	foreach ($categoryList as $category) : ?>
	<a href="?route=test/test&parameter=<?=$category['category_id'];?>"><div class="col-md-6"><img src="<?php echo $category['image'];?>"/><br/><?php echo $category['name']; ?> </div></a>
	<?php
	endforeach; ?>
</div>
