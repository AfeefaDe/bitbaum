<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats">
          <?php require('components/frab-stats.php'); ?>
          <a href="https://pretix.eu/bits-und-baeume/171811/" target="_blank" class="button">Buy your ticket</a>
        </section>

        <section class="switch program">
          <?php require('components/frab-highlights.php'); ?>
          <p class="square-action square-action--right"><a href="/programm/en">See full programme</a></p>
        </section>

        <section class="switch twitter active">
          <?php require('components/twitter.php'); ?>
        </section>

        <div class="control">
            <div class="program">
                <div class="icon"></div>
                <p>Program</p>
            </div>
            <div class="twitter active">
                <div class="icon"></div>
                <p>#bitsundbäume</p>
            </div>
        </div>
        <?php
        break;
    default:
        ?>
        <section class="stats">
          <?php require('components/frab-stats.php'); ?>
          <a href="https://pretix.eu/bits-und-baeume/171811/" target="_blank" class="button">Zum Ticketverkauf</a>
        </section>

        <section class="switch program">
          <?php require('components/frab-highlights.php'); ?>
          <p class="square-action square-action--right"><a href="/programm/">Programm ansehen</a></p>
        </section>

        <section class="switch twitter active">
            <?php require('components/twitter.php'); ?>

        </section>

        <div class="control">
            <div class="program">
                <div class="icon"></div>
                <p>Programm</p>
            </div>
            <div class="twitter active">
                <div class="icon"></div>
                <p>#bitsundbäume</p>
            </div>
        </div>
    <?php } ?>

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
</script>
