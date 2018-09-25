<?php switch ($lang) {
    case "en":
        ?>
        <section class="stats">
            <div>
                <!-- <p>127 Teilnehmer</p> -->
                <!-- <p>24 Speakers</p> -->
            </div>
            <a href="/anmelden/<?php echo $lang; ?>" class="button">Register now</a>
        </section>

        <section class="switch program active">
          <?php require('components/frab-highlights.php'); ?>
          <p class="square-action square-action--right"><a href="/programm/en">See full programme</a></p>
        </section>

        <section class="switch twitter">
            <?php require('components/twitter.php'); ?>
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
            <div>
                <!-- <p>127 Teilnehmer</p> -->
                <!-- <p>24 Speakers</p> -->
            </div>
            <a href="/anmelden/<?php echo $lang; ?>" class="button">Jetzt anmelden</a>
        </section>

        <section class="switch program active">
          <?php require('components/frab-highlights.php'); ?>
          <p class="square-action square-action--right"><a href="/programm/">Programm ansehen</a></p>
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
