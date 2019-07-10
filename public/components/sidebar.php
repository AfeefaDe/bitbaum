<aside>
<?php switch ($lang) {
    case "en":
        ?>
<section class="stats">
  <?php require 'components/frab-stats.php';?>
</section>

<section class="switch news active">

  <article>
     <h3 class="bold">Stammtisch <em>Bits&Bäume Dresden</em>: July, 3rd, 6pm</h3>
      <p>After two successfull <a href="https://dresden.bits-und-baeume.org" target="blank">Bits&Bäume Dresden </a>events in June, on June 20, a first regular's round met. Meeting point for the second round: <a href="http://m.osmtools.de/0qMuk32fa9H0qNI232fiU4" target="_blank">TU Dresden, Alte Mensa (Ostseite)</a>
</p>  
     <br>
    <h3 class="bold">Buchvorstellung <em>Was Bits&Bäume verbindet</em>: July, 3rd, 7pm</h3>
    <p>Our <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">Bits&Bäume publication </a>will be launched: 7-8:30pm at the Coworking Space EINS TU Berlin, registration <a href="https://www.ioew.de/was-bits-und-baeume-verbindet" target="_blank">here</a></p>
    
    </article>

</section>

<section class="switch twitter">
    <?php require 'components/twitter.php';?>

</section>

<div class="control">
    <div class="news active">
        <div class="icon"></div>
        <p>news</p>
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
</section>

<section class="switch news active">

  <article>
      <h3 class="bold">Stammtisch <em>Bits&Bäume Dresden</em></h3>
    <p>Nach zwei erfolgreichen Bits&Bäume-Veranstaltungen in Dresden hat sich am 20. Juni an der TU Dresden ein B&B-Stammtisch gegründet. Mehr Infos auf <a href="https://dresden.bits-und-baeume.org" target="blank">Bits&Bäume Dresden</a>. 
</p>  
     <br>
      <h3 class="bold">Stammtisch <em>Bits&Bäume Berlin</em></h3>
    <p>Auch in Berlin trifft sich ein B&B-Stammtisch, organisiert vom AStA der TU Berlin. Mehr Infos auf <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">hier</a>. 
</p>  
      <br>
    <h3 class="bold"><em>Was Bits&Bäume verbindet</em> erschienen</h3>
    <p>Das<a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">Buch zur Konferenz</a>ist erschienen. Dank an die successfully fundende Crowd!</p>

    </article>

</section>

<section class="switch twitter">
    <?php require 'components/twitter.php';?>

</section>

<div class="control">
    <div class="news active">
        <div class="icon"></div>
        <p>Aktuelles</p>
    </div>
    <div class="twitter">
        <div class="icon"></div>
        <p>#bitsundbäume</p>
    </div>
</div>
    <?php }?>

</aside>

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
