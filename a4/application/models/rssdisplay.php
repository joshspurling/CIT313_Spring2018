<?php
class RssDisplay extends Model {

    protected $feed_url;
    protected $num_items;

    public function __construct($url){

        parent::__construct();
        $this->feed_url = $url;
        }

      public function getFeedItems($num_feed_items){
        $items = simplexml_load_file($this->feed_url);
        return $items;
        /*
        this public method should return an array of feed items, but not the channel
         info. These items should include the title, description, link, and pubDate
        for each item. The parameter of $num_feed_items should dictate the number of
        feed items to return. It should also assign the protected property
        $num_feed_items this parameter.*/
      }

      public function getChannelInfo(){
        $channel = simplexml_load_file($this->feed_url);
        return $channel;
       }
    }
