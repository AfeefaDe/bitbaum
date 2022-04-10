<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">

<title>Bits &amp; Bäume - die Bewegung für Digitalisierung und Nachhaltigkeit</title>
<meta name="description" content="Die „Bits &amp; Bäume“ wird dezentralisiert fortgeführt, auf dass sie weiter wächst und gedeiht.">

<meta name="viewport" content="initial-scale=1">
<meta name="viewport" content="initial-scale=1">
<meta name="referrer" content="same-origin">

<meta property="og:url" content="https://bits-und-baeume.org">
<meta property="og:type" content="website">
<meta property="og:title" content="Bits&amp;Bäume: Digitalisierung und Nachhaltigkeit">
<meta property="og:description" content="2. Bits&amp;Bäume Konferenz: 30.09.-02.10.2022">
<meta property="og:image" content="/img/bits-und-baeume-logo-square.png">
<!-- Stylesheets -->
<link rel="stylesheet" href="/styles/styles.min.css">
<script src="/js/jquery.min.js"></script>

<link rel="stylesheet" href="/styles/perfect-scrollbar.css">
<script src="/js/perfect-scrollbar.min.js"></script>

<script src="/js/KolleDeviceDetector.js"></script>



<!-- Override some css rules for special case konferenz-->
<style>
    .sub-page header.main {
        width: 100%;
    }
    body > section {
        width: 100%;
    }
    .back-button {
        visibility: hidden;
    }

</style>

</head>

<body class="page-konferenz sub-page">
<header class="main">
    <h2><a href="/de">Bits & Bäume</a></h2>

                <a href='/de' class='button back-button'>zur Hauptseite</a>
            <div>
                <h1>
                    <span>Die Bewegung</span>
                    <span>für Digitalisierung</span>
                    <span>und Nachhaltigkeit</span>
                </h1>

                <p>entstanden in Berlin auf der <a href="/rueckblick/de"><u>B&B-Konferenz 2018</u></a></p>
            </div>

        </header>

    <?php require 'konferenz_content.php'; ?>



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
        } else {
            showNews();
        }

        ps.update();
    }

    var index = 0;
    // setInterval(function () {
    //     switchSidebar();
    // }, 10000)
</script>

<footer>
    <?php require 'components/contact.php';?>
    <?php require 'components/logos.php';?>

<p class="submenu">
    <a href='/konferenz/en'>In English</a>
    <a href="/presse/de">Presse</a>
    <a href="/datenschutz/de">Datenschutzerklärung</a>
    <a href="/impressum/de">Impressum</a>
</p>
<p class="funding-note">
    <a href="https://github.com/afeefade/bitbaum" target="_blank">Quellcode auf GitHub.com</a>
<p>

<script type="text/javascript" language="javascript">

// Email obfuscator script 2.1 by Tim Williams, University of Arizona
// Random encryption key feature coded by Andrew Moulden
// This code is freeware provided these four comment lines remain intact
// A wizard to generate this code is at http://www.jottings.com/obfuscator/

