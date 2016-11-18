<?php

class Controller_Check extends Controller_Rest
{

	public function before()
	{
		parent::before();
		if($_SERVER['REMOTE_ADDR'] != '10.0.2.2')
		{
			exit();
		}
	}

	public function action_index()
	{

	}

	public function post_ua()
	{
		$board = Model_Board::find('first', [
			'where' => [
				['ua', Input::post('ua')]
			]
		]);

		if($board == null)
		{
			$board = Model_Board::forge();
		}

		return $this->response([
			"body" => $board->body
		]);
	}



}
