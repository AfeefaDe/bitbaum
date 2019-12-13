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
              <p> Die Bits&Bäume-Community grows! 
                <br>You want to join? There are some first regional branches, meeting regularly for discussions or to plan talks, workshops or their own local conferences. Be part of our movement!
              </p>
            </section>

            <section><ul>
              <li><a href="https://dresden.bits-und-baeume.org" target="blank">Bits & Bäume Dresden</a>
                <br>Our first regular's round, initiated by the Faculty of Computer Science, TU Dresden, after two Bits&Bäume events on May 23rd and June 20th. Meeting at the University of Dresden.
              </li>
              <li><a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">Bits & Bäume Berlin</a>
                  <br>Regular's round, initiated by the ASta, TU Berlin. There are also workshops, and the Berlin branch set up our <a href="https://discourse.bits-und-baeume.org/" target="blank">online discussion board</a> – yay! They are meeting at the TU Berlin.
              </li>
              <li><a href="http://bits-und-baeume-hannover.org/" target="blank">Bits & Bäume Hannover</a>
                  <br>Regular's round, initiated by Chaos macht Schule. 
              </li>
              <li><a href="/waechst/<?php echo $lang; ?>" target="blank">Who will be next? :)</a>
              </li>
              </ul></section>
          </div>

          <section>
            <h2>No Bits&Bäume nearby?</h2>
                <p>Found your own regular's round! In our section <a href="/waechst/en<?php echo $lang; ?>" target="blank"><em> Bits&Bäume movement</em></a>, you can read more about what to do to organize your own Bits&Bäume formats. There is also a <a href="https://lists.posteo.de/listinfo/bitsundbaeume" target="blank">mailing list</a> as well as an <a href="https://discourse.bits-und-baeume.org/" target=blank">online discussion board</a>. 
                </p>   
          </section>
  </article>
      <?php
break;
    default:
        ?>
        <article>

          <h1>Regionale Zweige und Stammtische</h1>
    <div class="row">
            <section>
                <p> Die Bits&Bäume-Community wächst! 
                  <br>Du willst mitmachen? In einigen Städten gibt es erste regionale Zweige mit eigenen Stammtischen zum Diskutieren und um zusammen Vorträge oder eigene Konferenzen zu planen. Schließ dich an!
                </p>
            </section>

            <section><ul>
                <li><a href="https://dresden.bits-und-baeume.org" target="blank">Bits & Bäume Dresden</a>
                  <br>war der erste Stammtisch! :) Gegründet von der Fakultät Informatik der TU Dresden nach zwei eigenen Bits&Bäume-Veranstaltungen am 23. Mai und 20. Juni 2019. Trifft sich an der Uni Dresden.
                </li>
               <li><a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">Bits & Bäume Berlin</a>
                <br>Stammtisch gegründet vom AStA der TU Berlin, trifft sich – Achtung, Ortswechsel! – an der TU Berlin. Außerdem gibt es unregelmäßig verschiedene Workshops und die Berliner*innen haben das <a href="https://discourse.bits-und-baeume.org/" target=blank">Bits&Bäume-Online-Forum </a>aufgesetzt. Danke! :)  
              </li>
              <li><a href="http://bits-und-baeume-hannover.org/" target="blank">Bits & Bäume Hannover</a>
                  <br>entstnden aus einer regionalen gruppe von <a href="https://ccc.de/schule" target="blank">Chaos macht Schule</a>. Trifft sich in den Räumen des CCC Hannover.
              </li>
              <li><a href="/waechst/<?php echo $lang; ?>" target="blank">Hier könnte dein Wohnort stehen! :)</a>
              </li>
            </ul></section>
          </div>
          <section>
            <h2>Noch kein Bits&Bäume-Sprössling in deiner Nähe?</h2>
                <p>Dann gründe einen! Unter <a href="/waechst/<?php echo $lang; ?>" target="blank"><em> Bits&Bäume wächst</em></a> findest du die Bedingungen für eigene Bits&Bäume-Aktionen. Melde dich mit den guten Nachrichten, dass es Zuwachs gibt und wie mensch euch findet, unter <a href="mailto:bewegung@bits-und-baeume.org">bewegung@bits-und-baeume.org</a>, dann nehmen wir euch in die Liste auf. 
                </p>
                <p> Außerdem kannst du dich bei unserer <a href="https://lists.posteo.de/listinfo/bitsundbaeume" target="blank">Mailingliste</a> anmelden oder in unserem <a href="https://discourse.bits-und-baeume.org/" target=blank">Bits&Bäume-Online-Forum </a>aktiv werden und dich vernetzen. 
              </p>   
          </section>

        </article>
    <?php }?>
