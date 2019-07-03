<section class="square title">
    <?php require 'components/header.php';?>
</section>

<?php switch ($lang) {
    case "en":
        ?>
        <section class="square cluster">
            <article class="bolder align-center">
                <h4>Bits&Bäume becomes a movement</h4>

                <div class="row">

                  <p class="square-action">
                    <a href="/waechst/<?php echo $lang; ?>" class="button">Start yor own B&B</a>
                  </p>

                  <!-- <h4>Veränderungen einfordern</h4> -->
                  <p class="square-action">
                    <a href="/forderungen/<?php echo $lang; ?>" class="button" style="text-align: center">Sign our demands</a>
                  </p>
                </div>
            </article>
        </section>

        <section class="square description">
            <article>
              <h4>Intention</h4>
                <p>
                    What role does sustainability play for stable tech communities?
                    Which ecological opportunities do digital applications offer for climate and resource
                    protection? What types of digitalization are opposed or even counterproductive to these goals?
                    How can the digital society be democratic and just while peacefully preserving the basis of our
                    lives on this planet?
                </p>
                <p><a href="/presse/<?php echo $lang; ?>">Press information</a></p>

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
                <h4>Bits&Bäume wächst zur Bewegung</h4>

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



