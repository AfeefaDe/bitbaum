<?php
$now = time(); // or your date as well
$your_date = strtotime("2018-11-17");
$datediff = $your_date - $now;

$days = round($datediff / (60 * 60 * 24));
?>

<header class="main">
    <h2><a href="/<?php echo $lang; ?>">Bits & Bäume</a></h2>


    <?php switch ($lang) {
    case "en":
        ?>
            <div>
                <h1>
                    <span>The Conference</span>
                    <span>for Digitalization</span>
                    <span>and Sustainability</span>
                </h1>

                <p>17th to 18th November 2018</p>
                <p><a href="https://www.openstreetmap.org/node/3343267710#map=16/52.5124/13.3280" target="_blank">in
                        Berlin
                        (Technische Universität)</a></p>
                <?php if ($days > 1) {?>
                    <p class="counter"><?php echo $days ?> days left</p>
                <?php }?>

            </div>

            <?php
break;
    default:
        ?>
            <div>
                <h1>
                    <span>Die Konferenz</span>
                    <span>für Digitalisierung</span>
                    <span>und Nachhaltigkeit</span>
                </h1>

                <p>17. bis 18. November 2018</p>
                <p><a href="https://www.openstreetmap.org/node/3343267710#map=16/52.5124/13.3280" target="_blank">in
                        Berlin
                        (Technische Universität, Hauptgebäude)</a></p>
                <p>Einlass am Samstag und Sonntag ab 9 Uhr</p>
                <?php if ($days > 1) {?>
                    <p class="counter">noch <?php echo $days ?> Tage</p>
                <?php }?>

            </div>

        <?php }?>
</header>