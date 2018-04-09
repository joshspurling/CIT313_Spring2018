<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://www.newsweek.com/rss";
		$rss = new RssDisplay($feed);

		$channel = $rss->getChannelInfo();

		$channel_title = $channel->channel->title;
		$this->set('rss_title',$channel_title);

		$feed_data = $rss->getFeedItems(8);

		$item_title = $feed_data->channel->item->title;
		$this->set('item_title',$item_title);

		$item_link = $feed_data->channel->item->link;
		$this->set('item_link',$item_link);

		$item_date = $feed_data->channel->item->pubDate;
		$this->set('item_date',$item_date);

		$item_description = $feed_data->channel->item->description;
		$this->set('item_description',$item_description);

		
	}

}

?>
