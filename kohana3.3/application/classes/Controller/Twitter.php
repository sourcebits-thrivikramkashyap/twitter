<?php  defined('SYSPATH') or die('No direct script access');



class Controller_Twitter extends Controller{

	public function action_index()
	{
		
		$twitter = new Twitter;
		
		$twitter->connect('http://'.$_SERVER['HTTP_HOST'].'/Twitter');
		$twitter->post_status("posting to twitter");
		$account = $twitter->get_account_settings();echo "<pre>";print_r($account);		
		$friends_ids = $twitter->get_friends_ids();echo "<pre>";print_r($friends_ids);
		$friends_list = $twitter->get_friends_list();echo "<pre>";print_r($friends_list->users[0]);
		$tweets = $twitter->search_tweets("posting to twitter");echo "<pre>";print_r($tweets);
		$retweets = $twitter->get_retweets();echo "<pre>";print_r($retweets);
		
		die("posted to twitter");		
	}
}
