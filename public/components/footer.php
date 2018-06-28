<?php require('components/logos.php'); ?>
<p class="submenu">
    <?php
    switch ($lang) {
        case "en":
            echo "<a href='$page/de'>In Deutsch</a>";
            break;
        default:
            echo "<a href='$page/en'>In Englisch</a>";
    }
    ?>
    <a href="/datenschutz/<?php echo $lang; ?>">Datenschutzerklärung</a>
    <a href="/impressum/<?php echo $lang; ?>">Impressum</a>
</p>
<p class="funding-note">Konzept und Umsetzung: <a href="https://kollektiv.afeefa.de" target="_blank">
        Afeefa Kollektiv</a>
    <br>
    <a href="https://github.com/afeefade/bitbaum" target="_blank">Quellcode auf GitHub.com</a>
<p>