<?php
require_once('TwitterFeed.php');

$feed = new TwitterFeed();
$tweets = json_decode($feed->fetch());

// echo '<pre>' . var_export($tweets, true) . '</pre>';
foreach($tweets->statuses as $key=>$tweet) {
  // echo '<pre>' . var_export($tweet, true) . '</pre>';
  $id = $tweet->id_str;
  $tweet_url = 'https://twitter.com/statuses/' . $id;
  $text = $tweet->text;
  $date = date_create($tweet->created_at);
  $user_name =  $tweet->user->name;
  $user_screen_name =  $tweet->user->screen_name;
?>

<article>
  <a href="<?php echo $tweet_url ?>" target="_blank">
    <blockquote><?php echo $text ?></blockquote>
  </a>
  <header>
    <address>
      <div>
        <?php echo $user_name ?>
        <small>@<?php echo $user_screen_name ?></small>
      </div>
    </address>
    <time datetime="<?php echo date_format($date,"Y-m-d H:i") ?>">
      <?php
        if( date("Ymd") == date_format($date,"Ymd" ) )
          echo date_format($date,"H:i");
        else
          echo date_format($date,"d.m. | H:i");
      ?>
    </time>
  </header>
  <footer>
  </footer>
</article>

<?php } ?>