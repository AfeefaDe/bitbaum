<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats" style="display: block">
          <?php require 'components/frab-stats.php';?>
          <a href="/forderungen/<?php echo $lang; ?>" class="button">Our demands</a>
        </section>

        <section class="switch program active">
          <h4>PROGRAMME</h4>
          <p>Our program contained more than 120 international panels, talks, workshops, forum, philosophical salon, sporangium, concert and a nightly "apero". Numerous organizations, individuals and international speakers shaped the program with their submissions and presented their approaches to sustainable digitization. Together we developed and discussed solutions for a sustainable future, and together we continue to change the world! <br><br>For those who could not join us in Berlin: All talks, panels and discussions on our five stages were recorded, a translation of all panels on the Bits&Bäume stage ist available. </p>
          <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Audio and video recordings</a>
          <p style="display: flex; justify-content: space-evenly;">
            <a target="_blank" href="/fotogalerie">Photo gallery</a>
            <a href="https://fahrplan.bits-und-baeume.org" target="_blank">Online schedule</a>
            <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">PDF schedule</a>
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
          <a href="/forderungen/<?php echo $lang; ?>" class="button" style="text-align: center">Unsere Forderungen</a>
        </section>

        <section class="switch program active">
          <h4>PROGRAMM</h4>
          <p>Unser zweitägiges Programm umfasste mehr als 120 international besetzte Panels, Talks, Workshops, Forum, philosophischen Salon, Sporangium, Konzert und Apéro. Zahlreiche Organisationen, Personen und internationale Referierende haben das Programm durch ihre Einreichungen mitgestaltet und ihre Ansätze für eine nachhaltige Digitalisierung mit den Teilnehmenden geteilt. Gemeinsam haben wir an Lösungsideen für eine nachhaltige Zukunft getüftelt und unterstützen einander auch weiterhin dabei, die Welt zu verändern! <br><br>Das Programm unserer fünf Bühnen wurde vom Video Operation Center des CCC aufgezeichnet.</p>
          <a href="https://media.ccc.de/c/bub2018" class="button" target="_blank" style="text-align: center">Audio- und Videoaufzeichnungen</a>
          <p style="display: flex; justify-content: space-evenly;">
            <a target="_blank" href="/fotogalerie">Fotogalerie</a>
            <a href="https://fahrplan.bits-und-baeume.org" target="_blank">Online-Programm</a>
            <a target="_blank" href="/downloads/bits-und-baeume-2018-programmheft.pdf">PDF-Programm</a>
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
