<?php

class Controller_Board extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = '掲示板';
		$this->template->content = View::forge('board/index');
	}

	public function post_index()
	{
		$time = time();
		$query = DB::query("INSERT INTO `test`.`boards` (`id`, `title`, `ua`, `ip`, `name`, `body`, `created_at`, `updated_at`) VALUES (NULL, '{$_POST['title']}', '{$_SERVER['HTTP_USER_AGENT']}', '{$_SERVER['REMOTE_ADDR']}', '{$_POST['name']}', '{$_POST['body']}', {$time}, {$time});");
		$query->execute();


		$this->template->title = '掲示板';
		$this->template->content = View::forge('board/index');
	}

}
