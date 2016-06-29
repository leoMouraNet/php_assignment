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
			<div class='radio'><label><input type='radio' name='answer' value='<?=$options[0]['question_option_id'];?>' <?=isset($answer[$count]) && $answer[$count]==$options[0]['question_option_id']?'checked':'';?> /> <?=$options[0]['description'];?> <?=$options[0]['correct_option'];?></label></div>
			<div class='radio'><label><input type='radio' name='answer' value='<?=$options[1]['question_option_id'];?>' <?=isset($answer[$count]) && $answer[$count]==$options[1]['question_option_id']?'checked':'';?> /> <?=$options[1]['description'];?> <?=$options[1]['correct_option'];?></label></div>
			<div class='radio'><label><input type='radio' name='answer' value='<?=$options[2]['question_option_id'];?>' <?=isset($answer[$count]) && $answer[$count]==$options[2]['question_option_id']?'checked':'';?> /> <?=$options[2]['description'];?> <?=$options[2]['correct_option'];?></label></div>
			<div class='radio'><label><input type='radio' name='answer' value='<?=$options[3]['question_option_id'];?>' <?=isset($answer[$count]) && $answer[$count]==$options[3]['question_option_id']?'checked':'';?> /> <?=$options[3]['description'];?> <?=$options[3]['correct_option'];?></label></div>
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
