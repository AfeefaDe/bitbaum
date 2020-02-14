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
                    <h3 class="bold">[Berlin, Feb 23, 2020] Bitland meets Baumland</h3>
                    <p>The Berlin Bits&Bäume platform invites people from the land of IT ("Bitland") and people with environmental interests (from "Baumland") to identify how they can support each other. The topic to focus on will be decided at the beginning of the meeting. So bring your topic and join!<a href="https://discourse.bits-und-baeume.org/t/2020-02-23-bitland-trifft-baumland-11-00-uhr-alte-giesserei-berlin/296" target="blank">-> Details</a></p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Mar 02, 2020] Monthly meeting B&B Berlin</h3>
                    <p>The Berlin Bits & Bäume platform invites interested people to get to know whats happening in the local B&B branch in Berlin. Everyone welcome!<a href="https://discourse.bits-und-baeume.org/t/stammtisch-berlin-tbd/270" target="blank">-> Details</a></p>
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
                    <h3 class="bold">[Berlin, Feb 23, 2020] Bitland trifft Baumland</h3>
                    <p>Die Berliner Bits&Bäume Plattform lädt Menschen aus dem Informatik-Land ("Bitland") und Menschen mit Umwelt-Interessen (aus "Baumland") ein, um gegenseitige Unterstützungs-Möglichkeiten auszuloten. Welche Themen dafür angegangen werden, wird am Beginn des Treffens gemeinschaftlich entschieden. Bring also dein Thema mit und komm dazu!<a href="https://discourse.bits-und-baeume.org/t/2020-02-23-bitland-trifft-baumland-11-00-uhr-alte-giesserei-berlin/296" target="blank">-> Details</a></p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Mar 02, 2020] Monatliches Treffe meeting B&B Berlin</h3>
                    <p>Die Berliner Bits&Bäume Plattform lädt alle Interessierten ein, die mehr über die aktuellen Projekte der Berliner Bits & Bäume wissen möchten. Kommt vorbei, jeder ist willkommen! <a href="https://discourse.bits-und-baeume.org/t/stammtisch-berlin-tbd/270" target="blank">-> Details</a></p>
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
