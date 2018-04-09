<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://www.fox59.com/feed";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();
		$channel_title = $feed_data->channel->title;
		$this->set('rss_title',$channel_title);
	}

}

?>
