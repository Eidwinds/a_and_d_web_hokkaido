<?php
class Controller_Index extends Controller
{
    public function action_Index()
    {
        Response::redirect('/page.php?p=index&t=TOP');
    }
}