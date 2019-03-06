<?php
//Twitter API Wrapper: http://github.com/j7mbo/twitter-api-php
//maybe include with composer: composer require j7mbo/twitter-api-php
require_once('TwitterAPIExchange.php');

class TwitterFeed
{
    private $apiClient;

    private $interval;

    private $cacheFile;

    public function __construct()
    {
        $settings = require_once('config/secrets.php');
        $this->apiClient = new TwitterAPIExchange($settings);

        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=from:SustDigi OR #bitsundbäume&result_type=recent&count=100';
        //ggf: &include_entities=false

        $this->apiClient->setGetfield($getfield)->buildOauth($url, 'GET');
        $this->interval = 10;
        $this->cacheFile = './twitter_feed_cache.txt';
    }


    public function fetch()
    {
        if (file_exists($this->cacheFile) && (filemtime($this->cacheFile) > (time() - $this->interval))) {
            return file_get_contents($this->cacheFile);
        } else {
            try {
                $tweets = $this->apiClient->performRequest();
                if ($this->apiClient->getHttpStatusCode() == 200) {
                    file_put_contents($this->cacheFile, $tweets, LOCK_EX);
                    return $tweets;
                } else {
                    return "{error: \"" . $this->apiClient->getHttpStatusCode() . "\"}";
                }
            } catch (Exception $e) {
                return "{error: \"Twitter API not reachable\"}";
            }
        }
    }
}