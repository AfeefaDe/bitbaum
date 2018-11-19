<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats">
          <?php require 'components/frab-stats.php';?>
        </section>

        <section class="switch program active">
          <h4>PROGRAMME</h4>
          <p>The program with more than 120 international panels, talks, workshops, forum, philosophical salon, sporangium, concert and party is now online. Numerous organizations, individuals and international speakers are shaping the program with their submissions and presenting their approaches to sustainable digitization. Together with you we want to develop solutions for a sustainable future and change the world. <br><br>For those who could not join us in Berlin: All talks, panels and discussions on our five stages were recorded, a translation of all panels on the Bits&Bäume stage ist available. </p>
          <a href="/programm/<?php echo $lang; ?>" class="button" style="text-align: center">Programme overview</a>
          <p style="display: flex; justify-content: space-evenly;">
            <a href="https://fahrplan.bits-und-baeume.org" target="_blank">See full programme</a>
            <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">Programme as PDF</a>
          </p>
          <p style="display: flex; justify-content: space-evenly;">
            <a target="_blank" href="https://media.ccc.de/c/bub2018">Recordings</a>
            <a target="_blank" href="/downloads/raumplan-kompakt.pdf">Room plan (PDF)</a>
          </p>
        </section>

        <section class="switch twitter">
          <?php require 'components/twitter.php';?>
        </section>

        <div class="control">
            <div class="program active">
                <div class="icon"></div>
                <p>PROGRAMME</p>
            </div>
            <div class="twitter">
                <div class="icon"></div>
                <p>#bitsundbäume</p>
            </div>
        </div>
        <?php
break;
    default:
        ?>
        <section class="stats" style="display: block">
          <?php require 'components/frab-stats.php';?>
        </section>
        <section class="switch program active">
          <h4>PROGRAMM</h4>
          <p>Das Programm mit mehr als 120 international besetzten Panels, Talks, Workshops, Forum, Philosophischem Salon, Sporangium, Konzert und	Apéro ist jetzt online. Zahlreiche Organisationen, Personen und internationale Referierende gestalten das Programm durch ihre Einreichungen mit und stellen ihre Ansätze für eine nachhaltige Digitalisierung vor. Gemeinsam mit euch wollen wir Lösungsideen für eine nachhaltige Zukunft erarbeiten und die Welt verändern. <br><br>Das Programm unserer fünf Bühnen wurde vom Video Operation Center des CCC aufgezeichnet.</p>
          <a href="/programm/<?php echo $lang; ?>" class="button" style="text-align: center">Zur Programmbeschreibung</a>
          <p style="display: flex; justify-content: space-evenly;">
            <a href="https://fahrplan.bits-und-baeume.org" target="_blank">Komplettes Programm ansehen</a>
            <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">Programmheft (PDF)</a>
          </p>
          <p style="display: flex; justify-content: space-evenly;">
            <a target="_blank" href="https://media.ccc.de/c/bub2018">Video- und Audioaufzeichnungen</a>
            <a target="_blank" href="/downloads/raumplan-kompakt.pdf">Raumplan (PDF)</a>
          </p>
        </section>

        <section class="switch twitter">
            <?php require 'components/twitter.php';?>

        </section>

        <div class="control">
            <div class="program active">
                <div class="icon"></div>
                <p>Programm</p>
            </div>
            <div class="twitter">
                <div class="icon"></div>
                <p>#bitsundbäume</p>
            </div>
        </div>
    <?php }?>

<script>
$program = $('section.program');
$twitter = $('section.twitter');
$programBtn = $('.control .program');
$twitterBtn = $('.control .twitter');

function showTwitter () {
  $twitterBtn.addClass('active');
  $twitter.addClass('active');
  $programBtn.removeClass('active');
  $program.removeClass('active');
}

function showProgramme () {
  $programBtn.addClass('active');
  $program.addClass('active');
  $twitterBtn.removeClass('active');
  $twitter.removeClass('active');
}

$twitterBtn.click(function () {
    showTwitter();
});

$programBtn.click(function () {
    showProgramme();
});

$portraits = $('.portrait');

function switchSidebar() {
  if ( $program.hasClass('active') )
    showTwitter();
  else
    showProgramme();
}

var index = 0;
// setInterval(function () {
//     switchSidebar();
// }, 10000)
</script>
