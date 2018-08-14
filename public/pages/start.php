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
                How can digitalization contribute to the sustainable transformation of society and the economy? How
                can thinking about sustainability inspire the techie scene so that digitalization guarantees long-term
                civil rights and individual freedoms? How, for example, can electricity from renewable energies and
                intelligent grids be further developed with combined knowledge from both scenes? What role do the two
                sustainability pillars ecology and social equity play for stable tech communities? Which ecological
                opportunities do digital applications offer for climate and resource protection? What types of
                digitalization are in conflict with these goals, or even counterproductive? How can the digital society
                be democratic, equitable and at the same time designed to preserve the basis of our lives on this
                planet?
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
                Wie kann Digitalisierung zur nachhaltigen Transformation der Gesellschaft und des Wirtschaftens
                beitragen? Wie kann Nachhaltigkeitsdenken die Techie-Szene inspirieren, sodass die Digitalisierung
                langfristig Bürgerrechte und individuelle Freiheiten garantiert? Wie können beispielsweise Strom aus
                Erneuerbaren Energien und intelligente Netze mit vereintem Wissen weiterentwickelt werden? Welche Rolle
                spielen die beiden Nachhaltigkeits-Säulen Ökologie und Gerechtigkeit für stabile Tech-Communities?
                Welche ökologischen Chancen stecken in digitalen Anwendungen etwa für Klima- und Ressourcenschutz?
                Welche Arten von Digitalisierung stehen diesen entgegen oder sind sogar kontraproduktiv? Wie kann die
                digitale Gesellschaft demokratisch und gerecht gestaltet und zugleich darauf ausgerichtet sein, die
                Grundlagen unseres Lebens auf diesem Planeten zu bewahren?
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



