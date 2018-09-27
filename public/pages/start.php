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
                    <a href="/programm/<?php echo $lang; ?>" class="button">Sneak preview of the programme</a>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>
                    What role does sustainability play for stable tech communities?
                    Which ecological opportunities do digital applications offer for climate and resource
                    protection? What types of digitalization are opposed or even counterproductive to these goals?
                    How can the digital society be democratic and just while peacefully preserving the basis of our
                    lives on this planet?
                </p>
                <p class="square-action"><a href="/info/en">Brief description of the conference</a></p>
                <p class="square-action"><a href="/presse/en">Press information</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require('components/quotes.php'); ?>
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
                    <a href="/programm/<?php echo $lang; ?>" class="button">Zur ersten Programmvorschau</a>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>Die Digitalisierung kommt – aber wie? Als digitaler Wachstumsmotor, der Ressourcen verschlingt und einigen wenigen Macht und Informationen sichert? Oder als echte Chance für eine nachhaltigere und faire Zukunft? Sicher ist nur: Jetzt geht es darum, den Megatrend zu gestalten. Die Konferenz Bits & Bäume hat es sich zur Aufgabe gemacht, Netz-Aktivist/innen, Umweltbewegte und Interessierte zusammen zu bringen und gemeinsam Lösungen für eine nachhaltige Digitalisierung zu finden. Getragen wird sie von zehn Partnerorganisationen aus Umwelt- und Netzpolitik, Entwicklungszusammenarbeit und Wissenschaft.</p>
                <p class="square-action"><a href="/info/<?php echo $lang; ?>">Kurzbeschreibung zur Konferenz</a></p>
                <p class="square-action"><a href="/presse/">Presseinformationen</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require('components/quotes.php'); ?>
                <article>
        </section>
    <?php } ?>



