<?php
require_once('TwitterFeed.php');

$feed = new TwitterFeed();
$tweets = json_decode($feed->fetch());

foreach ($tweets->statuses as $key => $tweet) {
    if (substr($tweet->text, 0, 2) != "RT") {
        $tweet_url = 'https://twitter.com/statuses/' . $tweet->id_str;
        $date = date_create($tweet->created_at);
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
                <time datetime="<?php echo date_format($date, "Y-m-d H:i") ?>">
                    <?php
                    if (date("Ymd") == date_format($date, "Ymd"))
                        echo date_format($date, "H:i");
                    else
                        echo date_format($date, "d.m. | H:i");
                    ?>
                </time>
            </header>
            <footer>
            </footer>
        </article>

    <?php }
} ?>