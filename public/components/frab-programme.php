<?php
require_once('FrabFeed.php');

$feed = new FrabFeed();
$feed->fetch();

// var_dump($feed->getSlots());
$slots = $feed->getSlots();
foreach ($slots as $key => $slot) { 
    $date = date_create($slot->date);
    ?>

    <article class="programme row">
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
                <?php echo "@" . $slot->room ?>
            </address>
        </header>
        <div class="details">
            <h4><?php echo $slot->title ?></h4>
            <p class="bolder"><?php echo $slot->persons[0]->public_name ?></p>
            <?php if($slot->subtitle) echo "<p>" . $slot->subtitle . "</p>" ?>
            <p><?php echo $slot->description ?></p>
        </div>
    </article>

<?php } ?>