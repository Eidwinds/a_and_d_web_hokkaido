<h1 class="text-center">掲示板</h1>
<p class="text-center">弊社の製品に関する掲示板です。ご自由にお使いください。</p>
<form action="" method="post">
	<div class="form-group">
		<label>タイトル</label>
		<input class="form-control" name="title" >
	</div>
	<div class="form-group">
		<label>お名前</label>
		<input class="form-control" name="name" >
	</div>
	<div class="form-group">
		<label>内容</label>
		<textarea class="form-control" name="body"></textarea>
	</div>
	<button type="submit">送信</button>

	<?php foreach (Model_Board::find('all') as $board): ?>
		<div>
			<h2><?= $board->title; ?></h2>
			<div><?= $board->body; ?></div>
			<div class="text-right"><?= $board->name; ?>, <?= date('Y/m/d H:i:s', $board->created_at); ?></div>
		</div>
		<hr>
	<?php endforeach; ?>
</form>