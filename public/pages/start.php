<section class="square title">
    <?php require 'components/header.php';?>
</section>

<?php switch ($lang) {
    case "en":
        ?>
        <section class="square cluster">
            <!--<article class="bolder">
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
            </article>-->

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
                <p><a href="/info/<?php echo $lang; ?>">Aims of the conference</a></p>
                <p><a href="/presse/<?php echo $lang; ?>">Press information</a></p>
                <p><a href="/infrastruktur/<?php echo $lang; ?>">Organising sustainable conferences</a></p>
                <p></p>
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
            <article class="bolder align-center">
                <h4>Die Bewegung geht weiter</h4>

                <div class="row">

                  <p class="square-action">
                    <a href="/waechst/<?php echo $lang; ?>" class="button">Selbst eine B&B organisieren</a>
                  </p>

                  <!-- <h4>Veränderungen einfordern</h4> -->
                  <p class="square-action">
                    <a href="/forderungen/<?php echo $lang; ?>" class="button" style="text-align: center">Forderungen unterzeichnen</a>
                  </p>
                </div>
            </article>
        </section>

        <section class="square description">
            <article>
              <h4>Intention</h4>
                <p>Welche Rolle spielt Nachhaltigkeit für stabile Tech-Communities? Welche ökologischen Chancen stecken
                    in digitalen Anwendungen etwa für Klima- und Ressourcenschutz? Welche Arten von Digitalisierung
                    stehen diesen Zielen entgegen oder sind gar kontraproduktiv? Wie kann die digitale Gesellschaft
                    demokratisch und gerecht gestaltet und zugleich darauf ausgerichtet sein, auf friedvolle Weise die
                    Grundlagen unseres Lebens auf diesem Planeten zu bewahren?</p>
                <p><a href="/presse/<?php echo $lang; ?>">Presseinformationen</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require 'components/quotes.php';?>
                <article>
        </section>
    <?php }?>



