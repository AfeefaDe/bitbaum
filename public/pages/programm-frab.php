<?php
switch ($lang) {
    case "en":
        ?>
        <article>
            <h1>Programme</h1>
        </article>
        <?php
        break;
    default:
        ?>
        <article>
            <h1>Programm</h1>
            <?php require('components/frab-programme.php'); ?>
        </article>

<?php
} ?>

<script>
</script>