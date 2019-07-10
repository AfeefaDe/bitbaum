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
    <h1>Bits & Bäume 2018</h1>
    
    <div class="row">
            <section>
              <p><strong>Bits&Bäume Conference</strong><br>17./18. November 2018 | Campus TU Berlin
                <br />
              120+ inputs, 2000+ participants 
              </p>
              <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">audio and video recordings</a>
            </section>

            <section><ul>
              <li><a target="_blank" href="/fotogalerie">photo gallery</a></li>
              <li><a href="/info/<?php echo $lang; ?>">intent of the conference</a></li>
              <li>
                <a href="https://fahrplan.bits-und-baeume.org" target="_blank">online program</a> |
                <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">pdf program</a>
              </li>
              <li><a href="/presse/<?php echo $lang; ?>">press information 2018</a></li>
              <li><a href="/infrastruktur/<?php echo $lang; ?>">how to organize sustainably</a></li>
            </ul></section>
          </div>

          <section>
            <h2>program</h2>
            <p>Our two-day program contained more than 120 international panels, talks, workshops, forum, philosophical salon, sporangium, concert and a nightly "apero". Numerous organizations, individuals and international speakers shaped the program with their submissions and presented their approaches to sustainable digitization. Together we developed and discussed solutions for a sustainable future, and together we continue to change the world! <br><br>For those who could not join us in Berlin: All talks, panels and discussions on our five stages were recorded by the Video Operation Center of the CCC, a translation of all panels on the Bits&Bäume stage ist available.
            </p>
            <p><a href="/programm/<?php echo $lang; ?>">program description</a></p>
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
              <p><strong>Bits&Bäume-Konferenz</strong><br>17./18. November 2018 | Campus TU Berlin
               <br />
              120+ Beiträge, 2000+ Teilnehmende</p>
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
