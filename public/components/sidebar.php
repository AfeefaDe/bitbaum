<aside>
<?php switch ($lang) {
    case "en":
        ?>
<section class="stats">
  <?php require 'components/frab-stats.php';?>
  <a href="/rueckblick/<?php echo $lang; ?>" class="button">That was the Conference 2018</a>
</section>

<section class="switch news active">

  <article>
     <h3 class="bold">Stammtisch <em>Bits&Bäume Dresden</em>: July, 3rd, 6pm</h3>
      <p>After two successfull <a href="https://dresden.bits-und-baeume.org" target="blank">Bits&Bäume Dresden </a>events in June, on June 20, a first regular's round met. Meeting point for the second round: <a href="http://m.osmtools.de/0qMuk32fa9H0qNI232fiU4" target="_blank">TU Dresden, Alte Mensa (Ostseite)</a>
</p>  
     <br>
    <h3 class="bold">Buchvorstellung <em>Was Bits&Bäume verbindet</em>: July, 3rd, 7pm</h3>
    <p>Wir stellen unser successfully crowdfunded Buch vor. Du bist herzlich eingeladen, dabei zu sein. Von 19:00 – 20:30h im Coworking Space EINS TU Berlin, Anmeldung <a href="https://www.ioew.de/was-bits-und-baeume-verbindet" target="_blank">hier</a></p>
    
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
      <h3 class="bold">Stammtisch <em>Bits&Bäume Dresden</em>: 3. Juli, 18 Uhr</h3>
    <p>Nach zwei erfolgreichen Bits&Bäume-Veranstaltungen in Dresden hat sich am 20. Juni ein Stammtisch der <a href="https://dresden.bits-und-baeume.org">Bist&Bäume Dresden</a> gegründet, der nun in die zweite Runde geht. Treffpunkt: <a href="http://m.osmtools.de/0qMuk32fa9H0qNI232fiU4" target="_blank">TU Dresden, Alte Mensa (Ostseite)</a>
</p>  
     <br>
    <h3 class="bold">Buchvorstellung <em>Was Bits&Bäume verbindet</em>: 3. Juli, 19 Uhr</h3>
    <p>Wir stellen unser successfully crowdfunded Buch vor. Du bist herzlich eingeladen, dabei zu sein. Von 19:00 – 20:30h im Coworking Space EINS TU Berlin, Anmeldung <a href="https://www.ioew.de/was-bits-und-baeume-verbindet" target="_blank">hier</a></p>

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
