<aside>
    <?php switch ($lang) {
        case "en":
            ?>

            <section class="stats">
            </section>

            <section class="switch news active">
                <article>
                    <h3 class="bold">Signees of our demands</h3>
                    <p><?php echo SupportController::getTotalNumberOfSupports(); 
                            ?> supporters so far, you should <a href="/forderungen/<?php echo $lang; ?>">sign</a> as well.
                    </p>
                </article>
                
                <article>
                    <h3 class="bold">[Oldenburg, Nov 7th, 6pm] guest lecture <em>Nachhaltige Digitalisierung – digitale Nachhaltigkeit</em></h3>
                    <p> This year's <a href="https://nachhaltigkeit-ol.de/">Sustainability Week at the University of Oldenburg</a> also focusses on digitalization as one of the topics. Main focus of our guest lecture: how it links to sustainability and the Bits&Bäume demands.
                    </p>
                </article>
                
                <article>
                    <h3 class="bold">[Berlin, Dresden] <em>Bits&Bäume</em> regular's rounds</h3>
                    <p>In <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">Berlin</a> and <a href="https://dresden.bits-und-baeume.org" target="blank">Dresden</a>, the Bits&Bäume community now meets regularly to discuss, to keep up to date and to plan common events.
                    </p>
                </article>
                
                 <article>
                    <h3 class="bold">Publication <em>Was Bits&Bäume verbindet</em></h3>
                    <p>Our <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">conference book</a> has been published pushing further the topics of the conference. Thanks to all crowdfunders!
                     </p>.
                </article>
            </section>

            <section class="switch twitter">
                <?php require 'components/twitter.php'; ?>

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
                    <h3 class="bold">Unterstützer*innen unserer Forderungen</h3>
                    <p><?php echo SupportController::getTotalNumberOfSupports(); 
                            ?> Personen und Organisationen haben bisher unterschrieben, <a href="/forderungen/<?php echo $lang; ?>">unterzeichne</a> auch du.</p>
                </article>

                <article>
                    <h3 class="bold">[Oldenburg, 07.11., 18 Uhr] Gastvorlesung <em>Nachhaltige Digitalisierung – digitale Nachhaltigkeit</em></h3>
                    <p> Während der <a href="https://nachhaltigkeit-ol.de/">Nachhaltigkeitswoche der Universität Oldenburg </a>steht am Donnerstag das Thema Digitalisierung im Zentrum. Fokus unserer Gastvorlesung: die Bits&Bäume-Forderungen und der Zusammenhang von Digitalisierung und Nachhaltigkeit.</p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Dresden] Stammtische <em>Bits&Bäume</em></h3>
                    <p>In <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">Berlin</a> und <a href="https://dresden.bits-und-baeume.org" target="blank">Dresden</a> trifft sich regelmäßig die wachsende Bits&Bäume-Community, um zu diskutieren und gemeinsame Veranstaltungen zu planen.</p>
                </article>

                <article>
                    <h3 class="bold"><em>Was Bits&Bäume verbindet</em> erschienen</h3>
                    <p>Das <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">Buch zur Konferenz</a> ist da. Dank an die successfully fundende Crowd!</p>
                </article>


            </section>

            <section class="switch twitter">
                <?php require 'components/twitter.php'; ?>

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
        <?php } ?>

</aside>

<script>
    $news = $('section.news');
    $twitter = $('section.twitter');
    $newsBtn = $('.control .news');
    $twitterBtn = $('.control .twitter');

    function showTwitter() {
        $twitterBtn.addClass('active');
        $twitter.addClass('active');
        $newsBtn.removeClass('active');
        $news.removeClass('active');
    }

    function showNews() {
        $newsBtn.addClass('active');
        $news.addClass('active');
        $twitterBtn.removeClass('active');
        $twitter.removeClass('active');
    }

    $twitterBtn.click(function() {
        showTwitter();
    });

    $newsBtn.click(function() {
        showNews();
    });

    $portraits = $('.portrait');

    function switchSidebar() {
        if ($news.hasClass('active'))
            showTwitter();
        else
            showNews();
    }

    var index = 0;
    // setInterval(function () {
    //     switchSidebar();
    // }, 10000)
</script>
