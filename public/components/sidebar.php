<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats">
          <?php require('components/frab-stats.php'); ?>
          <a href="https://pretix.eu/bits-und-baeume/171811/" target="_blank" class="button">Buy your ticket</a>
        </section>

        <section class="switch program">
          <h4>Program</h4>
          <p>Lectures, workshops, panels, fishbowl and panel discussions, world cafés, a vibrant forum space and much more await you. Details of the program will follow soon.</p>
          <?php #require('components/frab-highlights.php'); ?>
          <!-- <p class="square-action square-action--right"><a href="/programm-frab/en">See full programme</a></p> -->
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
          <h4>Programm</h4>
          <p>Euch erwarten Vorträge, Workshops, Panel, Fishbowl- und Podiumsdiskussionen, Worldcafés, ein buntes Forum und vieles mehr. Genaue Programmpunkte folgen in Kürze.</p>
          <?php #require('components/frab-highlights.php'); ?>
          <!-- <p class="square-action square-action--right"><a href="/programm-frab">Programm ansehen</a></p> -->
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
