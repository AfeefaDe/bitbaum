<?php
// API wrapper for frab conference system: https://github.com/frab/frab
// this wrapper was created for the "Bits und Bäume" Konferenz 2018; by www.kollektiv.afeefa.de

class FrabFeed {

  const BASE_URL = "https://events.ccc.de/congress/2017/Fahrplan/";
  const DATA_URLS = array(
    "schedule" => "schedule.json",
    "speakers" => "speakers.json"
  );

  private $interval;
	private $cacheFileSchedule;
  private $cacheFileSpeakers;
  
  private $data = array(
    "schedule" => null,
    "speakers" => null
  );

  public function __construct() {
    // $settings = require_once('config/secrets.php');
    // $this->apiClient = new TwitterAPIExchange($settings);

    // $url = 'https://api.twitter.com/1.1/search/tweets.json';
    // $getfield = '?q=from:SustDigi OR #bitsundbäume&result_type=recent&count=100';
    // //ggf: &include_entities=false

    // $this->apiClient->setGetfield($getfield)->buildOauth($url, 'GET');
    $this->interval = 60;
    $this->cacheFileSchedule = './frab_feed_schedule_cache.txt';
    $this->cacheFileSpeakers = './frab_feed_speakers_cache.txt';
  }

  public function fetch() {
    if (file_exists($this->cacheFileSchedule) && (filemtime($this->cacheFileSchedule) > (time() - $this->interval))) {
			// return file_get_contents($this->cacheFileSchedule);
			$this->data["schedule"] = json_decode( file_get_contents($this->cacheFileSchedule) );
		} else {
      try {
          $schedule = file_get_contents(self::BASE_URL . self::DATA_URLS["schedule"]);
          file_put_contents($this->cacheFileSchedule, $schedule, LOCK_EX);
			    $this->data["schedule"] = json_decode( $schedule );
    } catch (Exception $e) {
          return "{error: \"frab API not reachable\"}";
      }
		}
  }

  public function getSlots() {
    $slots = array();
    
    // collect slots from all rooms and concat
    foreach ($this->data["schedule"]->schedule->conference->days[0]->rooms as $room => $slot) {
      $slots = array_merge($slots, $slot);
    }

    // sort by time
    usort($slots, function($a, $b) {
      $aDate = date_format(date_create($a->date), "U");
      $bDate = date_format(date_create($b->date), "U");
      return $aDate - $bDate;
    });

    return $slots;
  }
}

?>