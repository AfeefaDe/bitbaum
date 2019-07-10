<style>
article .row--forderung {
  justify-content: flex-start;
}
article .row--forderung > span {
  flex: 0 0 3em;
  font-weight: bold;
  text-indent: 0.8em;
}
article .row--forderung > p {
  flex: 1 1 100%;
  margin-top: 0;
}
</style>
<?php switch ($lang) {
    case "en":
        ?>

  <article>
    <h1>Bits&Bäume Conference 2018</h1>

    <div class="row">
      
<section class="stats">
  <?php require 'components/frab-stats.php';?>
</section>
            <section>
              <p><strong>Bits & Bäume Konferenz</strong><br>17./18. November 2018 | Campus TU Berlin</p>
              <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Audio- und Videoaufzeichnungen</a>
            </section>

            <section>
              <p><a target="_blank" href="/fotogalerie">Fotogalerie</a></p>
              <p><a href="/info/<?php echo $lang; ?>">Ziele der Konferenz</a></p>
              <p>
                <a href="https://fahrplan.bits-und-baeume.org" target="_blank">Online-Programm</a> |
                <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">PDF-Programm</a>
              </p>
              <p><a href="/infrastruktur/<?php echo $lang; ?>">Nachhaltige Konferenzorganisation</a></p>
              <p><a href="/presse/<?php echo $lang; ?>">Presseinformationen</a></p>
            </section>
          </div>

          <section>
            <h2>Programm</h2>
            <p>Unser zweitägiges Programm umfasste mehr als 120 international besetzte Panels, Talks, Workshops, Forum, philosophischen Salon, Sporangium, Konzert und Apéro. Zahlreiche Organisationen, Personen und internationale Referierende haben das Programm durch ihre Einreichungen mitgestaltet und ihre Ansätze für eine nachhaltige Digitalisierung mit den Teilnehmenden geteilt. Gemeinsam haben wir an Lösungsideen für eine nachhaltige Zukunft getüftelt und unterstützen einander auch weiterhin dabei, die Welt zu verändern! <br><br>Das Programm unserer fünf Bühnen wurde vom Video Operation Center des CCC aufgezeichnet.</p>
            <p><a href="/programm/<?php echo $lang; ?>">Programmbeschreibung</a></p>
          </section>
  </article>
      <?php
break;
    default:
        ?>
        <article>

          <h1>Rückblick Bits & Bäume 2018</h1>

          <div class="row">

            <section>
              <h2>In Kürze</h2>
              <p><strong>Bits & Bäume Konferenz</strong><br>17./18. November 2018 | Campus TU Berlin</p>
              <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Audio- und Videoaufzeichnungen</a>
            </section>

            <section>
              <p><a target="_blank" href="/fotogalerie">Fotogalerie</a></p>
              <p><a href="/info/<?php echo $lang; ?>">Ziele der Konferenz</a></p>
              <p>
                <a href="https://fahrplan.bits-und-baeume.org" target="_blank">Online-Programm</a> |
                <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">PDF-Programm</a>
              </p>
              <p><a href="/infrastruktur/<?php echo $lang; ?>">Nachhaltige Konferenzorganisation</a></p>
              <p><a href="/presse/<?php echo $lang; ?>">Presseinformationen</a></p>
            </section>
          </div>

          <section>
            <h2>Programm</h2>
            <p>Unser zweitägiges Programm umfasste mehr als 120 international besetzte Panels, Talks, Workshops, Forum, philosophischen Salon, Sporangium, Konzert und Apéro. Zahlreiche Organisationen, Personen und internationale Referierende haben das Programm durch ihre Einreichungen mitgestaltet und ihre Ansätze für eine nachhaltige Digitalisierung mit den Teilnehmenden geteilt. Gemeinsam haben wir an Lösungsideen für eine nachhaltige Zukunft getüftelt und unterstützen einander auch weiterhin dabei, die Welt zu verändern! <br><br>Das Programm unserer fünf Bühnen wurde vom Video Operation Center des CCC aufgezeichnet.</p>
            <p><a href="/programm/<?php echo $lang; ?>">Programmbeschreibung</a></p>
          </section>

        </article>
    <?php }?>
