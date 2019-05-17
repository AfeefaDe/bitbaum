<?php
$now = time(); // or your date as well
$your_date = strtotime("2019-05-23");
$datediff = $your_date - $now;

$days = round($datediff / (60 * 60 * 24));
?>

<header class="main">
    <h2><a href="/<?php echo $lang; ?>">Bits & Bäume</a></h2>

    <?php switch ($lang) {
    case "en":
        ?>
            <a href='/en' class='button back-button'>Overview</a>
            <div>
                <h1>
                    <span>The Conference</span>
                    <span>for Digitalization</span>
                    <span>and Sustainability</span>
                </h1>

                <p>took place 17th to 18th November 2018</p>
                <p><a href="https://www.openstreetmap.org/node/3343267710#map=16/52.5124/13.3280" target="_blank">in
                        Berlin</a></p>
                <?php if ($days > 1) {?>
                    <p class="counter"><?php echo $days ?> days left</p>
                <?php }?>

            </div>

            <?php
break;
    default:
        ?>
            <a href='/de' class='button back-button'>zur Übersicht</a>
            <div>
                <h1>
                    <span>Die Bewegung</span>
                    <span>für Digitalisierung</span>
                    <span>und Nachhaltigkeit</span>
                </h1>

                <p>Seit 2018 mit Ursprung in Berlin</p><br>
                <?php if ($days > 1) {?>
                    <p class="counter">noch <?php echo $days ?> Tage bis zum nächsten Event</p>
                <?php }?>

            </div>

        <?php }?>
</header>
