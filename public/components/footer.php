<?php
switch ($lang) {
case "en":
?>
<p class="language-switch">
    <a href='<?php echo $page; ?>/de'>Auf Deutsch</a>
</p>
<?php require('components/logos.php'); ?>
<p class="submenu">
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
<p class="language-switch">
    <a href='<?php echo $page; ?>/en'>In English</a>
</p>
<?php require('components/logos.php'); ?>
<p class="submenu">
    <a href="/datenschutz/<?php echo $lang; ?>">Datenschutzerklärung</a>
    <a href="/impressum/<?php echo $lang; ?>">Impressum</a>
</p>
<p class="funding-note">Konzept und Umsetzung: <a href="https://kollektiv.afeefa.de" target="_blank">
        Afeefa Kollektiv</a>
    <br>
    <a href="https://github.com/afeefade/bitbaum" target="_blank">Quellcode auf GitHub.com</a>
<p>
    <?php } ?>