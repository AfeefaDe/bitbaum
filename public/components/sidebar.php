<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats">
          <?php require 'components/frab-stats.php';?>
          <a href="https://pretix.eu/bits-und-baeume/171811/" target="_blank" class="button">Buy your ticket</a>
        </section>

        <section class="switch program active">
          <p>The program with more than 100 international panels, talks, workshops, philosophical salon, forum, sporangium, concert and party is now online. Numerous organizations, individuals and international speakers are shaping the program with their submissions and presenting their approaches to sustainable digitization. Together with you we want to develop solutions for a sustainable future and change the world.</p>
          <?php #require('components/frab-highlights.php'); ?>
          <p class="square-action square-action--right"><a href="https://fahrplan.bits-und-baeume.org" target="_blank">See programme</a></p>
        </section>

        <section class="switch twitter">
          <?php require 'components/twitter.php';?>
        </section>

        <div class="control">
            <div class="program active">
                <div class="icon"></div>
                <p>Program</p>
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
          <p>Das Programm mit mehr als 100 international besetzten Panels, Talks, Workshops, Philosophischem Salon, Forum, Sporangium, Konzert und 	Party ist jetzt online. Zahlreiche Organisationen, Personen und internationale Referierende gestalten das Programm durch ihre Einreichungen mit und stellen ihre Ansätze für eine nachhaltige Digitalisierung vor. Gemeinsam mit euch wollen wir Lösungsansätze für eine nachhaltige Zukunft erarbeiten und die Welt verändern.</p>
          <?php #require('components/frab-highlights.php'); ?>
          <p class="square-action square-action--right"><a href="https://fahrplan.bits-und-baeume.org" target="_blank">Programm ansehen</a></p>
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

$twitterBtn.click(function () {
    $(this).addClass('active');
    $twitter.addClass('active');
    $programBtn.removeClass('active');
    $program.removeClass('active');
});

$programBtn.click(function () {
    $(this).addClass('active');
    $program.addClass('active');
    $twitterBtn.removeClass('active');
    $twitter.removeClass('active');
});

    $portraits = $('.portrait');

function switcher(i) {
    $($portraits[i]).hide();
    if (i === ($portraits.length - 1)) {
        i = 0;
        $($portraits[0]).fadeIn();
    }
    else {
        $($portraits[i + 1]).fadeIn();
        i++;
    }
    return i;
}

var index = 0;
$('.people').click(function () {
    index = switcher(index);
});

setInterval(function () {
    index = switcher(index);
}, 10000)
</script>
