<section class="square title">
    <?php require('components/header.php'); ?>
</section>

<?php switch ($lang) {
    case "en":
        ?>
        <section class="square cluster">
            <article class="bolder">
                <h4>Focus</h4>
                <p>The material basis of digitalization</p>
                <p>Alternative economies</p>
                <p>Environmental and network policy</p>
                <p>Digital infrastructures</p>
                <p>Fundamental issues</p>
                <p class="square-action align-center">
                    <a href="/call/<?php echo $lang; ?>" class="button">Call for Participation</a>
                    <br><br><small>Submissions end on August 19th!</small>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>
                    Will digitalization lead to a sustainable future, in which everyone benefits from
                    technological progress and we simultaneously treat the environment with care? Or are we
                    heading for a digital turbo-capitalism, in which a few hold money, information and power in
                    their hands and the economy continues to grow beyond the planetary boundaries? The <em>Bits &
                        Bäume</em> Conference brings together all the important topics of digitalization as well
                    as ecological and social sustainability.
                </p>
                <p class="square-action"><a href="/info/en">Brief description of the conference</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require('components/quotes.php'); ?>
                <p class="square-action"><a href="/ziele/<?php echo $lang; ?>">Goals of the Conference</a></p>
                <article>
        </section>
        <?php
        break;
    default:
        ?>
        <section class="square cluster">
            <article class="bolder">
                <h4>Schwerpunkte</h4>
                <p>Die materielle Basis der Digitalisierung</p>
                <p>Alternatives Wirtschaften</p>
                <p>Umwelt- und Netzpolitik</p>
                <p>Digitale Infrastrukturen</p>
                <p>Grundsatzfragen</p>
                <p class="square-action align-center">
                    <a href="/call/<?php echo $lang; ?>" class="button">Call for Participation</a>
                    <br><br><small>noch bis 19. August einreichen!</small>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>
                    Führt die Digitalisierung in eine nachhaltige Zukunft, in der alle vom technologischen Fortschritt
                    profitieren und wir zugleich schonender mit der Umwelt umgehen? Oder steuern wir auf einen digitalen
                    Turbokapitalismus zu, in dem einige Wenige Geld, Informationen und Macht in den Händen halten und
                    die
                    Wirtschaft noch weiter über die planetaren Grenzen hinauswächst? Die Konferenz „<em>Bits &
                        Bäume</em>“ bringt
                    alle
                    wichtigen Themen der Digitalisierung und der ökologischen und sozialen Nachhaltigkeit zusammen.
                </p>
                <p class="square-action"><a href="/info/<?php echo $lang; ?>">Kurzbeschreibung zur Konferenz</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require('components/quotes.php'); ?>
                <p class="square-action"><a href="/ziele/<?php echo $lang; ?>">Ziele der Konferenz</a></p>
                <article>
        </section>
    <?php } ?>



