<section class="square title">
    <?php require 'components/header.php';?>
</section>

<?php switch ($lang) {
    case "en":
        ?>
        <section class="square cluster">
            <article class="bolder">
                <h4>Focus</h4>
                <div class="row">
                  <div>
                    <p>Alternative Economies</p>
                    <p>Cival Society & Communities</p>
                    <p>Data and ecology</p>
                    <p>Digital infrastructures</p>
                  </div>
                  <div>
                    <p>Fundamental issues</p>
                    <p>The material basis of digitalization</p>
                    <p>Smart City, Smart Land</p>
                  </div>
                </div>
                <p class="square-action align-center">
                    <a href="/programm/<?php echo $lang; ?>" class="button">Programme overview</a>
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
                <p class="square-action"><a href="/info/<?php echo $lang; ?>">Brief description of the conference</a></p>
                <p><a href="/presse/<?php echo $lang; ?>">Press information</a></p>
                <p><a href="/forderungen/<?php echo $lang; ?>">Claims of the conference</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require 'components/quotes.php';?>
                <article>
        </section>
        <?php
break;
    default:
        ?>
        <section class="square cluster">
            <article class="bolder">
                <h4>Schwerpunkte</h4>
                <div class="row">
                  <div>
                    <p>Alternatives Wirtschaften</p>
                    <p>Daten & Umwelt</p>
                    <p>Die ganz großen Fragen</p>
                    <p>Die materielle Basis</p>
                  </div>
                  <div>
                    <p>Digitaler Kapitalismus</p>
                    <p>Stadt – Land – Smart</p>
                    <p>Zivilgesellschaft & Communities</p>
                  </div>
                </div>
                <p class="square-action align-center">
                  <a href="/forderungen/<?php echo $lang; ?>" class="button">Zu den Forderungen</a>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>Welche Rolle spielt Nachhaltigkeit für stabile Tech-Communities? Welche ökologischen Chancen stecken in digitalen Anwendungen etwa für Klima- und Ressourcenschutz? Welche Arten von Digitalisierung stehen diesen Zielen entgegen oder sind gar kontraproduktiv? Wie kann die digitale Gesellschaft demokratisch und gerecht gestaltet und zugleich darauf ausgerichtet sein, auf friedvolle Weise die Grundlagen unseres Lebens auf diesem Planeten zu bewahren?</p>
                <p class="square-action"><a href="/info/<?php echo $lang; ?>">Kurzbeschreibung zur Konferenz</a></p>
                <p><a href="/presse/<?php echo $lang; ?>">Presseinformationen</a></p>
                <p><a href="/programm/<?php echo $lang; ?>">Programmbeschreibung</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require 'components/quotes.php';?>
                <article>
        </section>
    <?php }?>



