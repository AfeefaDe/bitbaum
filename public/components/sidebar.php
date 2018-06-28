<section class="stats">
  <div>
    <!-- <p>127 Teilnehmer</p> -->
    <!-- <p>24 Speakers</p> -->
  </div>
  <a href="/anmelden/<?php echo $lang; ?>" class="button">Jetzt anmelden</a>
</section>

<section class="switch program active">
  <h4>Programm</h4>
  <p>Euch erwarten Vorträge, Workshops, Panel, Fishbowl- und Podiumsdiskussionen, Worldcafés, ein Markt der Möglichkeiten und vieles mehr. Genaue Programmpunkte folgen in Kürze.</p>
</section>

<section class="switch twitter">
  <?php require('components/twitter.php'); ?>
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

<script>
  $program = $('section.program');
  $twitter = $('section.twitter');
  $programBtn = $('.control .program');
  $twitterBtn = $('.control .twitter');
  
  $twitterBtn.click(function(){
    $(this).addClass('active');
    $twitter.addClass('active');
    $programBtn.removeClass('active');
    $program.removeClass('active');
  });
  
  $programBtn.click(function(){
    $(this).addClass('active');
    $program.addClass('active');
    $twitterBtn.removeClass('active');
    $twitter.removeClass('active');
  });
</script>