var mailCodes = [
    {
        address: "info@bits-und-baeume.org",
        hex: "&#x69;&#x6e;&#x66;&#x6f;&#x40;&#x62;&#x69;&#116;&#x73;&#45;&#x75;&#x6e;&#x64;&#x2d;&#x62;&#x61;&#x65;&#117;&#109;&#x65;&#x2e;&#x6f;&#x72;&#x67;",
        coded: "t0qL@Et9u-70I-EJY7QY.LUO",
        key: "iZK8QXrjzGs6qFI0Oy5baYLVt2CN43UpThuvMWkwARmEJPD19cfSdngHxB7eol",
        cssId: "mail_replace_info"
    },
    {
        address: "call@bits-und-baeume.org",
        hex: "&#x63;&#x61;&#x6c;&#x6c;&#x40;&#x62;&#x69;&#x74;&#x73;&#x2d;&#x75;&#x6e;&#x64;&#x2d;&#x62;&#x61;&#x65;&#x75;&#x6d;&#x65;&#x2e;&#x6f;&#x72;&#x67;",
        coded: "kICC@pYac-djU-pIfduf.x5E",
        key: "FgXe91K4nkrCIvhPdiSVbxwsBEtfy3mMj05QWHZ8UYzGpRqcAlaNJDu6TLOo27",
        cssId: "mail_replace_call"
    },
    {
        address: "forum@bits-und-baeume.org",
        hex: "&#x66;&#x6f;&#x72;&#x75;&#x6d;&#x40;&#x62;&#x69;&#x74;&#x73;&#x2d;&#x75;&#x6e;&#x64;&#x2d;&#x62;&#x61;&#x65;&#x75;&#x6d;&#x65;&#x2e;&#x6f;&#x72;&#x67;",
        coded: "wIBQ7@nNAf-QYc-nJqQ7q.IB6",
        key: "GjWVpNJcm5S1DueBFzOxYATf48kPREgob7X9M3QqyliadhHKwZL2rCU6Intvs0",
        cssId: "mail_replace_forum"
    },
    {
        address: "sporangium@bits-und-baeume.org",
        hex: "&#x73;&#x70;&#x6f;&#x72;&#x61;&#x6e;&#x67;&#x69;&#x75;&#x6d;&#x40;&#x62;&#x69;&#x74;&#x73;&#x2d;&#x75;&#x6e;&#x64;&#x2d;&#x62;&#x61;&#x65;&#x75;&#x6d;&#x65;&#x2e;&#x6f;&#x72;&#x67;",
        coded: "EuCNzakmHd@RmvE-Haq-RzoHdo.CNk",
        key: "K45BW1osjfbcD96kqUmAPhT7vI2ruawlLVOXCEeFR8yZJxGgdSiM0YQ3tNHzpn",
        cssId: "mail_replace_sporangium"
    },
    {
        address: "presse@bits-und-baeume.org",
        hex: "&#x70;&#x72;&#x65;&#x73;&#x73;&#x65;&#x40;&#x62;&#x69;&#x74;&#x73;&#x2d;&#x75;&#x6e;&#x64;&#x2d;&#x62;&#x61;&#x65;&#x75;&#x6d;&#x65;&#x2e;&#x6f;&#x72;&#x67;",
        coded: "q4KeeK@tdLe-lJo-tjKlFK.h4P",
        key: "BQ96yx0fhJrmO3agXZdqCeLl8RkTWVA7bUYI4F5DjPG2onEKv1cMSwipzstuHN",
        cssId: "mail_replace_presse"
    },
    {
        address: "katja.george@bits-und-baeume.org",
        hex: "&#x6b;&#x61;&#x74;&#x6a;&#x61;&#x2e;&#x67;&#x65;&#x6f;&#x72;&#x67;&#x65;&#x40;&#x62;&#x69;&#x74;&#x73;&#x2d;&#x75;&#x6e;&#x64;&#x2d;&#x62;&#x61;&#x65;&#x75;&#x6d;&#x65;&#x2e;&#x6f;&#x72;&#x67;",
        coded: "5w0nw.MW1TMW@xK0J-vlZ-xwWvUW.1TM",
        key: "H8CoqtDEiud6GaThSBjelcYUzkx2MLJ4I971y0AQKvZ3rwpRFVnWfmOPb5gNsX",
        cssId: "mail_replace_katja"
    }
];

setTimeout(
    function () {

        for (var k=0; k<mailCodes.length; k++) {
            var mail = mailCodes[k];

            coded = mail.coded
            key = mail.key
            shift = coded.length
            link = ""
            for (i = 0; i < coded.length; i++) {
                if (key.indexOf(coded.charAt(i)) === -1) {
                    ltr = coded.charAt(i)
                    link += (ltr)
                }
                else {
                    ltr = (key.indexOf(coded.charAt(i)) - shift + key.length) % key.length
                    link += (key.charAt(ltr))
                }
            }
            let cont = document.getElementsByClassName(mail.cssId)
            if(cont.length) {
                for (var index = 0; index < cont.length; index++) {
                    var element = cont[index];
                    element.innerHTML = "<a href='mailto:" + link + "'>" + mail.hex + "</a>"
                }
            }
        }
    }, 2000);
</script>
</footer>

<script>

  $(document).ready(function() {

    $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    var $footer = $('footer');
    var $sidebar = $('aside');

    $(document).on('resize scroll', function(){
      var scrollPos = document.scrollingElement.scrollTop;

      if ( ($footer.length && $footer.isInViewport()) ) {
        $sidebar.removeClass('fixed');
        $sidebar.css('top', ($footer.offset().top - $sidebar.height()) );
      }
      else {
        $sidebar.addClass('fixed');
        $sidebar.css('top', 0);
      }
    });

  });




    var isIE = function () {
        return navigator.userAgent.match(/MSIE|Trident/i);
    };
    if (isIE()) $('body').addClass('ie-browser');

    $('.readmore, .readless').click(function(){
      $(this).parent().find('.lessContent').toggle();
      $(this).parent().find('.moreContent').toggle();

      $(this).parent().find('.readmore').toggle();
      $(this).parent().find('.readless').toggle();
    });

</script>
</body>
</html>


