	<h1><?=$test_info['name'];?></h1>
	<h2><?=$test_info['description'];?></h2>
	<div class="progress">
		<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?=$count*100/count($questions);?>%">
		</div>
	</div>
	<div id="question">
	<?php if ((int)$count<(int)count($questions)) { ?>
			<h1>Question <?=$count+1;?></h1>
			<p style="margin-bottom:30px;"><?=$questions[$count]['question'];?></p>
			<form role="form" name="questionForm" method='post' action="?route=student/question&parameter=<?=$count+1;?>">
				<?php foreach ($options as $option) : ?>
					<div class='radio'><label><input type='radio' name='answer' value='<?=$option['question_option_id'];?>' <?=isset($answer[$count]) && $answer[$count]==$option['question_option_id']?'checked':'';?> /> <?=$option['description'];?> <?=$option['correct_option']?".":"";?></label></div>
				<?php endforeach; ?>
			<br>
			<?php if($count!=0) { ?>
				<a class="btn btn-success" href="?route=student/question&parameter=<?=$count-1;?>">Previous</a>
			<?php } ?>
			<input type="submit" class="btn btn-warning" value="Next">	
			</form>
	<?php } else { ?>
			<p>Finish your Test and check your score!</p>
			<a class="btn btn-success" href="?route=test/test&method=end">End Test</a>
	<?php } ?>
		</div>
