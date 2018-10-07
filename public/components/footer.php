<?php require('components/contact.php'); ?>
<?php require('components/logos.php'); ?>

<?php
switch ($lang) {
case "en":
?>
<p class="submenu">
    <a href='<?php echo $page; ?>/de'>Auf Deutsch</a>
    <a href="/presse/<?php echo $lang; ?>">Press</a>
    <a href="/datenschutz/<?php echo $lang; ?>">Data protection declaration</a>
    <a href="/impressum/<?php echo $lang; ?>">Imprint</a>
</p>
<p class="funding-note">Concept and realization: <a href="https://kollektiv.afeefa.de" target="_blank">
        Afeefa Kollektiv</a>
    <br>
    <a href="https://github.com/afeefade/bitbaum" target="_blank">Source Code on GitHub.com</a>
<p>
    <?php
    break;
    default:
    ?>
<p class="submenu">
    <a href='<?php echo $page; ?>/en'>In English</a>
    <a href="/presse/<?php echo $lang; ?>">Presse</a>
    <a href="/datenschutz/<?php echo $lang; ?>">Datenschutzerklärung</a>
    <a href="/impressum/<?php echo $lang; ?>">Impressum</a>
</p>
<p class="funding-note">Konzept und Umsetzung: <a href="https://kollektiv.afeefa.de" target="_blank">
        Afeefa Kollektiv</a>
    <br>
    <a href="https://github.com/afeefade/bitbaum" target="_blank">Quellcode auf GitHub.com</a>
<p>
    <?php } ?>

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
