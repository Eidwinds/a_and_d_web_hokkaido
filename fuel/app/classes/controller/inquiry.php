<?php

class Controller_Inquiry extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'お問い合わせ';
		$this->template->content = View::forge('inquiry/index');
	}

	public function post_index()
	{

		if (!isset($_POST['confirm']))
		{
			$this->template->title = 'お問い合わせ';
			$this->template->content = View::forge('inquiry/confirm');
		}
		else
		{
			$time = time();
			$query = DB::query("INSERT INTO `test`.`inquiries` (`id`, `title`, `ua`, `ip`, `name`, `email`, `tel`, `type`, `body`, `created_at`, `updated_at`) VALUES (NULL, '{$_POST['title']}', '{$_SERVER['HTTP_USER_AGENT']}', '{$_SERVER['REMOTE_ADDR']}', '{$_POST['name']}', '{$_POST['email']}', '{$_POST['tel']}', '{$_POST['type']}', '{$_POST['body']}', {$time}, {$time});");
			$query->execute();

			$this->template->title = 'お問い合わせ';
			$this->template->content = View::forge('inquiry/sent');
		}
	}
}
