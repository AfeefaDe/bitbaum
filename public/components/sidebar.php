<aside>
    <?php switch ($lang) {
        case "en":
            ?>

            <!-- <section class="stats">
            </section> -->

            <section class="switch news active">
                <article>
                    <h3 class="bold">[Bitland]<em> B&B network</em></h3>
                    <p>For networking there is a <a href="https://lists.posteo.de/listinfo/bitsundbaeume" target="blank">mailing list</a> and a <a href="https://discourse.bits-und-baeume.org" target="blank">discussion board</a>.
                    </p>
                </article>

                <article>
                    <h3 class="bold">[Baumland] Publication <em>Was Bits&Bäume verbindet</em></h3>
                    <p>Our <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">conference book</a> has been published pushing further the topics of the conference. Thanks to all crowdfunders!
                    </p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Jan 20, 2020] Talk „Our common digital future“ by WBGU</h3>
                    <p>The Berlin Bits&Bäume platform invites to the talk „Our common digital future“ by Marcel Dorsch (Wissenschaftlicher Beirat der Bundesregierung Globale Umweltveränderungen, WBGU) <a href="https://discourse.bits-und-baeume.org/t/2020-01-20-bits-baeume-berlin-talk-our-common-digital-future-wbgu/" target="blank">-> Details</a></p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Jan 25, 2020] Workshop Day</h3>
                    <p>The Berlin Bits&Bäume plattform invites to a workshop day about sustainability and digitalisation <a href="https://discourse.bits-und-baeume.org/t/25-01-2020-workshoptag/53" target="blank">-> Details</p>
                </article>

                <article>
                    <h3 class="bold">[Berlin] series of talks <em>Forum Bits&Bäume</em></h3>
                    <p>For more than two years, together with experts we will set <a href="https://bits-und-baeume.org/forum/de" target="blank">focus more on the sustainable design of digitization</a>.
                    </p>
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

            <!-- <section class="stats">
            </section> -->

            <section class="switch news active">
                <article>
                    <h3 class="bold">[Bitland]<em> Das B&B-Netzwerk</em></h3>
                    <p>Um uns zu vernetzen, haben wir eine <a href="https://lists.posteo.de/listinfo/bitsundbaeume" target="blank">Mailingliste</a> und ein <a href="https://discourse.bits-und-baeume.org" target="blank">Diskussionsbrett</a>.
                    </p>
                </article>

                <article>
                    <h3 class="bold">[Baumland]<em> Was Bits&Bäume verbindet</em> erschienen</h3>
                    <p>Das <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="blank">Buch zur Konferenz</a> ist da. Dank an die successfully fundende Crowd!</p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, 20.01.2020] Vortrag „Our common digital future“ by WBGU</h3>
                    <p>Die Berliner Bits&Bäume-Plattform lädt ein zum Vortrag „Our common digital future“ von Marcel Dorsch (Wissenschaftlicher Beirat der Bundesregierung Globale Umweltveränderungen, WBGU)! <a href="https://discourse.bits-und-baeume.org/t/2020-01-20-bits-baeume-berlin-talk-our-common-digital-future-wbgu/" target="blank">Details.</a></p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, 25.01.2020, 2020] Workshop-Tag "Digitalisierung & Nachhaltigkeit"</h3>
                    <p>Die Berliner Bits&Bäume-Plattform lädt ein zum Workshop-Tag über Digitalisierung & Nachhaltigkeit! <a href="https://discourse.bits-und-baeume.org/t/25-01-2020-workshoptag/53" target="blank">Details.</p>
                </article>

                <article>
                    <h3 class="bold">[Berlin] Gesprächsreihe <em>Forum Bits&Bäume</em></h3>
                    <p>Über 2 Jahre hinweg diskutieren wir <a href="https://bits-und-baeume.org/forum/de" target="blank">in Expert*innenrunden die Gestaltung der Digitalisierung</a>. </p>
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
    if (!KolleDeviceDetector.isMobile()) {
        const ps = new PerfectScrollbar('aside .switch', {
            wheelSpeed: 0.2,
            wheelPropagation: false,
            minScrollbarLength: 10,
            suppressScrollX: true
        });
    };

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
        if ($news.hasClass('active')) {
            showTwitter();
        }
        else {
            showNews();
        }

        ps.update();
    }

    var index = 0;
    // setInterval(function () {
    //     switchSidebar();
    // }, 10000)
</script>
