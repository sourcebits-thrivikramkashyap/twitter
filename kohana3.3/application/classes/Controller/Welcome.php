<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	
	public function action_index()
	{		
		 //$this->response->body('hello, world!');
		
		//$view = new View('welcome_content');
		//$view = View::factory('welcome_content');
		
		//$this->response->body($view);
		
		$view = View::factory('user/register')
		->set('errors', NULL)
		->set('post', NULL);

		$this->response->body($view);     
		
	}

} // End Welcome
