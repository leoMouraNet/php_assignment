<h1>Choice one category list</h1>
<div class="row">
	<?php
	$i = 0;
	foreach ($categoryList as $category) : ?>
	<a href="?route=test/test&method=getAllTests&parameter=<?=$category['category_id"]><div class="col-md-6"><img src="<?php echo $category['image'];?>"><?php echo $category['name']; ?> </div></a>
	<?php
	i++;
	if (i%2) { echo '</div><div class="row">';
	endforeach; ?>
</div>
