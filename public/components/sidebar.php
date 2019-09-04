<aside>
<?php switch ($lang) {
    case "en":
        ?>
    
<section class="stats">
</section>  
    
<section class="switch news active">
  <article>
      
      <h3 class="bold">Signees of our demands</h3>
      <p><?php echo SupportController::getTotalNumberOfSupports(); ?> supporters so far, you should <a href="/forderungen/<?php echo $lang; ?>">sign</a> as well.
</p>     
     <br />
     <h3 class="bold">[Dresden] <em>Bits&Bäume</em> regular's round</h3>
      <p>After two successfull Bits&Bäume events in Dresden, a regular's round was founded on the 20th of June at TU Dresden. More information <a href="https://dresden.bits-und-baeume.org" target="blank">here</a>
</p>  
     <br />
      <h3 class="bold">[Berlin] <em>Bits&Bäume</em> regular's round</h3>
    <p>In Berlin the AStA of TU Berlin also founded a regular's round. More information <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">here</a> 
</p>  
      <br />
    <h3 class="bold">Publication <em>Was Bits&Bäume verbindet</em></h3>
    <p>Our <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">conference book</a> has been published pushing further the topics of the conference. Thanks to all crowdfunders</p>.
      
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
</section>  
    
<section class="switch news active">
    <article>
        <h3 class="bold">[Berlin] Forum Bits&Bäume</h3>
        <p>Am 10. September startet die sechsteilige Gesprächsreihe „Forum Bits & Bäume“, in der die nachhaltige Gestaltung der Digitalisierung stärker ins Zentrum gerückt und wissenschaftliche sowie zivilgesellschaftliche Themen und Forderungen in den politischen Diskurs eingebracht werden sollen. Los geht’s mit dem Schwerpunktthema „Künstliche Intelligenz für nachhaltige Entwicklung?“. Die erste Veranstaltung wird organisiert von der wissenschaftlichen Forschungsgruppe „Digitalisierung und sozial-ökologische Transformation“ von IÖW und TU Berlin in Kooperation mit dem Einstein Center Digital Future. Mehr Infos hier.</p>
    </article>

    <article>
      <h3 class="bold">Unterstützer*innen unserer Forderungen</h3>
        <p><?php #echo SupportController::getTotalNumberOfSupports(); ?> Personen und Organisationen haben bisher unterschrieben, <a href="/forderungen/<?php echo $lang; ?>">unterzeichne</a> auch du.</p>     
    </article>

    <article>
      <h3 class="bold">[Dresden] Stammtisch <em>Bits&Bäume</em></h3>
        <p>Nach zwei erfolgreichen Bits&Bäume-Veranstaltungen in Dresden hat sich am 20. Juni an der TU Dresden ein B&B-Stammtisch gegründet. Mehr Infos auf <a href="https://dresden.bits-und-baeume.org" target="blank">Bits&Bäume Dresden</a>.</p>
    </article>

    <article>
        <h3 class="bold">[Berlin] Stammtisch <em>Bits&Bäume</em></h3>
        <p>Auch in Berlin trifft sich ein B&B-Stammtisch, organisiert vom AStA der TU Berlin. Mehr Infos auf <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">hier</a>.</p>
    </article>

    <article>
    <h3 class="bold"><em>Was Bits&Bäume verbindet</em> erschienen</h3>
    <p>Das <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">Buch zur Konferenz</a> ist da. Dank an die successfully fundende Crowd!</p>
 </article>

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
