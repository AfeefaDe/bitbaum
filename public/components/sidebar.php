<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats">
          <?php require 'components/frab-stats.php';?>
          <a href="https://pretix.eu/bits-und-baeume/171811/" target="_blank" class="button">Buy your ticket</a>
        </section>

        <section class="switch program active">
          <p>The program with more than 120 international panels, talks, workshops, philosophical salon, forum, sporangium, concert and party is now online. Numerous organizations, individuals and international speakers are shaping the program with their submissions and presenting their approaches to sustainable digitization. Together with you we want to develop solutions for a sustainable future and change the world.</p>
          <a href="https://fahrplan.bits-und-baeume.org" target="_blank" class="button" style="text-align: center">See full programme</a>
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
        <section class="stats">
          <?php require 'components/frab-stats.php';?>
          <a href="https://pretix.eu/bits-und-baeume/171811/" target="_blank" class="button">Zum Ticketverkauf</a>
        </section>

        <section class="switch program active">
          <h4>PROGRAMM</h4>
          <p>Das Programm mit mehr als 120 international besetzten Panels, Talks, Workshops, Philosophischem Salon, Forum, Sporangium, Konzert und 	Party ist jetzt online. Zahlreiche Organisationen, Personen und internationale Referierende gestalten das Programm durch ihre Einreichungen mit und stellen ihre Ansätze für eine nachhaltige Digitalisierung vor. Gemeinsam mit euch wollen wir Lösungsansätze für eine nachhaltige Zukunft erarbeiten und die Welt verändern.</p>
          <a href="https://fahrplan.bits-und-baeume.org" target="_blank" class="button" style="text-align: center">Komplettes Programm ansehen</a>
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
setInterval(function () {
    switchSidebar();
}, 10000)
</script>
