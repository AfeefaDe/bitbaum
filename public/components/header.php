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
                    <span>The Movement</span>
                    <span>for Digitalization</span>
                    <span>and Sustainability</span>
                </h1>

                <p>Since 2018, initiated in Berlin</p>
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
