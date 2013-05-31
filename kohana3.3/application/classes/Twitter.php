<?php
include($_SERVER['DOCUMENT_ROOT']."/application/helpers/EpiTwitter.php");

/*
 * @class : Twitter
 * @desc  : class for twitter connectivity and twitter apis.
 */
class Twitter {
	
	var $twitter;
	var $twitter_url;
	
	protected $consumer_key = 'NMStUVVKyL8kvnJ4SNCEIg';
	protected $consumer_secret = 'sIcOGLQ2xVA3YAAVXS637km6ESYJfBjg7Scfhl8s';
	protected $token = '';
	protected $token_secret = '';
	/*
	 * function : connect
	 * desc		: redirects to twitter to approve the use of the user's twitter credentials
	 * 			  and returns back to the specified callback url, gets and sets access tokens.
	 * param	: callback_url  	  			  
	 */
	public function connect($callback_url)
	{		
		//$twitter = new EpiTwitter('NMStUVVKyL8kvnJ4SNCEIg', 'sIcOGLQ2xVA3YAAVXS637km6ESYJfBjg7Scfhl8s');
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);
		$twitter_url = $twitter->getAuthenticateUrl(NULL, array('oauth_callback' => $callback_url));
		
		if(empty($_GET['oauth_token']))
		{
			header('Location:'.$twitter_url);
			exit;
		}
		else
		{
			$twitter->setToken($_GET['oauth_token']);
			$token = $twitter->getAccessToken();
			$twitter->setToken($token->oauth_token, $token->oauth_token_secret);
			//$twuser = $twitter->get_accountVerify_Credentials();die("here");
			
			$_SESSION['oauth_tokens']['token'] = $token->oauth_token;
			$_SESSION['oauth_tokens']['token_secret'] = $token->oauth_token_secret;
			$this->token = $token->oauth_token;
			$this->token_secret = $token->oauth_token_secret;
			// oauth_token and oauth_token_secret can be stored in db.
			
		//	$status = $twitter->post('/statuses/update.json', array('status' => date('l jS \of F Y h:i:s A')));
		}
	}
	
	/*
	 * Function : create_twitter_object
	 * params 	: consumer_key, consumer_secret
	 * returns	: EpiTwitter object 
	 *
	 */
	public function create_twitter_object($consumer_key, $consumer_secret)
	{
		return new EpiTwitter($consumer_key, $consumer_secret);
	}
	
	
	
	
	/*
	 * Function : get_account_settings
	 * desc		: returns user account info
	 * returns	: an array containing user information
	 */
	
	public function get_account_settings()
	{
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);				
		$twitter->setToken($_SESSION['oauth_tokens']['token'], $_SESSION['oauth_tokens']['token_secret']);
		$account = $twitter->get('/account/settings.json');
		
		return $account->response;
	}
	
	public function get_retweets()
	{
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);				
		$twitter->setToken($this->token, $this->token_secret);
		$tweets = $twitter->get('/statuses/retweets_of_me.json');
		$tweets = json_decode(json_encode($tweets->response));
		
		return $tweets;
	}
	
	/*
	 * Function : post_status
	 * desc		: update current user's status
	 * param	: message
	 */
	public function post_status($message)
	{		
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);		
		//$twitter->setToken('1388944016-RGEWLWlL9hld28k60RYxQ6EgusjF1ckd6ye7J7n', 'c1ZqFLMOwIOGjixjSAZtIeN093DZWIPFrW0Iv7fkeko');
		$twitter->setToken($_SESSION['oauth_tokens']['token'], $_SESSION['oauth_tokens']['token_secret']);
		$twitter->post('/statuses/update.json', array('status' => $message.date('l jS \of F Y h:i:s A')));
	}
	
	/*
	 * Function : search_tweets
	 * desc		: returns a collection of relevant tweets matching a specified query
	 * param	: query
	 */
	
	public function search_tweets($query)
	{
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);				
		$twitter->setToken($this->token, $this->token_secret);
		$tweets = $twitter->get('/search/tweets.json', array('q' => $query));
		$tweets = json_decode(json_encode($tweets->response));
		
		return $tweets;
	}
	
	/*
	 * Function : get_friends_ids
	 * desc		: gets a cursored collection of friends_ids	 * 
	 * returns	: array
	 */
	 
	public function get_friends_ids()
	{
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);				
		$twitter->setToken($_SESSION['oauth_tokens']['token'], $_SESSION['oauth_tokens']['token_secret']);
		$friends_ids = $twitter->get('/friends/ids.json', array('screen_name' => "testtwlogin"));
		$friends_ids = json_decode(json_encode($friends_ids->response));
		
		return $friends_ids;
	}
	
	/*
	 * Function : get_friends_list
	 * desc		: gets a cursored collection of user objects for every user the specified user is following
	 * returns 	: array
	 */
	
	public function get_friends_list()
	{
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);				
		$twitter->setToken($this->token, $this->token_secret);
		$friends_list = $twitter->get('/friends/list.json', array('screen_name' => "testtwlogin"));
		$friends_list = json_decode(json_encode($friends_list->response));
		
		return $friends_list;	
	}
	
	
	public function get_followers_list()
	{
		$twitter = $this->create_twitter_object($this->consumer_key, $this->consumer_secret);				
		$twitter->setToken($this->token, $this->token_secret);
		$friends_list = $twitter->get('/followers/list.json', array('screen_name' => "testtwlogin"));
		$friends_list = json_decode(json_encode($friends_list->response));
		
		return $friends_list;	
	}
	
}