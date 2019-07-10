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

                <p>Originated from<br /><a href="/rueckblick/<?php echo $lang; ?>" class="button">B&B-Konferenz 2018</a></p>
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

                <p>Entstanden auf der<br /><a href="/rueckblick/<?php echo $lang; ?>" class="button">B&B-Conference 2018</a></p>
            </div>

        <?php }?>
</header>
