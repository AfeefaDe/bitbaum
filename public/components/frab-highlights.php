<?php
require_once('../src/FrabFeed.php');

$feed = new FrabFeed();
$feed->fetch();

// var_dump($feed->getSlots());
$slots = array_slice($feed->getSlots(), 0, 5);
foreach ($slots as $key => $slot) { 
    $date = date_create($slot->date);
    ?>
    
    <article>
        <h4><?php echo $slot->title ?></h4>
        <!-- <p>- <?php echo $slot->subtitle ?></p> -->
        <header>
            <time datetime="<?php echo date_format($date, "Y-m-d H:i") ?>">
                <?php
                if (date("Ymd") == date_format($date, "Ymd"))
                echo date_format($date, "H:i");
                else
                echo date_format($date, "D \u\m H:i");
                ?>
            </time>
            <address>
                <?php echo " | " . $slot->persons[0]->public_name ?>
            </address>
        </header>
        <footer>
        </footer>
    </article>
<?php } ?>