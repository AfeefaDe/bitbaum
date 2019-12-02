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
              <p><strong>Bits&Bäume-Konferenz</strong><br>17./18. November 2018 | Campus TU Berlin
               <br />
              120+ Beiträge, 2000+ Teilnehmende</p>
              <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Audio- und Videoaufzeichnungen</a>
            </section>

            <section><ul>
              <li><a target="_blank" href="/fotogalerie">Fotogalerie</a></li>
              <li><a href="/info/<?php echo $lang; ?>">Ziele der Konferenz</a></li>
              <li>
                <a href="https://fahrplan.bits-und-baeume.org" target="_blank">Online-Programm</a> |
                <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">PDF-Programm</a>
              </li>
              <li><a href="/infrastruktur/<?php echo $lang; ?>">Nachhaltige Konferenzorganisation</a></li>
              <li><a href="/presse/<?php echo $lang; ?>">Presseinformationen</a></li>
            </ul></section>
          </div>

          <section>
            <h2>Text</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <p><a href="/programm/<?php echo $lang; ?>">Link</a></p>
          </section>

        </article>
    <?php }?>
