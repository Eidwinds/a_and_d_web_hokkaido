<h1 class="text-center">お問い合わせ</h1>
<form action="" method="post">
	<div class="form-group">
		<label>タイトル</label>
		<input type="hidden" class="form-control" name="title" value="<?= $_POST['title']?>">
		<div><?= $_POST['title']?></div>
	</div>
	<div class="form-group">
		<label>お名前</label>
		<input type="hidden" class="form-control" name="name" value="<?= $_POST['name']?>">
		<div><?= $_POST['name']?></div>
	</div>
	<div class="form-group">
		<label>メールアドレス</label>
		<input type="hidden" class="form-control" name="email" value="<?= $_POST['email']?>">
		<div><?= $_POST['email']?></div>
	</div>
	<div class="form-group">
		<label>電話番号</label>
		<input type="hidden" class="form-control" name="tel" value="<?= $_POST['tel']?>">
		<div><?= $_POST['tel']?></div>
	</div>
	<div class="form-group">
		<label>種類</label>
		<input type="hidden" class="form-control" name="type" value="<?= $_POST['type']?>">
		<div><?php
			if($_POST['type'] == 1)
			{
				echo  '採用について';
			}
			else if($_POST['type'] == 2)
			{
				echo  'その他';
			}
			else
			{
				echo  '商品について';
			}
			?></div>
	</div>
	<div class="form-group">
		<label>内容</label>
		<input type="hidden" class="form-control" name="body" value="<?= $_POST['body']?>">
		<div><?= $_POST['body']?></div>
	</div>
	<button type="submit" name="confirm" value="1">確認</button>
</form>