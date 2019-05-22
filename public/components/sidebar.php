<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats" style="display: block">
          <?php require 'components/frab-stats.php';?>
          <a href="/forderungen/<?php echo $lang; ?>" class="button">Our demands</a>
          <a href="/waechst/<?php echo $lang; ?>" class="button">Further on!</a>
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
        <section class="stats">
            <?php require 'components/frab-stats.php';?>
            <a href="/rueckblick/<?php echo $lang; ?>" class="button">Das war die Konferenz 2018</a>
        </section>

        <section class="switch news active">
          <article>
            <h3 class="bold">Das Buch <em>"Was Bits & Bäume verbindet"</em></h3>

            <p>Das Buch nimmt die Ideen und Diskussionen der <em>Bits & Bäume</em> Konferenz auf und denkt sie
                weiter.</p>
            <p>
                <a href="https://www.oekom-crowd.de/projekte/was-bits-und-baeume-verbindet" target="_blank">Jetzt per Crowdfunding unterstützen</a>
            </p>
          </article>

          <article>
            <h3 class="bold">23. Mai 2019: Bits & Bäume Dresden – Eine Abendveranstaltung zu Digitalisierung und Nachhaltigkeit</h3>
            <p>
              <a href="https://dresden.bits-und-baeume.org/" target="_blank">Zur Veranstaltung</a>
            </p>
          </article>

        </section>

        <section class="switch twitter">
            <?php require 'components/twitter.php';?>

        </section>

        <div class="control">
            <div class="news active">
                <div class="icon"></div>
                <p>News</p>
            </div>
            <div class="twitter">
                <div class="icon"></div>
                <p>#bitsundbäume</p>
            </div>
        </div>
    <?php }?>

<script>
$news = $('section.news');
$twitter = $('section.twitter');
$newsBtn = $('.control .news');
$twitterBtn = $('.control .twitter');

function showTwitter () {
  $twitterBtn.addClass('active');
  $twitter.addClass('active');
  $newsBtn.removeClass('active');
  $news.removeClass('active');
}

function showNews () {
  $newsBtn.addClass('active');
  $news.addClass('active');
  $twitterBtn.removeClass('active');
  $twitter.removeClass('active');
}

$twitterBtn.click(function () {
    showTwitter();
});

$newsBtn.click(function () {
    showNews();
});

$portraits = $('.portrait');

function switchSidebar() {
  if ( $news.hasClass('active') )
    showTwitter();
  else
    showNews();
}

var index = 0;
// setInterval(function () {
//     switchSidebar();
// }, 10000)
</script>
