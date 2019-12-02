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
    <h1>Regional branches / round tables</h1>
    
    <div class="row">
            <section>
              <p> An diesen Orten treffen sich regelmäßig die Regionalzweige der stetig wachsenden Bits&Bäume-Community,
                um zu diskutieren, sich zusammeln und gemeinsame Veranstaltungen zu planen.
              </p>
              <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Los, klick mich!</a>
            </section>

            <section><ul>
              <li><a target="_blank" href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin">Berlin</a></li>
              <li><a href="https://dresden.bits-und-baeume.org/">Dresden</a></li>
              <li><a href="/infrastruktur/<?php echo $lang; ?>">Hier könnte Dein Regionalzweig stehen...</a></li>
            </ul></section>
          </div>

          <section>
            <h2>Text</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
            <p><a href="/programm/<?php echo $lang; ?>">Link</a></p>
          </section>
  </article>
      <?php
break;
    default:
        ?>
        <article>

          <h1>Regionalzweige / Stammtische</h1>
    <div class="row">

            <section>
              <p> An diesen Orten treffen sich regelmäßig die Regionalzweige der stetig wachsenden Bits&Bäume-Community,
                um zu diskutieren, sich zusammeln und gemeinsame Veranstaltungen zu planen.
              </p>
              <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Los, klick ich!</a>
            </section>

            <section><ul>
              <li><a target="_blank" href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-Berlin">Berlin</a></li>
              <li><a href="https://dresden.bits-und-baeume.org/">Dresden</a></li>
              <li><a href="/infrastruktur/<?php echo $lang; ?>">Hier könnte Dein Regionalzweig stehen...</a></li>
            </ul></section>
          </div>

          <section>
            <h2>Text</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <p><a href="/programm/<?php echo $lang; ?>">Link</a></p>
          </section>

        </article>
    <?php }?>
