<aside>
    <?php switch ($lang) {
        case "en":
            ?>

            <!-- <section class="stats">
            </section> -->

            <section class="switch news active">
                <article>
                    <h3 class="bold">[Berlin] series of talks <em>Forum Bits&Bäume</em></h3>
                    <p>For more than two years, together with experts we will set <a href="https://bits-und-baeume.org/forum/de" target="blank">focus more on the sustainable design of digitization</a>.
                    </p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Dresden] <em>Bits&Bäume</em> regular's rounds</h3>
                    <p>In <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">Berlin</a> and <a href="https://dresden.bits-und-baeume.org" target="blank">Dresden</a>, the Bits&Bäume community now meets regularly to discuss, to keep up to date and to plan common events.
                    </p>
                </article>
                
                 <article>
                    <h3 class="bold">[Leipzig, Dec 27-30] <em>Bits&Bäume</em>@Chaos Communication Congress</h3>
                    <p> <a href="https://www.ccc.de/en/updates/2019/36c3-in-leipzig" target="blank"> This year's motto of the 36C3 is <em>Resource exhaustion</em>. </a> The program will be out soon, including talks by <em>Bits&Bäume</em> speakers and our legendary <em><a href="https://media.ccc.de/v/bub2018-249-sporangium#t=100" target="blank">Sporangium</a></em>!
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

            <!-- <section class="stats">
            </section> -->

            <section class="switch news active">

                <article>
                    <h3 class="bold">[Berlin] Gesprächsreihe <em>Forum Bits&Bäume</em></h3>
                    <p>Über 2 Jahre hinweg diskutieren wir <a href="https://bits-und-baeume.org/forum/de" target="blank">in Expert*innenrunden die Gestaltung der Digitalisierung</a>. </p>
                </article>

                <article>
                    <h3 class="bold">[Berlin, Dresden] Stammtische <em>Bits&Bäume</em></h3>
                    <p>In <a href="https://asta.tu-berlin.de/aktuelles/bitsundb-ume-erster-stammtisch-berlin" target="blank">Berlin</a> und <a href="https://dresden.bits-und-baeume.org" target="blank">Dresden</a> trifft sich regelmäßig die wachsende Bits&Bäume-Community, um zu diskutieren und gemeinsame Veranstaltungen zu planen.</p>
                </article>
                
                <article>
                    <h3 class="bold">[Leipzig, 27.-30.12.] <em>Bits&Bäume</em>@Chaos Communication Congress</h3>
                    <p> <a href="https://www.ccc.de/en/updates/2019/36c3-in-leipzig" target="blank"> Der 36C3 steht unter dem Mott <em>Resource exhaustion</em>. </a> Bald steht das Programm und wird euch mit einigen bekannten <em>Bits&Bäume</em>-Gesichtern überraschen – und einer Neuauflage des <em><a href="https://media.ccc.de/v/bub2018-249-sporangium#t=100" target="blank">Sporangiums</a></em>!
                    </p>
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
