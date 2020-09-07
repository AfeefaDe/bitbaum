<?php
require_once 'src/TwitterFeed.php';

$feed = new TwitterFeed();
$tweets = json_decode($feed->fetch());

$statuses = $tweets->statuses ?? [];

foreach ($statuses as $key => $tweet) {
    if (substr($tweet->text, 0, 2) != "RT") {
        $tweet_url = 'https://twitter.com/statuses/' . $tweet->id_str;
        // $date = date_create($tweet->created_at);
        $date = strtotime($tweet->created_at);
        ?>

        <article>
            <a href="<?php echo $tweet_url ?>" target="_blank">
                <blockquote><?php echo $tweet->text ?></blockquote>
            </a>
            <header>
                <address>
                    <div>
                        <?php echo $tweet->user->name ?>
                        <small>@<?php echo $tweet->user->screen_name ?></small>
                    </div>
                </address>
                <time datetime="<?php echo date("Y-m-d H:i", $date) ?>">
                    <?php
if (date("Ymd") == date("Ymd", $date)) {
            echo date("H:i", $date);
        } else {
            echo date("d.m. | H:i", $date);
        }
        ?>
                </time>
            </header>
        </article>

    <?php }
}?>